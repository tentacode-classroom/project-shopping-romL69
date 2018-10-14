<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BasketController extends AbstractController
{
    /**
     * @Route("/panier", name="basket")
     */
    public function index()
    {
        return $this->render('basket/index.html.twig', [
            'controller_name' => 'BasketController',
        ]);
    }
    /**
     * @Route("/panier/ajouter/{productID}", name="basket")
     */
    public function add()
    {
        return $this->redirect('basket/index.html.twig', [
            'controller_name' => 'BasketController',
        ]);
    }
}
