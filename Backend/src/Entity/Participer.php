<?php

namespace App\Entity;

use App\Repository\ParticiperRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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

	public function setIdUser(?int $id_user): void {
		$this->idUser = $id_user;
	}

	public function getIdCours(): ?int {
		return $this->idCours;
	}

	public function setIdCours(?int $id_cours): void {
		$this->idCours = $id_cours;
	}

}