<?php

namespace App\Controller;

use App\Entity\ProductOrder;
use App\Entity\Useractivity;
use App\Repository\ActivityRepository;
use App\Repository\ActivitysessionRepository;
use App\Repository\ProductRepository;
use App\Repository\UseractivityRepository;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
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
    public function viewProductDetails(Request $request,ProductRepository $productsRepository): Response
    {
        $product = $productsRepository->find($request->query->get('id'));
        return $this->render('client/Products/ProductDetails.html.twig', [
            'controller_name' => 'ClientController',
            'product' => $product,
        ]);
    }

    #[Route('/client/products/order', name: 'client_order_product')]
    public function OrderAProduct(SessionInterface $session,EntityManagerInterface $entityManager,Request $request,ProductRepository $productsRepository,UsersRepository $usersRepository): Response
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
        $user = unserialize($session->get('_security_main'));
        $user_id = $user->getUser()->getId();
        $User=$usersRepository->findBy(['id' => $user_id])[0];
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

    #[Route('/client/activities/details', name: 'app_activity_view')]
    public function viewActivityDetails(SessionInterface $session,EntityManagerInterface $entityManager,UsersRepository $usersRepository,UseractivityRepository $useractivityRepository,Request $request,ActivitysessionRepository $activitysessionRepository,ActivityRepository $activityRepository): Response
    {
        $user = unserialize($session->get('_security_main'));
        $user_id = $user->getUser()->getId();

        $activity = $activityRepository->find($request->query->get('id'));
        if($request->getMethod()=="POST")
        {
            $useractivity = new Useractivity();
            $useractivity->setStars(0);
            $useractivity->setActivityid($activity);

            $user = $usersRepository->findOneBy(['id' => $user_id]);
            $useractivity->setUserid($user);
            $entityManager->persist($useractivity);
            $entityManager->flush();
        }

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
        $isSubscribed = $useractivityRepository->findBy(['activityid' => $activity, 'userid' => $user_id]); // CHANGE USERID TO CURRENT USERID

        $isSubscribed = empty($isSubscribed) ? false : true;
        $isCommented = $useractivityRepository->findBy(['activityid' => $activity, 'userid' => $user_id, 'feedback' => null]); // CHANGE USERID TO CURRENT USERID
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
    public function submitReview(SessionInterface $session,FlashBagInterface $flashBag,UseractivityRepository $useractivityRepository,EntityManagerInterface $entityManager,UsersRepository $userRepository,Request $request,ActivityRepository $activityRepository): JsonResponse
    {
        $activity = $activityRepository->find($request->request->get('activityId'));

        $rating = $request->request->get('stars');
        $description = $request->request->get('contact_message2');
        $clean_words = \ConsoleTVs\Profanity\Builder::blocker($description)->filter();

        $user = unserialize($session->get('_security_main'));
        $user_id = $user->getUser()->getId();
        $userActivity = $useractivityRepository->findOneBy(['activityid' => $activity->getId(),'userid' => $user_id]);
        if ($userActivity === null)
        {
            return new JsonResponse(['error' => true, 'message' => "You're cannot review this activity without a valid subscription"], 422);
        }
        $userActivity->setFeedback($clean_words);
        $userActivity->setStars($rating);
        $userActivity->setFeedbackDate(new \DateTime());
        $entityManager->persist($userActivity);
        $entityManager->flush();
        return new JsonResponse(200);
    }
    #[Route('/client', name: 'app_client')]
    public function indexClient(): Response
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

}
