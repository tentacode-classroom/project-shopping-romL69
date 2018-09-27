<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\DogRepository;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{id}", name="product")
     */
    public function index(Request $request, $id = 'non defini')
    {

        $dogRepository = new DogRepository();
        $dog = $dogRepository->findOneById($id);
        return $this->render('product/index.html.twig', [
            'dog' => $dog,
        ]);
    }

}
