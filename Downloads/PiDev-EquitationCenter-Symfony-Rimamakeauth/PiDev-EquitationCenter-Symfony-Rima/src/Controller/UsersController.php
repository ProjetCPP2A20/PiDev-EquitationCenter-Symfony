<?php

namespace App\Controller;
use App\Entity\Users;
use App\Form\LoginType;
use App\Repository\ActivityRepository;
use App\Repository\UsersRepository;
use App\Form\UserType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Knp\Component\Pager\PaginatorInterface;


class UsersController extends AbstractController
{
  #[Route('/users', name: 'app_users')]
  public function index(): Response
  {
    return $this->render('users/index.html.twig', [
      'controller_name' => 'UsersController',
    ]);
  }



   /*#[Route('/register', name:'app_register')]

  public function Register(): Response
  {
    return $this->render('Users/form-login-register-style2.twig');
  }
 */
  #[Route('/api/user/edit/', name: 'api_user_edit')]
  public function editUser(Request $request, EntityManagerInterface $em, UsersRepository $usersRepository): Response
  {
    $formData = $request->request->all();
    $id = $formData['userId'];
    $user = $usersRepository->find($id);

    if (!$user) {
      throw $this->createNotFoundException('User not found');
    }

    $form = $this->createForm(UserType::class, $user,
      [
        'action' => $this->generateUrl('app_admin_users', ['id' => $id])
      ]);

    if ($form->isSubmitted() && $form->isValid()) {
      return new JsonResponse(['success' => true]);
    }

    $htmlContent = $this->renderView('Users/partials/EditUsersSnippet.html.twig', [
      'form' => $form->createView(),
      'users' => $user,
    ]);
    return new JsonResponse(['html' => $htmlContent]);
  }

#[Route('/api/user/add', name: 'api_user_add')]
  public function addUser(UsersRepository $usersRepository,Request $request, EntityManagerInterface $entityManager): Response
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
    if (!empty($errors['errors'])) {
      return new Response(json_encode($errors), 200, ['Content-Type' => 'application/json']);
    }
  }
  if ($form->isSubmitted()) {
    $date = new \DateTime();
    $user->setDatejoined($date);
    $user->setId($request->request->get('id'));
    $userUpdated = $usersRepository->find($user->getId());
    $userUpdated = $user;
    $uploadedFile = $request->files->get('user_imageData')[0]->getPathname();
    if ($uploadedFile) {

      // Read the binary data from the uploaded file
      $binaryData = file_get_contents($uploadedFile);
      $userUpdated->setImagedata($binaryData);
      // Set the binary data on your entity

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
  return new Response("success");
}
  #[Route('/add/users', name: 'app_admin_users')]
  public function viewUsers(Request $request ,UsersRepository $usersRepository,EntityManagerInterface $entityManager ,): Response
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
      if (!empty($errors['errors'])) {
        return new Response(json_encode($errors), 200, ['Content-Type' => 'application/json']);
      }
    }
    if ($form->isSubmitted()) {
      // dd($form->getData());
      $date = new \DateTime();
      $user->setDatejoined($date);
      // $uploadedFile = $request->files->get('activity')['imageData']->getData();
      // $uploadedFile = $request->files->get('activity')['imageData']->getData();

    if($user->getId() == 0){
      $uploadedFile = $request->files->get('user_imageData')[0]->getPathname();
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
    if($user->getId() != 0){
      $updatedUser = $usersRepository->find($user->getId());

      if (count($request->files->all()) != 0) {
        $uploadedFile = $request->files->get('user_imageData')[0]->getPathname();
        if ($uploadedFile) {
          $binaryData = file_get_contents($uploadedFile);

          $updatedUser->setImagedata($binaryData);
        }
      }
      $updatedUser->setRole($user->getRole());
      $updatedUser->setName($user->getName());
      $updatedUser->setNumTel($user->getNumTel());
      $updatedUser->setEmail($user->getEmail());
      $updatedUser->setPassword($user->getPassword());
      $updatedUser->setDatejoined($user->getDatejoined());
      $updatedUser->setAddress($user->getAddress());

      $entityManager->persist($updatedUser);
      $entityManager->flush();
      $responseData = json_encode($updatedUser->jsonSerialize());

      return new Response($responseData);


    }

    }
    $users = $usersRepository->findAll();

    return $this->render('Users/index.html.twig', [
      'controller_name' => 'UsersController',
      'users' => $users,
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
    $response->setContent(json_encode(['message' => 'User supprimé avec succès.']));
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
  #[Route('/api/users', name: 'api_users')]
  public function getUsers(Request $request, UsersRepository $usersRepository, EntityManagerInterface $em, ActivityRepository $activityRepository)
  {

    $users = $usersRepository->findAll();

    // Use the route

    $htmlContent = $this->renderView('Users/partials/UsersSnippet.html.twig', [
      'users' => $users,
    ]);


    return new JsonResponse(['html' => $htmlContent]);
  }

}
