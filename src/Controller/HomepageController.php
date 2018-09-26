<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\DogRepository;
class HomepageController extends AbstractController
{
    /**
     * @Route("/homepage", name="homepage")
     */
    public function index()
    {
        /*$products = [
        ['id' => 1,
        'name' => "good boy ",
        ],
        ['id' => 2,
        'name' => "very good boy ",
        ],
        ['id' => 3,
        'name' => "very very good boy ",
        ],
        ['id' => 4,
        'name' => "incredibly good boy ",
        ],
        ];


        return $this->render('homepage/index.html.twig', [
            'products' => $products,
        ]);
        */
        $dogRepository = new DogRepository();
        $dogs = $dogRepository->findAll();
        return $this->render('homepage/index.html.twig', [
            'dogs' => $dogs,
        ]);
    }

}
