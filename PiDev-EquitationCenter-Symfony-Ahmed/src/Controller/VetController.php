<?php

namespace App\Controller;

use App\Entity\Horse;
use App\Entity\Medicalvisit;
use App\Form\HorseType;
use App\Form\VisitType;
use App\Repository\HorseRepository;
use App\Repository\MedicalvisitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Date;
use Dompdf\Dompdf;
use Dompdf\Options;
use TCPDF;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
class VetController extends AbstractController
{
    #[Route('dashhovi', name: 'app_dash')]
    public function index(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery(
            'SELECT h.breed, COUNT(h.id) as horseCount
            FROM App\Entity\Horse h
            GROUP BY h.breed'
        );

        $countsByRace = $query->getResult();
        return $this->render('dashhovi/index.html.twig', [
            'controller_name' => 'VetController',
            'countsByRace' => $countsByRace
        ]);
    }


    #[Route('/vet/dashboard/horses', name: 'app_vet_view_horses')]
    public function viewHorses(HorseRepository $horseRepository): Response
    {
        $horses = $horseRepository->findAll();
        return $this->render('vet/horses/index.html.twig', [
            'horses' => $horses
        ]);
    }

    #[Route('/vet/dashboard/horses/add', name: 'app_vet_add_horses')]
    public function addHorse(Request $request, EntityManagerInterface $entityManager, HorseRepository $horseRepository): Response
    {
        $horse = new Horse();
        $form = $this->createForm(HorseType::class, $horse);
        $form->handleRequest($request);
        if ($form->isSubmitted() && !$form->isValid()) {
            $dateString = $request->get('horse')['datepension'];

            $date = new \DateTime($dateString);
            $horse->setDatePension($date);
            if ($date > new \DateTime()) {
                $form->addError(new FormError('The date cannot be in the future'));
                return $this->render('vet/horses/add.html.twig', [
                    'controller_name' => 'VetController',
                    'form' => $form->createView(),
                ]);
            }

            $entityManager->persist($horse);

            $entityManager->flush();
            $horses = $horseRepository->findAll();
            return $this->render('vet/horses/index.html.twig', [
                'horses' => $horses
            ]);
        }
        return $this->render('vet/horses/add.html.twig', [
            'controller_name' => 'VetController',
            'form' => $form->createView(),
        ]);


    }

    #[Route('/vet/dashboard/medvisit', name: 'app_medvisit')]
    public function medvisit(MedicalvisitRepository $medicalvisitRepository): Response
    {
        $medicalvisits = $medicalvisitRepository->findAll();
        return $this->render('vet/medicalvisits/medvisit.html.twig', [
            'medicalvisits' => $medicalvisits]);
    }

    #[Route('/vet/dashboard/horses/edit/{id}', name: 'app_vet_edit_horses')]
    public function Edit($id, \Symfony\Component\HttpFoundation\Request $request, EntityManagerInterface $entityManager, HorseRepository $horseRepository): Response
    {

        $horse = $horseRepository->find($id);

        if (!$horse) {
            throw $this->createNotFoundException('No horse found for id ' . $id);
        }

        $form = $this->createForm(HorseType::class, $horse);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $entityManager->persist($horse);
            $entityManager->flush();

            $entityManager->flush();

            return $this->redirectToRoute('app_vet_view_horses');
        }
        return $this->render('/vet/horses/edit.html.twig', [
            'controller_name' => 'VetController',
            'form' => $form->createView(),
        ]);

    }

    /**
     * @throws TransportExceptionInterface
     */
    #[Route('/vet/dashboard/medicalvisits/addvis', name: 'app_vet_addvis')]
    public function addvis(Request $request, EntityManagerInterface $entityManager, MedicalvisitRepository $medicalvisitRepository,MailerInterface $mailer): Response
    {
        $medicalvisit = new Medicalvisit();
        $form = $this->createForm(VisitType::class, $medicalvisit);
        $form->handleRequest($request);
        if ($form->isSubmitted() ) {
            $medicalvisit->setVisitdate(new \DateTime());
            $email = (new Email())
                ->from('ahmedjallabi2020@gmail.com')
                //->to($medicalvisit->getIdvet()->getEmail())
                // Pour tester
                    ->to("ahmedjallabi2020@gmail.com")
                ->subject('Ajout visit medicale')
                ->text('une nouvelle visite medicale à été ajouté');

            $mailer->send($email);
            $entityManager->persist($medicalvisit);
            $entityManager->flush();
        }
        return $this->render('/vet/medicalvisits/addvis.html.twig', [
            'controller_name' => 'VetController',
            'form' => $form->createView(),
        ]);
    }
    #[Route('/vet/dashboard/medicalvisits/editvis/{id}', name: 'app_vet_editvis')]
    public function editvis($id, \Symfony\Component\HttpFoundation\Request $request, EntityManagerInterface $entityManager, MedicalvisitRepository $medicalvisitRepository): Response
    {
        $medicalvisit = $medicalvisitRepository->find($id);

        if (!$medicalvisit) {
            throw $this->createNotFoundException('No visit found for id ' . $id);
        }
        $form = $this->createForm(VisitType::class, $medicalvisit);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $entityManager->persist($medicalvisit);
            $entityManager->flush();

            $entityManager->flush();

            return $this->redirectToRoute('app_vet_editvis', ['id' => $medicalvisit->getId()]);
        }
        return $this->render('/vet/medicalvisits/editvis.html.twig', [
            'controller_name' => 'VetController',
            'form' => $form->createView(),
        ]);
    }
