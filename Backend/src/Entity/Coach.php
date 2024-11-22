<?php

namespace App\Entity;

use App\Repository\CoachRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CoachRepository::class)]
#[ORM\Table(name: 'coach')]
class Coach {

	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column(type: Types::INTEGER)]
	private ?int $idCoach = null;

	#[ORM\Column(type: Types::STRING)]
	private ?string $nom = null;

	#[ORM\Column(type: Types::STRING)]
	private ?string $photo = null;

	#[ORM\Column(type: Types::STRING)]
	private ?string $description = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTime $creation = null;

	public function getIdCoach(): ?int {
		return $this->idCoach;
	}

	public function setIdCoach(?int $id_coach): void {
		$this->idCoach = $id_coach;
	}

	public function getNom(): ?string {
		return $this->nom;
	}

	public function setNom(?string $nom): void {
		$this->nom = $nom;
	}

	public function getPhoto(): ?string {
		return $this->photo;
	}

	public function setPhoto(?string $photo): void {
		$this->photo = $photo;
	}

	public function getDescription(): ?string {
		return $this->description;
	}

	public function setDescription(?string $description): void {
		$this->description = $description;
	}

	public function getCreation(): ?\DateTime {
		return $this->creation;
	}

	public function setCreation(?\DateTime $creation): void {
		$this->creation = $creation;
	}

}