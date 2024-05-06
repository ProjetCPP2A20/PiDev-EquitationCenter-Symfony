<?php

namespace App\Controller;

use App\Entity\Activity;
use App\Entity\Activitysession;
use App\Entity\Product;
use App\Entity\ProductOrder;
use App\Entity\Useractivity;
use App\Form\ActivitySessionType;
use App\Form\ActivityType;
use App\Form\ProductOrderType;
use App\Form\ProductType;
use App\Repository\ActivityRepository;
use App\Repository\ActivitysessionRepository;
use App\Repository\ProductOrderRepository;
use App\Repository\ProductRepository;
use App\Repository\UseractivityRepository;
use App\Repository\UsersRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;

use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(PaginatorInterface $paginator, UseractivityRepository $useractivityRepository, ActivitysessionRepository $activitysessionRepository, ActivityRepository $activityRepository, UsersRepository $usersRepository, EntityManagerInterface $entityManager): Response
    {
        $sessions = $activitysessionRepository->findAll();
        $users = $usersRepository->findAll();
        $activities = $activityRepository->findAll();
        /*    $query = $entityManager->createQuery('
        SELECT ua.activityid, COUNT(ua.id) AS linkCount
        FROM App\Entity\Useractivity ua
        GROUP BY ua.activityid
        ORDER BY linkCount DESC
    ');*/

        // Fetch all activities
        $activities = $activityRepository->findAll();

// Fetch and store user activity counts for each activity
        $userActivityCounts = [];
        foreach ($activities as $activity) {
            $userActivityCount = $useractivityRepository->createQueryBuilder('ua')
                ->select('COUNT(ua)')
                ->where('ua.activityid = :activityId')
                ->setParameter('activityId', $activity->getId())
                ->getQuery()
                ->getSingleScalarResult();

            $userActivityCounts[$activity->getId()] = $userActivityCount;
        }

        // Sort activities based on user activity count
        uasort($activities, function ($a, $b) use ($userActivityCounts) {
            $countA = $userActivityCounts[$a->getId()];
            $countB = $userActivityCounts[$b->getId()];
            return $countB - $countA; // Sort in descending order of counts
        });
        $pagination = $paginator->paginate(
            $activities,
            1,
            3
        );

        // $query->setMaxResults(3);

        //   $topActivities = $query->getResult();
        $pieChart = new PieChart();
        $data = [];
        foreach ($sessions as $session) {
            $activity = $session->getActivityid();
            if (!isset($data[$activity->getTitle()])) {
                $data[$activity->getTitle()] = [
                    'Task' => $activity->getTitle(),
                    'Hours per Day' => strval($session->getDurationInHours()),
                ];
            } else {
                $data[$activity->getTitle()] = [
                    'Task' => $activity->getTitle(),
                    'Hours per Day' => strval(floatval($data[$activity->getTitle()]['Hours per Day']) + floatval($session->getDurationInHours()))
                ];
                // dd($data[$activity->getTitle()]['Hours per Day'],$session->getDurationInHours(),strval(intval($session->getDurationInHours()) + intval($data[$activity->getTitle()]['Hours per Day'])));
            }
        }
        $pieChart->getData()->setArrayToDataTable($data);
        $pieChart->getOptions()->setHeight(266);
        $pieChart->getOptions()->setWidth(266);
        $pieChart->getOptions()->setIs3D(true);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);
        $pieChart->getOptions()->setPieHole(0.4);
        $useractivities = $useractivityRepository->findAll();
// Assuming you have the $useractivityRepository instance available
        $useractivityRepository = $entityManager->getRepository(Useractivity::class);

// Retrieve all useractivities
        $useractivities = $useractivityRepository->findAll();

