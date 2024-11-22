<?php

namespace App\Entity;

use App\Repository\RecevoirRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecevoirRepository::class)]
#[ORM\Table(name: 'recevoir')]
class Recevoir {

    #[ORM\Id]
    #[ORM\Column(type: Types::INTEGER)]
    private ?int $idNotification = null;

    #[ORM\Id]
    #[ORM\Column(type: Types::INTEGER)]
    private ?int $idUser = null;

    #[ORM\Column(type: Types::INTEGER)]
    private ?int $isLu = null;

    public function getIdNotification(): ?int {
        return $this->idNotification;
    }

    public function setIdNotification(?int $idNotification): void {
        $this->idNotification = $idNotification;
    }

    public function getIdUser(): ?int {
        return $this->idUser;
    }

    public function setIdUser(?int $idUser): void {
        $this->idUser = $idUser;
    }

    public function getIsLu(): ?int {
        return $this->isLu;
    }

    public function setIsLu(?int $isLu): void {
        $this->isLu = $isLu;
    }
}
