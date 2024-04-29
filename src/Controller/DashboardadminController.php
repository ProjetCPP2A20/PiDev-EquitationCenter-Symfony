<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\ProductOrder;
use App\Form\ProductOrderType;
use App\Form\ProductType;
use App\Repository\ProductOrderRepository;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class DashboardadminController extends AbstractController
{
    #[Route('/dashboardadmin', name: 'app_dashboardadmin')]
    public function index(): Response
    {
        return $this->render('dashboardadmin/index.html.twig', [
            'controller_name' => 'DashboardadminController',
        ]);
    }
    #[Route('/formadd', name: 'app_formadd')]
    public function formadd(\Symfony\Component\HttpFoundation\Request $request,EntityManagerInterface $entityManager,ProductRepository $productRepository): Response
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            //dd($form->getErrors(true, false));
            $uploadedFile=$request->files->get('product')['blobimage']->getPathname();
            if ($uploadedFile) {
                // Read the binary data from the uploaded file
                $binaryData = file_get_contents($uploadedFile);

                $product->setBlobimage($binaryData);
                $entityManager->persist($product);
                $entityManager->flush();
                return $this->redirectToRoute('view');
            }
        }
        return $this->render('formadd/enigma-side-menu-crud-form-page.twig', [
            'controller_name' => 'DashboardadminController',
            'form' => $form->createView(),
        ]);
    }

    #[Route('/admin/order/delete', name: 'app_admin_delete_order')]
    public function deleteOrder(\Symfony\Component\HttpFoundation\Request $request,EntityManagerInterface $entityManager,ProductOrderRepository $productOrderRepository): Response
    {
        // Retrieve the activity ID from the request data
        $id = $request->request->get('id');

        // Here, you can perform deletion logic, such as deleting the activity from the database
        $order = $productOrderRepository->find($id);
        // For demonstration purposes, let's assume we're just logging the activity ID
        $entityManager->remove($order);
        $entityManager->flush();

        // Return a success response
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent(json_encode(['message' => 'Order deleted successfully']));
        return $response;
    }
    #[Route('/admin/product/delete', name: 'app_admin_delete_product')]
    public function deleteProduct(\Symfony\Component\HttpFoundation\Request $request,EntityManagerInterface $entityManager,ProductRepository $productRepository): Response
    {
        // Retrieve the activity ID from the request data
        $id = $request->request->get('id');

        // Here, you can perform deletion logic, such as deleting the activity from the database
        $product = $productRepository->find($id);
        // For demonstration purposes, let's assume we're just logging the activity ID
        $entityManager->remove($product);
        $entityManager->flush();

        // Return a success response
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent(json_encode(['message' => 'Product deleted successfully']));
        return $response;
    }
    #[Route('/api/orders', name: 'api_orders')]
    public function getOrders(\Symfony\Component\HttpFoundation\Request $request, EntityManagerInterface $em, ProductOrderRepository $productOrderRepository): JsonResponse
    {
        $page = $request->query->getInt('page', 1);

        $orders = $productOrderRepository->findAll();



        // Use the route


        $htmlContent = $this->renderView('orderView/partials/OrderSnippet.html.twig', [
            'productOrders' => $orders
        ]);


        return new JsonResponse(['html' => $htmlContent]);
    }

    #[Route('/view', name: 'view')]
    public function view(ProductRepository $productRepository): Response
    {
        $products = $productRepository->findAll();
        return $this->render('view/enigma-side-menu-crud-data-list-page.twig', [
            'controller_name' => 'DashboardadminController',
            'products' => $products
        ]);
    }
    #[Route('/orderdash', name: 'orderdash')]
    public function orderdash(): Response
    {
        return $this->render('orderdash/enigma-side-menu-dashboard-overview-1-page.twig', [
            'controller_name' => 'DashboardadminController',
        ]);
    }
    #[Route('/formorder', name: 'formorder')]
    public function formorder(\Symfony\Component\HttpFoundation\Request $request, EntityManagerInterface $entityManager, ProductOrderRepository $productOrderRepository): Response
    {
        $productOrder = new ProductOrder();

        $form = $this->createForm(ProductOrderType::class, $productOrder);
        $form->handleRequest($request);
        if ($form->isSubmitted() ) {
            if (!$form->isValid()){
                return $this->render('formorder/formorder.twig', [
                    'controller_name' => 'DashboardadminController',
                    'form' => $form->createView(),
                ]);
             }
            $entityManager->persist($productOrder);
            $entityManager->flush();

            return $this->redirectToRoute('orderView');
        }

        return $this->render('formorder/formorder.twig', [
            'controller_name' => 'DashboardadminController',
            'form' => $form->createView(),
        ]);
    }
    #[Route('/orderView', name: 'orderView')]
    public function orderView(ProductOrderRepository $productOrderRepository): Response
    {
        $productOrders = $productOrderRepository->findAll();
        return $this->render('orderView/orderView.twig', [
            'controller_name' => 'DashboardadminController',
            'productOrders' => $productOrders
        ]);
    }
    #[Route('/EditProduct/{id}', name: 'app_Edit')]
    public function Edit($id, \Symfony\Component\HttpFoundation\Request $request, EntityManagerInterface $entityManager, ProductRepository $productRepository): Response
    {
        $product = $productRepository->find($id);

        if (!$product) {
            throw $this->createNotFoundException('No product found for id '.$id);
        }

        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile=$request->files->get('product')['blobimage']->getPathname();
            if ($uploadedFile) {
                // Read the binary data from the uploaded file
                $binaryData = file_get_contents($uploadedFile);

                $product->setBlobimage($binaryData);
                $entityManager->persist($product);
                $entityManager->flush();
            }
            $entityManager->flush();

            return $this->redirectToRoute('view');
        }

        return $this->render('EditProduct/editform.twig', [
            'controller_name' => 'DashboardadminController',
            'form' => $form->createView(),
        ]);
    }
    #[Route('/EditProductOrder/{id}', name: 'app_EditOrder')]
    public function EditOrder($id, \Symfony\Component\HttpFoundation\Request $request, EntityManagerInterface $entityManager, ProductOrderRepository $productOrderRepository): Response
    {
        $productOrder = $productOrderRepository->find($id);

        if (!$productOrder) {
            throw $this->createNotFoundException('No product order found for id '.$id);
        }

        $form = $this->createForm(ProductOrderType::class, $productOrder);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if (!$form->isValid()){
                return $this->render('EditProductOrder/EditOrder.twig', [
                    'controller_name' => 'DashboardadminController',
                    'form' => $form->createView(),
                ]);
            }
         //   $entityManager->persist($productOrder);
            $entityManager->flush();

            return $this->redirectToRoute('orderView');
        }

        return $this->render('EditProductOrder/EditOrder.twig', [
            'controller_name' => 'DashboardadminController',
            'form' => $form->createView(),
        ]);

}
    #[Route('/deleteprod/{id}', name: 'delete_prod')]
    public function delete_prod($id,EntityManagerInterface $entityManager,ProductRepository $productRepository): Response
    {
        $product= $productRepository->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No comm found for id '.$id
            );
        }

        $entityManager->remove($product);
        $entityManager->flush();

        return $this->redirectToRoute('view');
    }

    #[Route('/tree-by-name', name: 'tree_by_name')]
    public function treeByName(ProductRepository $productRepository): JsonResponse
    {
        $products = $productRepository->findBy([], ['name' => 'ASC']);
        $jsonData = [];
        foreach ($products as $product) {
            $jsonData[] = [
                'id' => $product->getId(),
                'name' => $product->getName(),
                'BlobImage' => $product->getBlobImage(),
                'stockqty' => $product->getStockqty(),
                'price' => $product->getPrice(),
                'Description' => $product->getDescription(),
            ];
        }
        return new JsonResponse($jsonData);
    }
    #[Route('/search', name: 'search', methods: ['POST'])]
    public function search(Request $request, ProductRepository $productRepository): JsonResponse
    {
        $searchTerm = $request->getContent();
        $data = json_decode($searchTerm, true);

        $products = $productRepository->createQueryBuilder('p')
        ->where('p.name LIKE :searchTerm')
        ->setParameter('searchTerm', '%'.$data["search"].'%')
        ->getQuery()
        ->getResult();// Implement the search logic in your repository
        $jsonData = [];
        foreach ($products as $product) {
            $jsonData[] = [
                'id' => $product->getId(),
                'name' => $product->getName(),
                'BlobImage' => $product->getBlobImage(),
                'stockqty' => $product->getStockqty(),
                'price' => $product->getPrice(),
                'Description' => $product->getDescription(),
            ];
        }
        return new JsonResponse($jsonData);
    }
}
