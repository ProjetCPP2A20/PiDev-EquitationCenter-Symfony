<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\PostRepository;
use App\Repository\CommetaireRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Post;
use App\Entity\Users;

use App\Entity\Commentaire;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use App\Form\PostType;
use App\Form\CommentaireType;

use Knp\Snappy\Pdf;

use Facebook\Facebook;

use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;

use DateTime;


class PostController extends AbstractController
{

    private $pdf;

    public function __construct(Pdf $pdf)
    {
        $this->pdf = $pdf;
    }
    
    #[Route('/dash/posts', name: 'app_dash_posts')]
    public function postsList(PostRepository $postRepository): Response
    {

        $posts = $postRepository->findAll();
        return $this->render('post/dash-admin-post-list.html.twig', [
            'controller_name' => 'PostController',
            'posts' => $posts
        ]);
    }

    #[Route('/front/posts', name: 'app_user_posts')]
    public function userPostsList(PostRepository $postRepository): Response
    {

        $posts = $postRepository->findAll();
        return $this->render('post/user-post-list.html.twig', [
            'controller_name' => 'PostController',
            'posts' => $posts
        ]);
    }


    #[Route('/dash/admin/posts/deletePost/{id}', name: 'deletePost')]
    public function deletePost(ManagerRegistry $repo, $id): Response
    {

        $post = $repo->getRepository(Post::class)->find($id);
        $em = $repo->getManager();
        $em->remove($post);
        $em->flush();

        return $this->redirectToRoute('app_dash_posts');
    }


    #[Route('/dash/admin/post/add', name: 'add_post')]
    public function addPost(Request $request, ManagerRegistry $doctrine,  SluggerInterface $slugger): Response
    {
        $post = new Post();
        $userid=1;
        $user=$doctrine->getRepository(Users::class)->find($userid);
        $post->setUser($user);
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);
        // dump($request->request->all()); // Affiche les données soumises dans le formulaire
        // var_dump($form->getData()); 
        if ($form->isSubmitted() && $form->isValid() ) {
            $em = $doctrine->getManager();

            //******************************* */
            $image = $form->get('image')->getData();
    
            if ($image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$image->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $image->move(
                        $this->getParameter('post_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                $post->setImage($newFilename) ;
            }
            //***************************** */
            $dateNow = new DateTime();
            $formattedDate = $dateNow->format('Y-m-d');

            $post->setDate($formattedDate);

            $em->persist($post);
            $em->flush();
            return $this->redirectToRoute("app_dash_posts");
        }

        return $this->renderForm('post/dash-admin-post-add.html.twig', [
            'title' => 'Pi project -- DashAdminPosts',
            "formPost" => $form,
        ]);
    }

    #[Route('/dash/admin/post-Update/{id}', name: 'editPost')]
    public function dashPostUpdate(Request $request,$id, ManagerRegistry $doctrine, SluggerInterface $slugger): Response
    {

        $post = $doctrine->getRepository(Post::class)->find($id);

        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() ) {
            $em = $doctrine->getManager();

            //******************************* */
            $image = $form->get('image')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$image->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $image->move(
                        $this->getParameter('post_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $post->setImage($newFilename);
            }
            //***************************** */
            
            $em->flush();
            return $this->redirectToRoute("app_dash_posts");
        }
        return $this->renderForm('post/dash-admin-post-update.html.twig', [
            'title' => 'update post',
            "formPost" => $form,
            "post" =>$doctrine->getRepository(Post::class)->find($id),

        ]);
    }

    #[Route('/facebook_share/{id}', name: 'facebook_share')]
    public function facebook_share(ManagerRegistry $doct, Request $request,$id): Response
    {
        $post= $doct->getRepository(Post::class)->find($id);

        

        $fb = new Facebook([
            'app_id' => '832756802098912',
            'app_secret' => 'fc5532ff8e77dac14c60eadd091817b0',
            'default_graph_version' => 'v16.0',
            'default_access_token' => 'EAAL1Y01fluABO0ZCsNFt6IZBV8sL6UePcxGxLZAMS1M22nuTctxcmPuRWTP6yiZBDEprMXSAi07ZBDCgxudkyII6TiGLjkISZCfMs7bM24vOoqUuLccyFDaXJonllFavBAuc5bWh1egLBO130G8I6KQtCkXzeZAZAqunIcQeZAwCAnMfyHZAixpdoxrmy9VfDbTUDloFPIWpoUTWvCVA5rYeQrD6Gsd8B8hdZAFLYsZD',
        ]);
        

     
        $message ='New Post : '. '                                                                                      ' 
                    .'Title: '.$post->getTitle() . '                                                                                 '  
                    .'Description: '. $post->getDescription();
        $data = [
            'message' => $message 
        ];
        
        try {
            // Tenter de faire le post sur Facebook
            $response = $fb->post('/me/feed', $data);
    
            // Vérifier si une erreur est survenue
            if ($response->isError()) {
                // Gérer l'erreur si nécessaire
            } else {
                // Post partagé avec succès
            }
        } catch (\Exception $e) {
            // 
        }
        // return new Response('updated!');
        return $this->redirectToRoute('app_dash_posts');
    }


    #[Route('posts/searchPost', name: 'searchPost')]
    public function searchPost(PostRepository $postRepository, Request $request): Response
    {
        $value =$request->get('searchPostData');
        $posts = $postRepository->searchPostFunction($value);    
        // Convertir les objets en tableau associatif
        $postsArray = [];
        foreach ($posts as $post) {
            $postArray = [
                'id' => $post->getID(),
                'title' => $post->getTitle(),
                'Description' => $post->getDescription(),
                'Date' => $post->getDate(),
                'image' => $post->getImage(),
            ];
            $postsArray[] = $postArray;
        }

        // Convertir le tableau associatif en chaîne JSON
        $jsonResponse = json_encode($postsArray);

        // Afficher la réponse JSON
        return new Response ($jsonResponse);
    }


    #[Route('/front/postDetails/{id}', name: 'postDetails')]
    public function userPostDetails(PostRepository $postRepository, $id, ManagerRegistry $doctrine,): Response
    {

        $post = $doctrine->getRepository(Post::class)->find($id);

        return $this->render('post/user-post-details.html.twig', [
            'controller_name' => 'PostController',
            'post' => $post
        ]);
    }

    #[Route('/front/postDet/addCommentaire/{id}', name: 'addCommentaire')]
    public function addCommentaire(Request $request,ManagerRegistry $doctrine, $id): Response
    {

        $post = $doctrine->getRepository(Post::class)->find($id);

        $cmt= new Commentaire();
        $userid=1;
        $user=$doctrine->getRepository(Users::class)->find($userid);
        $cmt->setUser($user);
        $form = $this->createForm(CommentaireType::class, $cmt);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() ) {
            $em = $doctrine->getManager();

            $dateNow = new DateTime();
            $formattedDate = $dateNow->format('Y-m-d');

            $cmt->setDate($formattedDate);
            $cmt->setPost($post);

            $em->persist($cmt);
            $em->flush();
            return $this->redirectToRoute("postDetails", ['id' => $id]);
        }

  
        return $this->renderForm('post/user-post-details-add-cmt.html.twig', [
            'controller_name' => 'PostController',
            'post' => $post,
            "formComment" => $form,
        ]);

    }


