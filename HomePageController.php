<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    /**
     * @Route('/home/page', name: 'home_page')
     */
    public function index(): Response
    {
        $productRepository = $this->getDoctrine()->getRepository( Product::class);
        $products = $productRepository->findAll();
        return $this->render('home_page/index.html.twig', [
            'allProducts'=>$products,
        ]);
    }
}
