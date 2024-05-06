<?php

namespace App\Controller;

use App\Repository\ActivityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;

class DataTypesTesterController extends AbstractController
{
    #[Route('/data/types/tester', name: 'app_data_types_tester')]
    public function index(ActivityRepository $activityRepository): Response
    {
        $activity = $activityRepository->find(1);
        return $this->render('data_types_tester/index.html.twig', ['activity' => $activity]);
    }
}
