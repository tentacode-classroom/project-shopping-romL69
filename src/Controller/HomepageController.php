<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\DogRepository;
use App\Entity\Dog;

class HomepageController extends AbstractController
{
    /**
     * @Route("/homepage", name="homepage")
     */
    public function index()
    {

        $dogs= $this->getDoctrine()
        ->getRepository(Dog::class)
        ->findByAlpha();

        return $this->render('homepage/index.html.twig', [
            'dogs' => $dogs,
        ]);
    }

}
