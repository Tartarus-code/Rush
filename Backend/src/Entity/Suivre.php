<?php

namespace App\Entity;

use App\Repository\SuivreRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SuivreRepository::class)]
#[ORM\Table(name: 'suivre')]
class Suivre {

    #[ORM\Id]
    #[ORM\Column(type: Types::INTEGER)]
    private ?int $idProgramme = null;

    #[ORM\Id]
    #[ORM\Column(type: Types::INTEGER)]
    private ?int $idUser = null;

    public function getIdProgramme(): ?int {
        return $this->idProgramme;
    }

    public function setIdProgramme(?int $idProgramme): void {
        $this->idProgramme = $idProgramme;
    }

    public function getIdUser(): ?int {
        return $this->idUser;
    }

    public function setIdUser(?int $idUser): void {
        $this->idUser = $idUser;
    }
}
