<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientHomepageController extends AbstractController
{
    #[Route('/client/homepage', name: 'app_client_homepage')]
    public function index(): Response
    {
        return $this->render('client_homepage/index.html.twig', [
            'controller_name' => 'ClientHomepageController',
        ]);
    }
}
