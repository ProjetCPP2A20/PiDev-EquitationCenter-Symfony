<?php

namespace App\Controller;

use App\Entity\Activity;
use App\Entity\Activitysession;
use App\Form\ActivitySessionType;
use App\Form\ActivityType;
use App\Repository\ActivityRepository;
use App\Repository\ActivitysessionRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
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



    // Activity CRUD functions
    #[Route('/api/activity/edit/{id}', name: 'api_activity_edit')]
    // Trash function, Delete if not exploitable
    public function editActivity(Request $request, int $id, EntityManagerInterface $em, ActivityRepository $activityRepository): Response
    {
        $activity = $activityRepository->find($id);

        if (!$activity) {
            throw $this->createNotFoundException('Activity not found');
        }

        $form = $this->createForm(ActivityType::class, $activity,
        [
            'action' => $this->generateUrl('app_admin_activites', ['id' => $id])
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            return new JsonResponse(['success' => true]);
        }

        $htmlContent = $this->renderView('admin/activities/partials/EditActivitySnippet.html.twig', [
            'form' => $form->createView(),
            'activity' => $activity,
        ]);
        return new JsonResponse(['html' => $htmlContent]);
    }
   // get Activities API => JSONResponse
    #[Route('/api/activities', name: 'api_activities')]
    public function getActivities(Request $request, PaginatorInterface $paginator, EntityManagerInterface $em, ActivityRepository $activityRepository)
    {
        $page = $request->query->getInt('page', 1);

        $activities = $activityRepository->findAll();
        $pagination = $paginator->paginate(
            $activities,
            $page,
            10

        );


        // Use the route
        $pagination->setUsedRoute('app_admin_activites');

        $paginationHtml = $this->renderView('admin/activities/partials/PaginationsSnippet.html.twig', [
            'pagination' => $pagination
        ]);
        $htmlContent = $this->renderView('admin/activities/partials/ActivitiesSnippet.html.twig', [
            'activities' => $activities,
            'pagination' => $pagination
        ]);


        return new JsonResponse(['html' => $htmlContent, 'paginationHtml' => $paginationHtml]);
    }

    // View activities
    #[Route('/admin/activities', name: 'app_admin_activites')]
    public function viewActivities(Request $request,PaginatorInterface $paginator,ActivityRepository $activityRepository,EntityManagerInterface $entityManager): Response
    {
        $activity = new Activity();
        $form = $this->createForm(ActivityType::class, $activity);

        // handling form
        $form->handleRequest($request);
        // checking for form errors
        if ($form->isSubmitted() && !$form->isValid()) {
            $errors = [];
            $dateString = $request->get('activity')['date'];
            $date = new \DateTime($dateString);
            $formattedDate = $date->format('Y-m-d');
            $activity->setDate($date);
            $activityDate = new \DateTime($activity->getDate()->format('Y-m-d'), new \DateTimeZone('UTC'));
            $now = new \DateTime((new \DateTime())->format('Y-m-d'), new \DateTimeZone('UTC'));
            // looping through errors
            foreach ($form->getErrors(true, true) as $error) {
                if (!$error->getOrigin()->getName() != "date") {
                    $fieldName = $error->getOrigin()->getName();
                    $errorMessage = $error->getMessage();

                    $errors['errors'][$fieldName] = $errorMessage;
                }
            }
            // unsetting image data and date errors due to malformed inputs in formtype
            unset($errors["errors"]["imageData"]);
            unset($errors["errors"]["date"]);
            // checking if date is in the past
            if ($activityDate > $now) {
                $errors['errors']['date'] = 'The date must be in the past or today.';
            }
            if(!empty($errors['errors'])){

                return new Response(json_encode($errors), 200, ['Content-Type' => 'application/json']);
            }
            }
        // if form is valid
        if ($form->isSubmitted()) {
            $dateString = $request->get('activity')['date'];
            $date = new \DateTime($dateString);
            $formattedDate = $date->format('Y-m-d');
            $activity->setDate($date);
            if($activity->getId()==0)
            {
                $uploadedFile=$request->files->get('activity_imageData')[0]->getPathname();
                if ($uploadedFile) {
                    // read the binary data from the uploaded file
                    $binaryData = file_get_contents($uploadedFile);

                    $activity->setImagedata($binaryData);
                    $entityManager->persist($activity);
                    $entityManager->flush();
                    $newActivity = $activityRepository->find($activity->getId());
                    $activityData = get_object_vars($activity);

                    $responseData = json_encode($activityData);

                    return new Response($responseData);
                }
            }
            if ($activity->getId()!=0){
                $updatedactivity = $activityRepository->find($activity->getId());
                if (count($request->files->all()) != 0) {
                    $uploadedFile = $request->files->get('activity_imageData')[0]->getPathname();
                    if ($uploadedFile) {
                        // read the binary data from the uploaded file
                        $binaryData = file_get_contents($uploadedFile);

                        $updatedactivity->setImagedata($binaryData);
                    }
                }
                    $updatedactivity->setDate($activity->getDate());
                    $updatedactivity->setDescription($activity->getDescription());
                    $updatedactivity->setPrice($activity->getPrice());
                    $updatedactivity->setTitle($activity->getTitle());
                    $updatedactivity->setTypeactivity($activity->getTypeactivity());
                    $entityManager->persist($updatedactivity);
                    $entityManager->flush();
                $responseData = json_encode($updatedactivity->jsonSerialize());

                return new Response($responseData);
                }

        }
            $activities = $activityRepository->findAll();
            $pagination = $paginator->paginate(
                $activities,
                $request->query->getInt('page', 1),
                10
            );



        return $this->render('admin/activities/index.html.twig', [
                'controller_name' => 'AdminController',
                'activities' => $activities,
                'pagination' => $pagination,
                'form' => $form->createView(),
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
        return $response;
    }

    // ActivitySessions CRUD functions
    #[Route('/admin/sessions', name: 'app_admin_sessions')]
    public function viewSessions(ActivitysessionRepository $activitysessionRepository,Request $request,PaginatorInterface $paginator,ActivityRepository $activityRepository): Response
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
        $activitysessions = $activitysessionRepository->findAll();

        return $this->render('admin/activitySessions/index.html.twig', [
            'activities' => $activities,
            'activitysessions' => $activitysessions,
            //'activitiesImageData' => $activitiesImageData,
            //'pagination' => $pagination
        ]);
    }

   // Getcalendar API => JSONResponse
    #[Route('/api/admin/sessions/calendar', name: 'app_admin_getcalendar')]
    public function getCalendar(Request $request, ActivitysessionRepository $activitysessionRepository, ActivityRepository $activityRepository): JsonResponse
    {
        $activities = $activityRepository->findAll();
        $activitysessions = $activitysessionRepository->findAll();

        // Prepare data for JSON response
        // Prepare data for JSON response
        $data = [
            'activities' => array_map(function($activity) { return $activity->jsonSerialize(); }, $activities),
            'activitysessions' => array_map(function($session) { return $session->jsonSerialize(); }, $activitysessions),
            'test' => 'test',
        ];

        // Return JSON response
        return new JsonResponse($data);
    }

   // ViewCalendar function to render the calendar
    #[Route('/admin/sessions/calendar', name: 'app_admin_sessions_calendar')]
    public function viewCalendar(Request $request,ActivitysessionRepository $activitysessionRepository,ActivityRepository $activityRepository): Response
    {
        $activities = $activityRepository->findAll();
        $activitysessions = $activitysessionRepository->findAll();
        $form = $this->createForm(ActivitySessionType::class);

        return $this->render('admin/activitySessions/calendar.html.twig', [
             'activities' => $activities,
            'activitysessions' => $activitysessions,
            'test' => 'test',
            'form' => $form->createView()

            //'pagination' => $pagination
        ]);
    }
    // New session API function to create a new session
    #[Route('/api/session/new/', name: 'app_admin_session_new', methods: ['POST'])]
    public function newSession(Request $request,ActivityRepository $activityRepository,EntityManagerInterface $entityManager,ActivitysessionRepository $activitysessionRepository): Response
    {

        $data = json_decode($request->getContent(), true);
        //dd(new DateTime($data['starttime']));
        $activitySession = new Activitysession();
        $activitySession->setWeekday($data['weekday']);
        $activitySession->setStarttime(new DateTime($data['starttime']));
        $activitySession->setEndtime(new DateTime($data['endtime']));
        $activity = $activityRepository->find($data['activityid']);
        $activitySession->setActivityid($activity);

        $entityManager->persist($activitySession);
        $entityManager->flush();

        return $this->json(['message' => 'New session created successfully','id' => $activitySession->getId()], 200);
    }
    // Delete session API function to delete a session
    #[Route('/api/session/delete/', name: 'app_admin_session_delete', methods: ['POST'])]
    public function deleteSession(Request $request,EntityManagerInterface $entityManager,ActivitysessionRepository $activitysessionRepository): Response
    {
        $data = json_decode($request->getContent(), true);

        $sessionId = $data['id'];

        $session = $activitysessionRepository->find($sessionId);
        $entityManager->remove($session);
        $entityManager->flush();

        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent(json_encode(['message' => 'Session deleted successfully']));
        return $response;
    }
    // Edit session API function to edit a session
    #[Route('/api/session/edit/', name: 'app_admin_session_edit', methods: ['POST'])]
    public function editSession(Request $request,EntityManagerInterface $entityManager,ActivitysessionRepository $activitysessionRepository): Response
    {
        $data = json_decode($request->getContent(), true);
        $sessionId = $data['id'];
        $session = $activitysessionRepository->find($sessionId);

        $session->setWeekday($data['weekday']);
        $session->setStarttime(new DateTime($data['starttime']));
        $session->setEndtime(new DateTime($data['endtime']));

        $entityManager->persist($session);
        $entityManager->flush();

        return $this->json(['message' => 'Session edited successfully'], 200);
    }
}
