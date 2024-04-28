<?php

namespace App\Controller;

use App\Repository\ActivityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    #[Route('/admin/activities', name: 'app_admin_activites')]
    public function viewActivities(ActivityRepository $activityRepository): Response
    {
        $activities = $activityRepository->findAll();
        $activitiesImageData = [];

        foreach ($activities as $activity) {
            $activitiesImageData[] = $activity->getImageData();
        }

        return $this->render('admin/activities/index.html.twig', [
            'controller_name' => 'AdminController',
            'activities' => $activities,
            'activitiesImageData' => $activitiesImageData
        ]);
    }
}
