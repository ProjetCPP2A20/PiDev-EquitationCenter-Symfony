<?php

namespace App\Controller;

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
    public function createCharge(ProductOrderRepository $productOrderRepository,Request $request, ManagerRegistry $doct): Response
    {
        Stripe::setApiKey($_ENV["STRIPE_SECRET"]);
        Charge::create ([
            "amount" => 10 * 100,
            "currency" => "usd",
            "source" => $request->request->get('stripeToken'),
            "description" => "Binaryboxtuts Payment Test",
        ]);
        $productOrder = $productOrderRepository->findBy(['idClient' => 1])[0];
        $productOrderRepository->sms();
        $productOrder->setStatus("Paid");
        $em = $doct->getManager();
        $em->flush();

        return $this->redirectToRoute('app_client_products', [], Response::HTTP_SEE_OTHER);
    }


}