#[Route('/vet/medvisit/delete', name: 'app_vet_delete_medvisit')]
    public function deleteMedvisit(Request $request,EntityManagerInterface $entityManager,MedicalvisitRepository $medicalvisitRepository): Response
    {
        $medvisitid = $request->request->get('id');
        $medvisit = $medicalvisitRepository->find($medvisitid);

        $entityManager->remove($medvisit);
        $entityManager->flush();

        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent(json_encode(['message' => 'Medical visit deleted successfully']));
        return $response;
    }

    #[Route('/vet/horse/delete', name: 'app_vet_delete_horse')]
    public function deleteHorse(Request $request,EntityManagerInterface $entityManager,HorseRepository $horseRepository): Response
    {
        $horseid = $request->request->get('id');
        $horse = $horseRepository->find($horseid);

        $entityManager->remove($horse);
        $entityManager->flush();

        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent(json_encode(['message' => 'Horse deleted successfully']));
        return $response;
    }
    #[Route('/api/horses', name: 'api_activities')]
    public function getHorses(Request $request,HorseRepository $horseRepository, EntityManagerInterface $em,  )
    {

        $horses = $horseRepository->findAll();



        // Use the route

        $htmlContent = $this->renderView('vet/horses/partials/horseHTMLsnippet.html.twig', [
            'horses' => $horses,
        ]);


        return new JsonResponse(['html' => $htmlContent]);
    }

    #[Route('/pdf', name: 'pdf')]
    public function pdf(MedicalvisitRepository $medicalvisitRepository)
    {
        // Instanciation de TCPDF
        $pdf = new TCPDF();
        $pdf->AddPage();

        // Configuration de Dompdf selon vos besoins
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Open Sans');

        // Instanciation de Dompdf avec nos options
        $dompdf = new Dompdf($pdfOptions);

        // Récupérer le HTML généré dans notre fichier twig
        $html = $this->renderView('vet/medicalvisits/pdf.html.twig', [
            'medicalvisits' => $medicalvisitRepository->findAll(),
        ]);

        // Ajouter du HTML d'en-tête à la variable $html
        $headerHtml = '<h1 style="text-align: center; color: #32bb6f;">Liste des visites médicales</h1>';
        $html = $headerHtml . $html;

        // Charger le HTML dans Dompdf
        $dompdf->loadHtml($html);

        // (Optionnel) Configurer la taille et l'orientation du papier 'portrait' ou 'landscape'
        $dompdf->setPaper('A4', 'portrait');

        // Rendre le HTML en PDF
        $dompdf->render();

        // Récupérer le contenu du buffer de sortie et le vider
        $pdfOutput = $dompdf->output();
        ob_clean();

        // Sortie du PDF généré dans le navigateur (vue en ligne)
        $dompdf->stream("ListeDesVisitesMedicales.pdf", [
            'medicalvisits' => true
        ]);

        // Envoyer le PDF au navigateur
        $response = new Response($pdfOutput, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="ListeDesVisitesMedicales.pdf"',
        ]);
        return $response;
    }
    #[Route('/tree-by-breed', name: 'tree_by_breed')]
    public function treeByBreed(HorseRepository $horseRepository): JsonResponse
    {
        $horses = $horseRepository->findBy([], ['breed' => 'ASC']);
        $jsonData = [];
        foreach ($horses as $horse) {
            $jsonData[] = [
                'id' => $horse->getId(),
                'name' => $horse->getName(),
                'breed' => $horse->getBreed(),
                'DatePension' => $horse->getDatePension()->format('Y-m-d'),
                'isAvailable' => $horse->isIsAvailable(),
            ];
        }
        return new JsonResponse($jsonData);
    }
    #[Route('/vet/horse/search', name: 'vet_horse_search', methods: ['POST'])]
    public function search(Request $request, HorseRepository $horseRepository): JsonResponse
    {
        $searchTerm = $request->getContent();
        $data = json_decode($searchTerm, true);

        $horses = $horseRepository->createQueryBuilder('p')
            ->where('p.name LIKE :searchTerm')
            ->setParameter('searchTerm', '%'.$data["search"].'%')
            ->getQuery()
            ->getResult();// Implement the search logic in your repository
        $jsonData = [];
        foreach ($horses as $horse) {
            $jsonData[] = [
                'id' => $horse->getId(),
                'name' => $horse->getName(),
                'breed' => $horse->getBreed(),
                'DatePension' => $horse->getDatePension()->format('Y-m-d'),
                'isAvailable' => $horse->isIsAvailable(),
            ];
        }
        return new JsonResponse($jsonData);
    }

}
