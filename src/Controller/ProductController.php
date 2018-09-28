<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\DogRepository;
use App\Entity\Dog;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{id}", name="product")
     */
    public function index(Request $request, $id = 'non defini')
    {

        $dog= $this->getDoctrine()
        ->getRepository(Dog::class)
        ->find($id);
    
        return $this->render('product/index.html.twig', [
            'dog' => $dog,
        ]);
    }

}
