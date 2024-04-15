<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('Users/form-login-register-style2.twig', [
            'controller_name' => 'RegistrationController',
        ]);
    }

    #[Route('/register', name: 'app_register')]

    public function register (Request $request, EntityManagerInterface $entityManager)
    {
        $user = new Users();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {

          $uploadedFile=$request->files->get('user')['blobimage']->getPathname();
          if ($uploadedFile)
            // Read the binary data from the uploaded file
            $binaryData = file_get_contents($uploadedFile);
            $user->setBlobimage($binaryData);
            $entityManager->persist($user);
            $user->setPassword($form->get('password')->getViewData());
            $entityManager->persist($user);
            $entityManager->flush();
            return $this->render('Users/enigma-side-menu-login-page.twig', ['error' => 'User created successfully.','last_username' => $user->getEmail()]);

        }
        else
        {
            return $this->render('Users/form-login-register-style2.twig', [
                'registrationForm' => $form->createView(),
            ]);
        }


    }
}
