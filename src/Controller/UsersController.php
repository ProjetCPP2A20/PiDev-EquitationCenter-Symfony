<?php

namespace App\Controller;
use App\Entity\Users;
use App\Form\LoginType;
use App\Form\UsersFilterType;
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
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\Persistence\ManagerRegistry;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;

class UsersController extends AbstractController
{
 // #[Route('/users', name: 'app_users')]
  //public function index(): Response
  //{
  //  return $this->render('users/index.html.twig', [
  //    'controller_name' => 'UsersController',
  //  ]);
 // }
  #[Route('users', name: 'app_users')]
  public function index(Request $request, ManagerRegistry $doc, UsersRepository $userRepo): Response
  {
    $user = $doc->getRepository(Users::class)->findOneBy(['email' => $this->getUser()->getUserIdentifier()]);
    $users = $doc->getRepository(Users::class)->findAll();


    $filterForm = $this->createForm(UsersFilterType::class);
    $filterForm->handleRequest($request);

    if ($filterForm->isSubmitted() && $filterForm->isValid()) {
      $type = $filterForm->get('role')->getData();
      if ($type == '["ROLE_ADMIN"]') {
        $users = $userRepo->findByRole('["ROLE_ADMIN"]');
      } elseif ($type == '["ROLE_USER"]') {
        $users = $userRepo->findByRole('["ROLE_CLIENT"]');
      } elseif ($type == '["ROLE_VET"]') {
        $users = $userRepo->findByRole('["ROLE_VET"]');
      } else {
        $users = $userRepo->findByRole('["ROLE_INSTRUCTOR"]');
      }
    }

    return $this->render('users/index.html.twig', [
      'controller_name' => 'UsersController',
      'user' => $users,
      'usersList' => $users,
      'filterForm' => $filterForm->createView(),
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
  public function viewUsers(Request $request ,PaginatorInterface $paginator,UsersRepository $usersRepository,EntityManagerInterface $entityManager ,UserPasswordHasherInterface $passwordHasher): Response
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
        $rolesField = $form->get('roles');
      $hashedPassword = $passwordHasher->hashPassword($user, $user->getPassword());
      $user->setPassword($hashedPassword);
        // $uploadedFile = $request->files->get('activity')['imageData']->getData();
      // $uploadedFile = $request->files->get('activity')['imageData']->getData();

    if($user->getId() == 0){
      $uploadedFile = $request->files->get('user_imageData')[0]->getPathname();
      if ($uploadedFile) {

        // Read the binary data from the uploaded file
        $binaryData = file_get_contents($uploadedFile);

        // Set the binary data on your entity
        $user->setImagedata($binaryData);
        $user->setRoles(array($rolesField->getData()));
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
        $rolesField = $form->get('roles');
      $updatedUser->setRoles(array($rolesField->getData()));
      $updatedUser->setName($user->getName());
      $updatedUser->setNumTel($user->getNumTel());
      $updatedUser->setEmail($user->getEmail());
      $hashedPassword = $passwordHasher->hashPassword($user, $user->getPassword());
      $updatedUser->setPassword($hashedPassword);
     // $updatedUser->setPassword($user->getPassword());
      $updatedUser->setDatejoined($user->getDatejoined());
      $updatedUser->setAddress($user->getAddress());

      $entityManager->persist($updatedUser);
      $entityManager->flush();
      $responseData = json_encode($updatedUser->jsonSerialize());

      return new Response($responseData);


    }

    }
    $users = $usersRepository->findAll();
    $pagination = $paginator->paginate(
      $users,
      $request->query->getInt('page', 1),
      10
    );

    return $this->render('Users/index.html.twig', [
      'controller_name' => 'UsersController',
      'users' => $users,
      'pagination' => $pagination,
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
  public function getUsers(Request $request,PaginatorInterface $paginator, UsersRepository $usersRepository, EntityManagerInterface $em, ActivityRepository $activityRepository)
  {
    $page = $request->query->getInt('page', 1);
    $users = $usersRepository->findAll();
    $pagination = $paginator->paginate(
      $users,
      $page,
      10
    );
    // Use the route
    $pagination->setUsedRoute('app_admin_users');

    $paginationHtml = $this->renderView('Users/partials/PaginationsSnippet.html.twig', [
      'pagination' => $pagination
    ]);
    $htmlContent = $this->renderView('Users/partials/UsersSnippet.html.twig', [
      'users' => $users,
      'pagination' => $pagination
    ]);


    return new JsonResponse(['html' => $htmlContent,'paginationHtml' => $paginationHtml]);
  }

}
