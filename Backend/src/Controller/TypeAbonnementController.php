<?php

namespace App\Controller;

use App\Entity\TypeAbonnement;
use App\Form\TypeAbonnementType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TypeAbonnementController extends AbstractController
{
    #[Route('/abonnement', name: 'app_type_abonnement')]
    public function index(Request $request, EntityManagerInterface $manager): Response
    {
        $abonnement = new TypeAbonnement();
        $form = $this->createForm(TypeAbonnementType::class, $abonnement);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $manager->persist($abonnement);
            $manager->flush();
        }
        return $this->render('type_abonnement/index.html.twig', [
            'controller_name' => 'AbonnementTypeController',
            'form' => $form->createView(),
        ]);
    }
}
