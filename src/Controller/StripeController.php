<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Stripe\Charge;
use Stripe\Stripe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;

use App\Repository\ProductRepository;

use App\Repository\ProductOrderRepository;
use App\Entity\ProductOrder;


class StripeController extends AbstractController
{
    #[Route('/stripe', name: 'app_payment')]
    public function index(): Response
    {
        return $this->render('strip/index.html.twig', [
            'controller_name' => 'StripeController',
            'stripe_key' =>$_ENV["STRIPE_KEY"],
        ]);
    }

    #[Route('/stripe/create-charge', name: 'app_stripe_charge', methods: ['POST'])]
    public function createCharge(EntityManagerInterface $entityManager,ProductRepository $productRepository,ProductOrderRepository $productOrderRepository,Request $request, ManagerRegistry $doct): Response
    {
        Stripe::setApiKey($_ENV["STRIPE_SECRET"]);
        Charge::create([
            "amount" => 10 * 100,
            "currency" => "usd",
            "source" => $request->request->get('stripeToken'),
            "description" => "Binaryboxtuts Payment Test",
        ]);
        $productOrder = $products = array_reverse($productOrderRepository->findBy(['idClient' => 1]))[0];
        $productOrderRepository->sms();
        // Métier quantité
        $product = $productRepository->findBy(['id' => $productOrder->getProductId()], null, 1)[0];
        $product->setStockqty($product->getStockqty() - $productOrder->getQty());
        $entityManager->persist($product);
        $productOrder->setStatus("Paid");
        $em = $doct->getManager();
        $em->flush();
        $this->addFlash('success', 'votre paiement a été effectué avec succès');
        return $this->render('client/Products/ProductsList.html.twig', [
            'controller_name' => 'ClientHomepageController',
            'products' => $productRepository->findAll(),
        ]);
    }

}