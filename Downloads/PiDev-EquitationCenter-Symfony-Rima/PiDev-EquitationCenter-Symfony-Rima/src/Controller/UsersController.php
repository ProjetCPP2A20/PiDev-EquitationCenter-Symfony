<?php

namespace App\Controller;
use App\Entity\Users;
use App\Repository\UsersRepository;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;


class UsersController extends AbstractController
{
  #[Route('/users', name: 'app_users')]
  public function index(): Response
  {
    return $this->render('users/index.html.twig', [
      'controller_name' => 'UsersController',
    ]);
  }
  #[Route('/login', name:'app_login')]

  public function login(): Response
  {
    return $this->render('Users/enigma-side-menu-login-page.twig');
  }
  #[Route('/register', name:'app_register')]

  public function Register(): Response
  {
    return $this->render('Users/form-login-register-style2.twig');
  }
  #[Route('/afficherUser', name: 'app_afficher')]
  public function indexAfficher(): Response
  {

    return $this->render('Users/enigma-side-menu-users-layout-2-page.twig');
  }
  #[Route('/add/users', name: 'app_admin_users')]
  public function viewUsers(Request $request ,UsersRepository $usersRepository,EntityManagerInterface $entityManager): Response
  {
    $user = new Users();
    $form = $this->createForm(UserType::class, $user);

    $form->handleRequest($request);

    if ($form->isSubmitted() && !$form->isValid()) {
      $errors = [];

      foreach ($form->getErrors(true, true) as $error) {
        if (!$error->getOrigin()->getName() != "date") {
          $fieldName = $error->getOrigin()->getName();
          $errorMessage = $error->getMessage();

          $errors['errors'][$fieldName] = $errorMessage;
        }
      }
//            dd($request);
      unset($errors["errors"]["imagedata"]);
      unset($errors["errors"]["user"]);
      if(!empty($errors['errors'])){
        return new Response(json_encode($errors), 200, ['Content-Type' => 'application/json']);
      }
    }
    if ($form->isSubmitted()) {
      // dd($form->getData());
      $date = new \DateTime();
      $user->setDatejoined($date);
      // $uploadedFile = $request->files->get('activity')['imageData']->getData();
      // $uploadedFile = $request->files->get('activity')['imageData']->getData();

      $uploadedFile=$request->files->get('user_imageData')[0]->getPathname();
      if ($uploadedFile) {

        // Read the binary data from the uploaded file
        $binaryData = file_get_contents($uploadedFile);

        // Set the binary data on your entity
        $user->setImagedata($binaryData);

        // Persist the entity
        $entityManager->persist($user);
        $entityManager->flush();
        // Retrieve the newly added user
        $newUser = $usersRepository->find($user->getId());
        $userData = get_object_vars($user);

        // Serialize the activity data into JSON
        $responseData = json_encode($userData);

        // Return the serialized activity data as JSON response
        return new Response($responseData);


      }
    }
    $users = $usersRepository->findAll();
    $usersImageData = [];

    foreach ($users as $user) {
      $usersImageData[] = $user->getImageData();
    }
    return $this->render('Users/index.html.twig', [
      'controller_name' => 'UsersController',
      'users' => $users,
      'usersImageData' => $usersImageData,
      'form' => $form->createView(),
    ]);
  }
  #[Route('/deleteUser', name: 'app_admin_user_delete')]

  public function deleteActivity(Request $request,EntityManagerInterface $entityManager,UsersRepository $usersRepository): Response
  {
    // Retrieve the activity ID from the request data
    $userId = $request->request->get('id');

    // Here, you can perform deletion logic, such as deleting the activity from the database
    $user = $usersRepository->find($userId);
    // For demonstration purposes, let's assume we're just logging the activity ID
    $entityManager->remove($user);
    $entityManager->flush();

    // Return a success response
    $response = new Response();
    $response->headers->set('Content-Type', 'application/json');
    $response->setContent(json_encode(['message' => 'User deleted successfully']));
    return $response;    }

  /* #[Route('/supprimerUser/{id}', name: 'app_supprimer')]
   public function Supprimer(): Response
   {( )
    ;}
   /*
   *
   */
  /* #[Route('/ModifierUser/{id}', name: 'app_supprimer')]
  public function Modifier(): Response
  {( )
   ;}
  /*
  *
  */
}
