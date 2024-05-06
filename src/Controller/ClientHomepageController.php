<?php

namespace App\Controller;

use App\Entity\ProductOrder;
use App\Repository\ProductRepository;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;

class ClientHomepageController extends AbstractController
{
    #[Route('/client/homepage', name: 'app_client_homepage')]
    public function index(): Response
    {
        return $this->render('client_homepage/index.html.twig', [
            'controller_name' => 'ClientHomepageController',
        ]);
    }

    #[Route('/client/products', name: 'app_client_products')]
    public function viewProducts(ProductRepository $productsRepository): Response
    {
        return $this->render('client/Products/ProductsList.html.twig', [
            'controller_name' => 'ClientHomepageController',
            'products' => $productsRepository->findAll()

        ]);
    }
    #[Route('/client/products/details', name: 'app_product_view')]
    public function viewActivityDetails(Request $request,ProductRepository $productsRepository): Response
    {
        $product = $productsRepository->find($request->query->get('id'));
        return $this->render('client/Products/ProductDetails.html.twig', [
            'controller_name' => 'ClientController',
            'product' => $product,
        ]);
    }

    #[Route('/client/products/order', name: 'client_order_product')]
    public function OrderAProduct(EntityManagerInterface $entityManager,Request $request,ProductRepository $productsRepository,UsersRepository $usersRepository): Response
    {
        $quantity = $request->request->get('quantity');
        $id = $request->request->get('product');
        $productOrder = new ProductOrder();
        $product=$productsRepository->findBy(['id' => $id])[0];
        $price=$quantity*$product->getPrice();
        $productOrder->setStatus( "Waiting for payment");
        $productOrder->setPrice($product->getPrice());
        $productOrder->setProductId($product);
        $productOrder->setQty($quantity);

        $User=$usersRepository->findBy(['id' => 1])[0];
        $productOrder->setIdClient($User);
        $entityManager->persist($productOrder);
        $entityManager->flush();
        return $this->render('strip/index.html.twig', [
            'controller_name' => 'ClientController',
            'price' => $price,
            'id' => $productOrder->getId(),
            'stripe_key' =>$_ENV["STRIPE_KEY"],

        ]);
    }
}
