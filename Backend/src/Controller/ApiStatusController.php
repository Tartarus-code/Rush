<?php

namespace App\Controller;

use App\Repository\StatusRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\SerializerInterface;

class ApiStatusController extends AbstractController
{
    #[Route('/api/status/all', name: 'app_api_status')]
    public function index(StatusRepository $repoStatus, SerializerInterface $serializer): Response
    {
        $mesStatus = $repoStatus->findAll();
        $json = $serializer->serialize($mesStatus, 'json');
        return new Response($json, Response::HTTP_OK, ['Content-Type' => 'application/json']);
    }
}
