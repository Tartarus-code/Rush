<?php

namespace App\Entity;

use App\Repository\ParticiperRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParticiperRepository::class)]
#[ORM\Table(name: 'participer')]
class Participer {

    #[ORM\Id]
    #[ORM\Column(type: Types::INTEGER)]
    private ?int $idUser = null;

    #[ORM\Id]
    #[ORM\Column(type: Types::INTEGER)]
    private ?int $idCours = null;

    public function getIdUser(): ?int {
        return $this->idUser;
    }

    public function setIdUser(?int $idUser): void {
        $this->idUser = $idUser;
    }

    public function getIdCours(): ?int {
        return $this->idCours;
    }

    public function setIdCours(?int $idCours): void {
        $this->idCours = $idCours;
    }
}
