<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserApiController extends AbstractController
{
    #[Route('/api/user', name: 'api_user', methods: ['POST'])]
    public function createUser(Request $request, EntityManagerInterface $manager, UserPasswordHasherInterface $passwordHasher): Response
    {
        $data = $request->request->all();

        if (isset($data['nom']) && isset($data['prenom']) && isset($data['email']) && isset($data['password'])) {
            $user = new User();
            $user->setNom($data['nom']);
            $user->setPrenom($data['prenom']);
            $user->setEmail($data['email']);
            $user->setNumTelephone($data['numTelephone']);
            $user->setIsNotifSms(isset($data['isNotifSms']) ? 1 : 0);
            $user->setDateNaissance(new \DateTime($data['dateNaissance']));
            $codeRole = $data['codeRole'] ?? 'ROLE_USER'; $user->setCodeRole($codeRole);
            $plainPassword = $data['password']; $hashedPassword = $passwordHasher->hashPassword($user, $plainPassword); $user->setPassword($hashedPassword);
            $manager->persist($user);
            $manager->flush();

            return new JsonResponse(['message' => 'Utilisateur créé avec succès'], Response::HTTP_CREATED);
        }

        return new JsonResponse(['message' => 'Données invalides'], Response::HTTP_BAD_REQUEST);
    }
}
