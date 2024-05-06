<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use App\Entity\Users;
use Symfony\Component\Security\Core\Security;
class SecurityController extends AbstractController
{    #[Route('/home', name: 'app_home')]
public function index(): Response
{
  return $this->render('Users/index-dark-mp-layout1.twig', [
    'controller_name' => 'SecurityController',
  ]);
}
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
      $user = $this->getUser();
      if ($user) {
        if (in_array('ROLE_ADMIN', $user->getRoles(), true)) {
          return $this->redirectToRoute('app_admin_users');
        } else if(in_array('ROLE_USER',$user->getRoles(),true)) {
          return $this->redirectToRoute('app_home');
        } else {
            return $this->redirectToRoute('app_dash');
        }
         }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
    private
function getLoggedInUserId(Security $security): ?int
{
    // Retrieve the current user from the security context
    $user = $security->getUser();
    // Check if a user is logged in

    if ($user !==null) {
        return $user->getId();

    }
 // Return null if no user is logged in

    return null;

}




}
