<?php

namespace App\Controller;

use App\Entity\Cours;
use App\Form\CoursType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CoursController extends AbstractController
{
    #[Route('/cours', name: 'app_Cours')]
    public function index(Request $request, EntityManagerInterface $manager): Response
    {
        $cours = new Cours();
        $form = $this->createForm(CoursType::class, $cours);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $manager->persist($cours);
            $manager->flush();
        }
        return $this->render('cours/index.html.twig', [
            'controller_name' => 'CoursController',
            'form' => $form->createView(),
        ]);
    }
}
