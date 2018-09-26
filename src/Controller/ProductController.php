<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\DogRepository;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{productId}", name="product")
     */
    public function index(Request $request, $productId = 'non defini')
    {
        /*$productId = $request->get('productId');
        return $this->render('product/index.html.twig', [
            'productId' => $productId,
        ]);
*/
        $dogRepository = new DogRepository();
        $dog = $dogRepository->findOneById($productId);
        return $this->render('product/index.html.twig', [
            'productId' => $productId,
        ]);
    }
    /*public function index(Request $request, $id='non defini')
    {
        $id = $request->get('id');
        $dogRepository = new DogRepository();
        $dog = $dogRepository->findOneById($id);
        return $this->render('product/index.html.twig', [
            'productId' => $id,
        ]);
    }*/
}
