<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CoursRepository::class)]
#[ORM\Table(name: 'cours')]
class Cours {

	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column(type: Types::INTEGER)]
	private ?int $idCours = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTime $heureDebut = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTime $heureFin = null;

	#[ORM\Column(type: Types::INTEGER)]
	private ?int $capaciteMax = null;

	#[ORM\ManyToOne(targetEntity: Etat::class)]
	#[ORM\JoinColumn(name: 'id_etat', referencedColumnName: 'id_etat', nullable: false)]
	private ?Etat $idEtat = null;

	#[ORM\ManyToOne(targetEntity: TypeCours::class)]
	#[ORM\JoinColumn(name: 'id_type_cours', referencedColumnName: 'id_type_cours', nullable: false)]
	private ?TypeCours $idTypeCours = null;

	public function getIdCours(): ?int {
		return $this->idCours;
	}

	public function setIdCours(?int $id_cours): void {
		$this->idCours = $id_cours;
	}

	public function getHeureDebut(): ?\DateTime {
		return $this->heureDebut;
	}

	public function setHeureDebut(?\DateTime $heure_debut): void {
		$this->heureDebut = $heure_debut;
	}

	public function getHeureFin(): ?\DateTime {
		return $this->heureFin;
	}

	public function setHeureFin(?\DateTime $heure_fin): void {
		$this->heureFin = $heure_fin;
	}

	public function getCapaciteMax(): ?int {
		return $this->capaciteMax;
	}

	public function setCapaciteMax(?int $capacite_max): void {
		$this->capaciteMax = $capacite_max;
	}

	public function getIdEtat(): ?Etat {
		return $this->idEtat;
	}

	public function setIdEtat(?Etat $id_etat): void {
		$this->idEtat = $id_etat;
	}

	public function getIdTypeCours(): ?TypeCours {
		return $this->idTypeCours;
	}

	public function setIdTypeCours(?TypeCours $id_type_cours): void {
		$this->idTypeCours = $id_type_cours;
	}

}