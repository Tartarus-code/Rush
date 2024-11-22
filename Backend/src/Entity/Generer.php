<?php

namespace App\Entity;

use App\Repository\GenererRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GenererRepository::class)]
#[ORM\Table(name: 'generer')]
class Generer {

    #[ORM\Id]
    #[ORM\Column(type: Types::INTEGER)]
    private ?int $idNotification = null;

    #[ORM\Id]
    #[ORM\Column(type: Types::INTEGER)]
    private ?int $idCours = null;

    public function getIdNotification(): ?int {
        return $this->idNotification;
    }

    public function setIdNotification(?int $idNotification): void {
        $this->idNotification = $idNotification;
    }

    public function getIdCours(): ?int {
        return $this->idCours;
    }

    public function setIdCours(?int $idCours): void {
        $this->idCours = $idCours;
    }
}
