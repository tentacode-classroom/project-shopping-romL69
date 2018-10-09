<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Form;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class RegisterController extends AbstractController
{
    /**
     * @Route("/register", name="register")
     */
    public function new(Request $request)
    {

        $user = new User();
        $form = $this->createFormBuilder($user)
          ->add('firstname', TextType::class,  array('label' => 'Prenom'))
          ->add('lastname', TextType::class,  array('label' => 'Nom'))
          ->add('email', EmailType::class)
          ->add('password', PasswordType::class,  array('label' => 'Mot de passe'))
          ->add('save', SubmitType::class, array('label' => 'Créer Utilisateur'))
          ->getForm();

          $form->handleRequest($request);

          if ($form->isSubmitted() && $form->isValid()) {

     $user = $form->getData();

     // ... perform some action, such as saving the task to the database
     // for example, if Task is a Doctrine entity, save it!
     $entityManager = $this->getDoctrine()->getManager();
     $entityManager->persist($form);
     $entityManager->flush();

     return $this->redirectToRoute('task_success');
 }
        return $this->render('register/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
