<?php

namespace App\Entity;

use App\Repository\ProgrammeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ProgrammeRepository::class)]
#[ORM\Table(name: 'programme')]
class Programme {

	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column(type: Types::INTEGER)]
	private ?int $idProgramme = null;

	#[ORM\Column(type: Types::STRING)]
	private ?string $nomProgramme = null;

	#[ORM\Column(type: Types::STRING)]
	private ?string $description = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTime $dateCreation = null;

	public function getIdProgramme(): ?int {
		return $this->idProgramme;
	}

	public function setIdProgramme(?int $id_programme): void {
		$this->idProgramme = $id_programme;
	}

	public function getNomProgramme(): ?string {
		return $this->nomProgramme;
	}

	public function setNomProgramme(?string $nom_programme): void {
		$this->nomProgramme = $nom_programme;
	}

	public function getDescription(): ?string {
		return $this->description;
	}

	public function setDescription(?string $description): void {
		$this->description = $description;
	}

	public function getDateCreation(): ?\DateTime {
		return $this->dateCreation;
	}

	public function setDateCreation(?\DateTime $date_creation): void {
		$this->dateCreation = $date_creation;
	}

}