    #[Route('/user/post/deleteCmt/{id}/{idCmt}', name: 'deleteCommentaire')]
    public function deleteCommentaire(ManagerRegistry $repo, $id,$idCmt): Response
    {

        $cmt = $repo->getRepository(Commentaire::class)->find($idCmt);
        $em = $repo->getManager();
        $em->remove($cmt);
        $em->flush();

        return $this->redirectToRoute("postDetails", ['id' => $id]);
    }


    #[Route('/user/post/updateCommentaire/{id}/{idCmt}', name: 'updateCommentaire')]
    public function updateCommentaire(Request $request,ManagerRegistry $doctrine,PostRepository $repo, $id,$idCmt): Response
    {

        $cmt = $doctrine->getRepository(Commentaire::class)->find($idCmt);

        $post = $doctrine->getRepository(Post::class)->find($id);
       

        $form = $this->createForm(CommentaireType::class, $cmt);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() ) {
            $em = $doctrine->getManager();

            $em->flush();
            return $this->redirectToRoute("postDetails", ['id' => $id]);
        }

  
        return $this->renderForm('post/user-post-details-update-cmt.html.twig', [
            'controller_name' => 'PostController',
            'post' => $post,
            "formComment" => $form,
        ]);

    }


    #[Route('/pdf', name: 'pdf')]
    public function generatePdf(PostRepository $postRepository): Response
    {
        $posts = $postRepository->findAll();

        
        $html = $this->renderView('post/templatePdf.html.twig', [
            // Ajoutez ici les variables à passer à votre vue Twig
            'posts' => $posts,
        ]);

        $pdf = $this->pdf->getOutputFromHtml($html);

        return new Response(
            $pdf,
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="file.pdf"',
            ]
        );
    }

}
