<?php

namespace App\Entity;

use App\Repository\StatistiqueRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: StatistiqueRepository::class)]
#[ORM\Table(name: 'statistique')]
class Statistique {

	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column(type: Types::INTEGER)]
	private ?int $idStat = null;

	#[ORM\Column(type: Types::FLOAT)]
	private ?float $poids = null;

	#[ORM\Column(type: Types::STRING)]
	private ?string $performance = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTime $date = null;

	#[ORM\ManyToOne(targetEntity: User::class)]
	#[ORM\JoinColumn(name: 'id_user', referencedColumnName: 'id_user', nullable: false)]
	private ?User $idUser = null;

	public function getIdStat(): ?int {
		return $this->idStat;
	}

	public function setIdStat(?int $id_stat): void {
		$this->idStat = $id_stat;
	}

	public function getPoids(): ?float {
		return $this->poids;
	}

	public function setPoids(?float $poids): void {
		$this->poids = $poids;
	}

	public function getPerformance(): ?string {
		return $this->performance;
	}

	public function setPerformance(?string $performance): void {
		$this->performance = $performance;
	}

	public function getDate(): ?\DateTime {
		return $this->date;
	}

	public function setDate(?\DateTime $date): void {
		$this->date = $date;
	}

	public function getIdUser(): ?User {
		return $this->idUser;
	}

	public function setIdUser(?User $id_user): void {
		$this->idUser = $id_user;
	}

}