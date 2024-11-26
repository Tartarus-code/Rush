<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function createUser(Request $request, EntityManagerInterface $manager): Response
    {
        // Créer un objet User
        $user = new User();
        
        // Créer un formulaire qui appelle le FormType et remplit l'objet User
        $form = $this->createForm(UserType::class, $user);
        
        // Met un écouteur sur le formulaire avec la classe Request
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($user);
            $manager->flush();

            $this->addFlash('success', "Bravo, l'utilisateur a été enregistré !");
            
            return $this->redirectToRoute('app_user');
        }

        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
            'form' => $form->createView(),
        ]);
    }
}
