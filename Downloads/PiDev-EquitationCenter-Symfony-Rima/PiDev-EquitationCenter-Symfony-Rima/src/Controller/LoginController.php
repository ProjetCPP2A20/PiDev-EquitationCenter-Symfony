<?php

namespace App\Controller;

use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class LoginController extends AbstractController
{
    public function index(SessionInterface $session): Response
    {

    }
    #[Route('/', name: 'app_login')]
    public function login(Request $request, UsersRepository $usersRepository, UserPasswordEncoderInterface $passwordEncoder, SessionInterface $session): Response
    {
        if($session->get('user') != null)
        {
            return $this->redirectToRoute('app_client_homepage');
        }
            if ($request->isMethod('POST')) {
            $email = $request->request->get('_email');
            $password = $request->request->get('_password');

            $user = $usersRepository->findOneBy(['email' => $email]);

            if (!$user) {
                return $this->render('Users/enigma-side-menu-login-page.twig', ['error' => 'Utilisateur non trouvé.','last_username' => $email]);
            }

            if ($user->getPassword() == $password) {
              $userRole = $session->get("user")->getRole();


                $session->set('user', $user);
                if($session->get("user")->getRole()=="Client")
                    return $this->redirectToRoute('app_client_homepage');
                elseif($session->get("user")->getRole()=="Admin")
                    return $this->redirectToRoute("app_admin");
                elseif($session->get("user")->getRole()=="Vet")
                  return $this->redirectToRoute("app_vet");
                elseif($session->get("user")->getRole()=="Instructor")
                  return $this->redirectToRoute("app_Instructor");
            } else {
                return $this->render('Users/enigma-side-menu-login-page.twig', ['error' => 'Informations invalide.','last_username' => $email]);
            }
        }

        return $this->render('Users/enigma-side-menu-login-page.twig',['last_username' => '','error' => '']);
    }
    #[Route('/logout', name: 'app_logout')]

    public function logout(SessionInterface $session): Response
    {
        $session->remove('user');
        return $this->redirectToRoute('app_login');
    }
}
