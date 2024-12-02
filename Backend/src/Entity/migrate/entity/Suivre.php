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
	#[ORM\GeneratedValue]
	#[ORM\Column(type: Types::INTEGER)]
	private ?int $idProgramme = null;

	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column(type: Types::INTEGER)]
	private ?int $idUser = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTime $dateDebutProg = null;

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

	public function getDateDebutProg(): ?\DateTime {
		return $this->dateDebutProg;
	}

	public function setDateDebutProg(?\DateTime $date_debut_prog): void {
		$this->dateDebutProg = $date_debut_prog;
	}

}