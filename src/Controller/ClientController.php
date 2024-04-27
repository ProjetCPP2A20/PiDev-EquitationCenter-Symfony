<?php

namespace App\Controller;

use App\Entity\Useractivity;
use App\Repository\ActivityRepository;
use App\Repository\ActivitysessionRepository;
use App\Repository\UseractivityRepository;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientController extends AbstractController
{
    #[Route('/client', name: 'app_client')]
    public function index(): Response
    {
        return $this->render('client/index.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }
    #[Route('/client/activities', name: 'app_activities_view')]
    public function viewActivities(ActivityRepository $activityRepository): Response
    {
        $activities = $activityRepository->findAll();
        return $this->render('client/activities/ActivitiesView.html.twig', [
            'controller_name' => 'ClientController',
            'activities' => $activities
        ]);
    }
    #[Route('/client/activities/details', name: 'app_activity_view')]
    public function viewActivityDetails(UsersRepository $usersRepository,UseractivityRepository $useractivityRepository,Request $request,ActivitysessionRepository $activitysessionRepository,ActivityRepository $activityRepository): Response
    {
        $activity = $activityRepository->find($request->query->get('id'));
        $activitySessions = $activitysessionRepository->findBy(['activityid' => $activity]);
        $dayNames = [
            0 => 'Sunday',
            1 => 'Monday',
            2 => 'Tuesday',
            3 => 'Wednesday',
            4 => 'Thursday',
            5 => 'Friday',
            6 => 'Saturday'
        ];
        foreach ($activitySessions as $session) {
            $weekdayValue = $session->getWeekday();
            $session->dayName = $dayNames[$weekdayValue];
        }
        $activityUsers = $useractivityRepository->findBy(['activityid' => $activity]);
        foreach ($activityUsers as $activityUser) {
            $activityUser->user = $usersRepository->find($activityUser->getUserid());
        }
        // CHANGE USERID TO CURRENT USERID #########################
        $isSubscribed = $useractivityRepository->findBy(['activityid' => $activity, 'userid' => 2]); // CHANGE USERID TO CURRENT USERID

        $isSubscribed = empty($isSubscribed) ? false : true;
        $isCommented = $useractivityRepository->findBy(['activityid' => $activity, 'userid' => 2, 'feedback' => null]); // CHANGE USERID TO CURRENT USERID
        $activity->users = $activityUsers;

        $ratings = [];
        foreach ($activityUsers as $activityUser) {
            $ratings[] = $activityUser->getStars();
        }
        $averageRating = count($ratings) > 0 ? array_sum($ratings) / count($ratings) : 0;

        return $this->render('client/activities/ActivityDetails2.html.twig', [
            'controller_name' => 'ClientController',
            'activity' => $activity,
            'sessions' => $activitySessions,
            'avgrating' => $averageRating,
            'isSubscribed' => $isSubscribed

        ]);
    }

    #[Route('/client/activities/submitReview', name: 'app_activity_review_submit')]
    public function submitReview(EntityManagerInterface $entityManager,UsersRepository $userRepository,Request $request,ActivityRepository $activityRepository): JsonResponse
    {
        $activity = $activityRepository->find($request->request->get('activityId'));

        $rating = $request->request->get('stars');
        $description = $request->request->get('contact_message2');

        $userid=2;
        $userActivity = new Useractivity();
        $userActivity->setActivityid($activity);
        $user= $userRepository->find($userid);
        $userActivity->setUserid($user);
        $userActivity->setFeedback($description);
        $userActivity->setStars($rating);
        $userActivity->setFeedbackDate(new \DateTime());
        $entityManager->persist($userActivity);
        $entityManager->flush();
        return new JsonResponse(200);
    }

}
