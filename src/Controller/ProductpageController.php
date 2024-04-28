<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductpageController extends AbstractController
{
    #[Route('/productpage', name: 'app_productpage')]
    public function index(): Response
    {
        return $this->render('productpage/shop-category.twig', [
            'controller_name' => 'ProductpageController',
        ]);
    }
}
