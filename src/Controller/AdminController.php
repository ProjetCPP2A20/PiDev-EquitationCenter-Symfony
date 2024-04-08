<?php

namespace App\Controller;

use App\Entity\Activity;
use App\Entity\Activitysession;
use App\Form\ActivityType;
use App\Repository\ActivityRepository;
use App\Repository\ActivitysessionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
    public function viewActivities(Request $request,PaginatorInterface $paginator,ActivityRepository $activityRepository,EntityManagerInterface $entityManager): Response
    {
        $activity = new Activity();
        $form = $this->createForm(ActivityType::class, $activity);

        $form->handleRequest($request);

        if ($form->isSubmitted() && !$form->isValid()) {
            $errors = [];
            $dateString = $request->get('activity')['date'];
            $date = new \DateTime($dateString);
            $formattedDate = $date->format('Y-m-d');
            $activity->setDate($date);
            $activityDate = new \DateTime($activity->getDate()->format('Y-m-d'), new \DateTimeZone('UTC'));
            $now = new \DateTime((new \DateTime())->format('Y-m-d'), new \DateTimeZone('UTC'));


            foreach ($form->getErrors(true, true) as $error) {
                if (!$error->getOrigin()->getName() != "date") {
                    $fieldName = $error->getOrigin()->getName();
                    $errorMessage = $error->getMessage();

                    $errors['errors'][$fieldName] = $errorMessage;
                }
            }
//            dd($request);
            unset($errors["errors"]["imageData"]);
            unset($errors["errors"]["date"]);
            if ($activityDate > $now) {
                $errors['errors']['date'] = 'The date must be in the past or today.';
            }
            if(!empty($errors['errors'])){

                return new Response(json_encode($errors), 200, ['Content-Type' => 'application/json']);
            }
            }
        if ($form->isSubmitted()) {
            // dd($form->getData());
            $dateString = $request->get('activity')['date'];
            $date = new \DateTime($dateString);
            $formattedDate = $date->format('Y-m-d');
            $activity->setDate($date);
           // $uploadedFile = $request->files->get('activity')['imageData']->getData();
           // $uploadedFile = $request->files->get('activity')['imageData']->getData();

            $uploadedFile=$request->files->get('activity_imageData')[0]->getPathname();
            if ($uploadedFile) {

                // Read the binary data from the uploaded file
                $binaryData = file_get_contents($uploadedFile);

                // Set the binary data on your entity
                $activity->setImagedata($binaryData);

                // Persist the entity
                $entityManager->persist($activity);
                $entityManager->flush();
                // Retrieve the newly added activity
                $newActivity = $activityRepository->find($activity->getId());
                $activityData = get_object_vars($activity);

                // Serialize the activity data into JSON
                $responseData = json_encode($activityData);

                // Return the serialized activity data as JSON response
                return new Response($responseData);


            }
        }
            $activities = $activityRepository->findAll();
            $activitiesImageData = [];
            $pagination = $paginator->paginate(
                $activities,
                $request->query->getInt('page', 1),
                10
            );
            foreach ($activities as $activity) {
                $activitiesImageData[] = $activity->getImageData();
            }
            return $this->render('admin/activities/index.html.twig', [
                'controller_name' => 'AdminController',
                'activities' => $activities,
                'activitiesImageData' => $activitiesImageData,
                'pagination' => $pagination,
                'form' => $form->createView(),
            ]);
        }
    #[Route('/admin/sessions', name: 'app_admin_sessions')]
    public function viewSessions(Request $request,PaginatorInterface $paginator,ActivityRepository $activityRepository): Response
    {
        $activities = $activityRepository->findAll();

        /*  $activities = $activityRepository->findAll();
          $activitiesImageData = [];
          $pagination = $paginator->paginate(
              $activities,
              $request->query->getInt('page', 1),
              10
          );
          foreach ($activities as $activity) {
              $activitiesImageData[] = $activity->getImageData();
          }*/
        return $this->render('admin/activitySessions/index.html.twig', [
            'activities' => $activities,
            //'activitiesImageData' => $activitiesImageData,
            //'pagination' => $pagination
        ]);
    }

    #[Route('/admin/sessions/calendar', name: 'app_admin_sessions_calendar')]
    public function viewCalendar(Request $request,ActivitysessionRepository $activitysessionRepository,ActivityRepository $activityRepository): Response
    {
        $activities = $activityRepository->findAll();
        $activitysessions = $activitysessionRepository->findAll();
        /*  $activities = $activityRepository->findAll();
          $activitiesImageData = [];
          $pagination = $paginator->paginate(
              $activities,
              $request->query->getInt('page', 1),
              10
          );
          foreach ($activities as $activity) {
              $activitiesImageData[] = $activity->getImageData();
          }*/

        return $this->render('admin/activitySessions/calendar.html.twig', [
             'activities' => $activities,
            'activitysessions' => $activitysessions,
            'test' => 'test'
            //'pagination' => $pagination
        ]);
    }
    #[Route('/admin/activity/delete', name: 'app_admin_activity_delete')]

    public function deleteActivity(Request $request,EntityManagerInterface $entityManager,ActivityRepository $activityRepository): Response
    {
        // Retrieve the activity ID from the request data
        $activityId = $request->request->get('id');

        // Here, you can perform deletion logic, such as deleting the activity from the database
        $activity = $activityRepository->find($activityId);
        // For demonstration purposes, let's assume we're just logging the activity ID
        $entityManager->remove($activity);
        $entityManager->flush();

        // Return a success response
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent(json_encode(['message' => 'Activity deleted successfully']));
        return $response;    }
}