// Group useractivities by activityid
        $donutChart = new PieChart();
        $groupedUseractivities = [];
        foreach ($useractivities as $useractivity) {
            $activityName = $useractivity->getActivityid()->getTitle();

            if (!isset($groupedUseractivities[$activityName])) {
                $groupedUseractivities[$activityName] = [];
            }

            $groupedUseractivities[$activityName][] = $useractivity;
        }

        $data = [];
        foreach ($groupedUseractivities as $activityName => $useractivities) {
            $data[] = [
                'Task' => $activityName,
                'Hours per Day' => strval(count($useractivities)),
            ];
        }
        $donutChart->getData()->setArrayToDataTable($data);
        $donutChart->getOptions()->setHeight(266);
        $donutChart->getOptions()->setWidth(266);
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'sessions' => $sessions,
            'activities' => $activities,
            'users' => $users,
            array('piechart' => $pieChart),
            'piechart' => $pieChart,
            //         'topactivities' => $topActivities
            'useractivities' => $useractivityRepository->findAll(),
            'donutchart' => $donutChart,
            array('donutchart' => $donutChart),
            'activities' => $activities,
            'pagination' => $pagination

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
    public function viewActivities(Request $request, PaginatorInterface $paginator, ActivityRepository $activityRepository, EntityManagerInterface $entityManager): Response
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
            if (!empty($errors['errors'])) {

                return new Response(json_encode($errors), 200, ['Content-Type' => 'application/json']);
            }
        }
        // if form is valid
        if ($form->isSubmitted()) {
            $dateString = $request->get('activity')['date'];
            $date = new \DateTime($dateString);
            $formattedDate = $date->format('Y-m-d');
            $activity->setDate($date);
            if ($activity->getId() == 0) {
                $uploadedFile = $request->files->get('activity_imageData')[0]->getPathname();
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
            if ($activity->getId() != 0) {
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
    public function deleteActivity(Request $request, EntityManagerInterface $entityManager, ActivityRepository $activityRepository): Response
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
    public function viewSessions(ActivitysessionRepository $activitysessionRepository, Request $request, PaginatorInterface $paginator, ActivityRepository $activityRepository): Response
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

        $data = [
            'activities' => array_map(function ($activity) {
                return $activity->jsonSerialize();
            }, $activities),
            'activitysessions' => array_map(function ($session) {
                return $session->jsonSerialize();
            }, $activitysessions),
            'test' => 'test',
        ];

        // Return JSON response
        return new JsonResponse($data);
    }

    // ViewCalendar function to render the calendar
    #[Route('/admin/sessions/calendar', name: 'app_admin_sessions_calendar')]
    public function viewCalendar(Request $request, ActivitysessionRepository $activitysessionRepository, ActivityRepository $activityRepository): Response
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
    public function newSession(Request $request, ActivityRepository $activityRepository, EntityManagerInterface $entityManager, ActivitysessionRepository $activitysessionRepository): Response
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

        return $this->json(['message' => 'New session created successfully', 'id' => $activitySession->getId()], 200);
    }

    // Delete session API function to delete a session
    #[Route('/api/session/delete/', name: 'app_admin_session_delete', methods: ['POST'])]
    public function deleteSession(Request $request, EntityManagerInterface $entityManager, ActivitysessionRepository $activitysessionRepository): Response
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
    public function editSession(ActivityRepository $activityRepository, Request $request, EntityManagerInterface $entityManager, ActivitysessionRepository $activitysessionRepository): Response
    {
        $data = json_decode($request->getContent(), true);

        $sessionId = $data['id'];
        $session = $activitysessionRepository->find($sessionId);
        $session->setWeekday($data['weekday']);
        $session->setStarttime(new DateTime($data['starttime']));
        $session->setEndtime(new DateTime($data['endtime']));
        $activity = $activityRepository->find($data['activityid']);
        $session->setActivityid($activity);

        $entityManager->persist($session);
        $entityManager->flush();

        return $this->json(['message' => 'Session edited successfully'], 200);
    }

    /**
     * @Route("/api/activities/search", name="search_activities", methods={"POST"})
     */
    public function searchActivities(PaginatorInterface $paginator, Request $request, ActivityRepository $activityRepository): JsonResponse
    {
        // Get the search value from the request
        $requestData = json_decode($request->getContent(), true);
        $searchValue = $requestData['searchValue'] ?? '';
        $activities = $activityRepository->searchByActivityName($searchValue);

        // Perform your search logic here
        // For demonstration, let's just return the search value
        $pagination = $paginator->paginate(
            $activities,
            1,
            10
        );
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

    #[Route('/formadd', name: 'app_formadd')]
    public function formadd(\Symfony\Component\HttpFoundation\Request $request,EntityManagerInterface $entityManager,ProductRepository $productRepository): Response
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            //dd($form->getErrors(true, false));
            $uploadedFile=$request->files->get('product')['blobimage']->getPathname();
            if ($uploadedFile) {
                // Read the binary data from the uploaded file
                $binaryData = file_get_contents($uploadedFile);

                $product->setBlobimage($binaryData);
                $entityManager->persist($product);
                $entityManager->flush();
                return $this->redirectToRoute('view');
            }
        }
        return $this->render('formadd/addpro.twig', [
            'controller_name' => 'DashboardadminController',
            'form' => $form->createView(),
        ]);
    }

    #[Route('/admin/order/delete', name: 'app_admin_delete_order')]
    public function deleteOrder(\Symfony\Component\HttpFoundation\Request $request,EntityManagerInterface $entityManager,ProductOrderRepository $productOrderRepository): Response
    {
        $id = $request->request->get('id');
        $order = $productOrderRepository->find($id);
        $entityManager->remove($order);
        $entityManager->flush();

        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent(json_encode(['message' => 'Order deleted successfully']));
        return $response;
    }
    #[Route('/admin/product/delete', name: 'app_admin_delete_product')]
    public function deleteProduct(\Symfony\Component\HttpFoundation\Request $request,EntityManagerInterface $entityManager,ProductRepository $productRepository): Response
    {
        // Retrieve the activity ID from the request data
        $id = $request->request->get('id');

        // Here, you can perform deletion logic, such as deleting the activity from the database
        $product = $productRepository->find($id);
        // For demonstration purposes, let's assume we're just logging the activity ID
        $entityManager->remove($product);
        $entityManager->flush();

        // Return a success response
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent(json_encode(['message' => 'Product deleted successfully']));
        return $response;
    }
    #[Route('/api/orders', name: 'api_orders')]
    public function getOrders(\Symfony\Component\HttpFoundation\Request $request, EntityManagerInterface $em, ProductOrderRepository $productOrderRepository): JsonResponse
    {
        $page = $request->query->getInt('page', 1);

        $orders = $productOrderRepository->findAll();



        // Use the route


        $htmlContent = $this->renderView('orderView/partials/OrderSnippet.html.twig', [
            'productOrders' => $orders
        ]);


        return new JsonResponse(['html' => $htmlContent]);
    }

    #[Route('/view', name: 'view')]
    public function view(ProductRepository $productRepository): Response
    {
        $products = $productRepository->findAll();
        return $this->render('formadd/viewprod.twig', [
            'controller_name' => 'DashboardadminController',
            'products' => $products
        ]);
    }

    #[Route('/formorder', name: 'formorder')]
    public function formorder(\Symfony\Component\HttpFoundation\Request $request, EntityManagerInterface $entityManager, ProductOrderRepository $productOrderRepository): Response
    {
        $productOrder = new ProductOrder();

        $form = $this->createForm(ProductOrderType::class, $productOrder);
        $form->handleRequest($request);
        if ($form->isSubmitted() ) {
            if (!$form->isValid()){
                return $this->render('formorder/formorder.twig', [
                    'controller_name' => 'DashboardadminController',
                    'form' => $form->createView(),
                ]);
            }
            $entityManager->persist($productOrder);
            $entityManager->flush();

            return $this->redirectToRoute('orderView');
        }

        return $this->render('formorder/formorder.twig', [
            'controller_name' => 'DashboardadminController',
            'form' => $form->createView(),
        ]);
    }
    #[Route('/orderView', name: 'orderView')]
    public function orderView(ProductOrderRepository $productOrderRepository): Response
    {
        $productOrders = $productOrderRepository->findAll();
        return $this->render('formorder/orderView.twig', [
            'controller_name' => 'DashboardadminController',
            'productOrders' => $productOrders
        ]);
    }
    #[Route('/EditProduct/{id}', name: 'app_Edit')]
    public function Edit($id, \Symfony\Component\HttpFoundation\Request $request, EntityManagerInterface $entityManager, ProductRepository $productRepository): Response
    {
        $product = $productRepository->find($id);

        if (!$product) {
            throw $this->createNotFoundException('No product found for id '.$id);
        }

        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile=$request->files->get('product')['blobimage']->getPathname();
            if ($uploadedFile) {
                // Read the binary data from the uploaded file
                $binaryData = file_get_contents($uploadedFile);

                $product->setBlobimage($binaryData);
                $entityManager->persist($product);
                $entityManager->flush();
            }
            $entityManager->flush();

            return $this->redirectToRoute('view');
        }

        return $this->render('formadd/editform.twig', [
            'controller_name' => 'DashboardadminController',
            'form' => $form->createView(),
        ]);
    }
    #[Route('/EditProductOrder/{id}', name: 'app_EditOrder')]
    public function EditOrder($id, \Symfony\Component\HttpFoundation\Request $request, EntityManagerInterface $entityManager, ProductOrderRepository $productOrderRepository): Response
    {
        $productOrder = $productOrderRepository->find($id);

        if (!$productOrder) {
            throw $this->createNotFoundException('No product order found for id '.$id);
        }

        $form = $this->createForm(ProductOrderType::class, $productOrder);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if (!$form->isValid()){
                return $this->render('formorder/EditOrder.twig', [
                    'controller_name' => 'DashboardadminController',
                    'form' => $form->createView(),
                ]);
            }
            //   $entityManager->persist($productOrder);
            $entityManager->flush();

            return $this->redirectToRoute('orderView');
        }

        return $this->render('formorder/EditOrder.twig', [
            'controller_name' => 'DashboardadminController',
            'form' => $form->createView(),
        ]);

    }
    #[Route('/deleteprod/{id}', name: 'delete_prod')]
    public function delete_prod($id,EntityManagerInterface $entityManager,ProductRepository $productRepository): Response
    {
        $product= $productRepository->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No comm found for id '.$id
            );
        }

        $entityManager->remove($product);
        $entityManager->flush();

        return $this->redirectToRoute('view');
    }

    #[Route('/tree-by-name', name: 'tree_by_name')]
    public function treeByName(ProductRepository $productRepository): JsonResponse
    {
        $products = $productRepository->findBy([], ['name' => 'ASC']);
        $jsonData = [];
        foreach ($products as $product) {
            $jsonData[] = [
                'id' => $product->getId(),
                'name' => $product->getName(),
                'BlobImage' => $product->getBlobImage(),
                'stockqty' => $product->getStockqty(),
                'price' => $product->getPrice(),
                'Description' => $product->getDescription(),
            ];
        }
        return new JsonResponse($jsonData);
    }
    #[Route('/search', name: 'search', methods: ['POST'])]
    public function search(Request $request, ProductRepository $productRepository): JsonResponse
    {
        $searchTerm = $request->getContent();
        $data = json_decode($searchTerm, true);

        $products = $productRepository->createQueryBuilder('p')
            ->where('p.name LIKE :searchTerm')
            ->setParameter('searchTerm', '%'.$data["search"].'%')
            ->getQuery()
            ->getResult();// Implement the search logic in your repository
        $jsonData = [];
        foreach ($products as $product) {
            $jsonData[] = [
                'id' => $product->getId(),
                'name' => $product->getName(),
                'BlobImage' => $product->getBlobImage(),
                'stockqty' => $product->getStockqty(),
                'price' => $product->getPrice(),
                'Description' => $product->getDescription(),
            ];
        }
        return new JsonResponse($jsonData);
    }

}
