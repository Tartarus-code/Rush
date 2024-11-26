<?php

namespace App\Controller;

use App\Entity\Status;
use App\Form\StatusType;
use App\Repository\StatusRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StatusController extends AbstractController
{
    
    #[Route('/status', name: 'app_status')]
    public function index(StatusRepository $repoStatus): Response
    {
        $mesStatus = $repoStatus->findAll();
        //dd($mesStatus);
        return $this->render('status/index.html.twig', [
            'mesStatus' => $mesStatus
        ]);
    }

    #[Route('/creer-status', name: 'app_creer_status')]
    public function creerStatus(Request $request, EntityManagerInterface $manager): Response
    {
        // créer un objet status
        $status = new Status();
        // on crée un objet form qui appelle le fromtype et remplit l'objet status
        $form = $this->createForm(StatusType::class, $status);
        // on met un ecouteur sur le formulaire avec la classe Request
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){

            $manager->persist($status);
            $manager->flush();

            $this->addFlash('success', 'Bravo, la valeur a été enregistré !');

            return $this->redirectToRoute('app_status');
        }

        return $this->render('status/creer-status.html.twig', [
            'controller_name' => 'StatusController',
            'form' => $form->createView(),
        ]);
    }


    #[Route('/supprimer-status/{id}', name: 'app_supprimer_status')]
    public function supprimerStatus($id, StatusRepository $repoStatus, EntityManagerInterface $manager): Response
    {
        $status = $repoStatus->findOneByIdStatus($id);
                   

        $manager->remove( $status);
        $manager->flush();   
        return $this->redirectToRoute('app_status');
    }

    #[Route('/modifier-status/{id}', name: 'app_modifier_status')]
    public function modifierStatus($id, Request $request, StatusRepository $repoStatus, EntityManagerInterface $manager): Response
    {
        $status = $repoStatus->findOneByIdStatus($id);
        $form = $this->createForm(StatusType::class, $status);
        // on met un ecouteur sur le formulaire avec la classe Request
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){

            $manager->persist($status);
            $manager->flush();

            $this->addFlash('success', 'Bravo, la valeur a bien été modifié !');

            return $this->redirectToRoute('app_status');
        }     

        return $this->render('status/modifier-status.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

