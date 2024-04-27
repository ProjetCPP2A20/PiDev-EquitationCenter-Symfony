<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\LoginType;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class LoginController extends AbstractController
{

  #[Route('/home', name: 'app_home')]
  public function index(): Response
  {
    return $this->render('Users/index-dark-mp-layout1.twig', [
      'controller_name' => 'LoginController',
    ]);
  }
  #[Route('/loginn', name: 'app_loginn')]
  public function login(Request $request,UsersRepository $usersRepository): Response
  {
    $user = new Users();
    $form = $this->createForm(LoginType::class, $user);

    $form->handleRequest($request);

    if ($form->isSubmitted()&& !$form->isValid()) {
      $email = $form->get('email')->getData();

      // get the user from the database
      $user = $usersRepository->findOneBy(['email' => $email]);

      if ($user == null || $user->getPassword() != $form->get('password')->getData())
      {

        return $this->render('Users/enigma-side-menu-login-page.twig', [
          'form' => $form->createView(),
          'usererror' => 'verifier votre email et mdp stp'
        ]);
      }

      $session = new Session();
      $session->set('user', $user);
      if ($user->getRole() == "Client")
        return $this->redirectToRoute('app_client_homepage');
      elseif ($user->getRole() == "Admin")
        return $this->redirectToRoute("app_admin_users");
      elseif ($user->getRole() == "Vet")
        return $this->redirectToRoute("app_vet");
      elseif ($user->getRole() == "Instructor")
        return $this->redirectToRoute("app_Instructor");


    }
    return $this->render('Users/enigma-side-menu-login-page.twig', [
      'form' => $form->createView(),
    ]);
  }
    #[Route('/logout', name: 'app_logout')]

    public function logout(SessionInterface $session): Response
    {
        $session->remove('user');
        return $this->redirectToRoute('app_home');
    }
}
