<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AuthController extends AbstractController
{
    #[Route('/auth/connexion', name: 'app_auth_connexion')]
    public function index(): Response
    {
        return $this->render('auth/index.html.twig', [
            'controller_name' => 'AuthController',
        ]);
    }
    #[Route('/auth/deconnexion', name: 'app_auth_deconnexion')]
    public function deconnexion(): Response
    {
        return $this->render('auth/index.html.twig', [
            'controller_name' => 'AuthController',
        ]);
    }
    #[Route('/auth/inscription', name: 'app_auth_inscription')]
    public function inscription(): Response
    {
        return $this->render('auth/inscription.html.twig', [
            'controller_name' => 'AuthController',
        ]);
    }
}
