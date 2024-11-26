<?php

namespace App\Entity;

use App\Repository\SuivreRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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

	public function setIdProgramme(?int $id_programme): void {
		$this->idProgramme = $id_programme;
	}

	public function getIdUser(): ?int {
		return $this->idUser;
	}

	public function setIdUser(?int $id_user): void {
		$this->idUser = $id_user;
	}

}