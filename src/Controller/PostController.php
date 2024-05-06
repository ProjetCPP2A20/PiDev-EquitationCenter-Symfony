<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
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
use Symfony\Component\Security\Core\Security;
use Facebook\Facebook;
//gttt
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
    public function deletePost(ManagerRegistry $registry, $id): Response
    {
        $post = $registry->getRepository(Post::class)->find($id);
    
        // Check if a post with the given ID exists
        if (!$post) {
            throw $this->createNotFoundException('Post not found');
        }
    
        $em = $registry->getManager();
        $em->remove($post);
        $em->flush();
    
        return $this->redirectToRoute('app_dash_posts');
    }
    

    #[Route('/dash/admin/post/add', name: 'add_post')]
    public function addPost(Request $request, ManagerRegistry $doctrine,  SluggerInterface $slugger,Security $security): Response
    {
        $post = new Post();
        $user=$security->getUser();
        $userid=$user->getId();
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
    public function addCommentaire(Request $request,ManagerRegistry $doctrine, $id,Security $security): Response
    {

        $post = $doctrine->getRepository(Post::class)->find($id);

        $cmt= new Commentaire();
        $user=$security->getUser();
        $userid=$user->getId();
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

        private function generateBookingPdf(array $posts):string
        {
        
            $html = $this->renderView('post/templatePdf.html.twig',
        [
                'posts' => $posts,
            ]);
        
        
            // Configure Dompdf
        
            $pdfOptions = new Options();
        
            $pdfOptions->set('defaultFont',
        'Arial');
        
        
        
        
            // Instantiate Dompdf
        
            $dompdf = new Dompdf($pdfOptions);
        
        

        
            // Load HTML to Dompdf
        
            $dompdf->loadHtml($html);
        
        
            $dompdf->setPaper('A4',
        'portrait');
            $dompdf->render();    
            return $dompdf->output();
        
        }
        
    
        
        #[Route('/pdfpost', name: 'pdfpost')]
        public function generatePdf(PostRepository $postRepository): Response
        {
        
            $post = $postRepository->findAll();

            if (!$post) {
    throw $this->createNotFoundException('Booking not found');

            }

            $pdfContent = $this->generateBookingPdf($post);

        

            // Set the HTTP headers

            $response = new Response($pdfContent);

            $response->headers->set('Content-Type',
    'application/pdf');

            $response->headers->set('Content-Disposition',
    'attachment; filename="post_details_' . 
    '.pdf"');

        

            return $response;
        }

}
