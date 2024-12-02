<?php

namespace App\Entity;

use App\Repository\SouscriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: SouscriptionRepository::class)]
#[ORM\Table(name: 'souscription')]
class Souscription {

	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column(type: Types::INTEGER)]
	private ?int $idSouscription = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTime $dateSouscription = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTime $dateFinSouscription = null;

	#[ORM\ManyToOne(targetEntity: User::class)]
	#[ORM\JoinColumn(name: 'id_user', referencedColumnName: 'id_user', nullable: false)]
	private ?User $idUser = null;

	#[ORM\ManyToOne(targetEntity: TypeAbonnement::class)]
	#[ORM\JoinColumn(name: 'id_type_abonnement', referencedColumnName: 'id_type_abonnement', nullable: false)]
	private ?TypeAbonnement $idTypeAbonnement = null;

	#[ORM\ManyToOne(targetEntity: Paiement::class)]
	#[ORM\JoinColumn(name: 'id_paiement', referencedColumnName: 'id_paiement', nullable: false)]
	private ?Paiement $idPaiement = null;

	#[ORM\ManyToOne(targetEntity: Status::class)]
	#[ORM\JoinColumn(name: 'id_status', referencedColumnName: 'id_status', nullable: false)]
	private ?Status $idStatus = null;

	public function getIdSouscription(): ?int {
		return $this->idSouscription;
	}

	public function setIdSouscription(?int $id_souscription): void {
		$this->idSouscription = $id_souscription;
	}

	public function getDateSouscription(): ?\DateTime {
		return $this->dateSouscription;
	}

	public function setDateSouscription(?\DateTime $date_souscription): void {
		$this->dateSouscription = $date_souscription;
	}

	public function getDateFinSouscription(): ?\DateTime {
		return $this->dateFinSouscription;
	}

	public function setDateFinSouscription(?\DateTime $date_fin_souscription): void {
		$this->dateFinSouscription = $date_fin_souscription;
	}

	public function getIdUser(): ?User {
		return $this->idUser;
	}

	public function setIdUser(?User $id_user): void {
		$this->idUser = $id_user;
	}

	public function getIdTypeAbonnement(): ?TypeAbonnement {
		return $this->idTypeAbonnement;
	}

	public function setIdTypeAbonnement(?TypeAbonnement $id_type_abonnement): void {
		$this->idTypeAbonnement = $id_type_abonnement;
	}

	public function getIdPaiement(): ?Paiement {
		return $this->idPaiement;
	}

	public function setIdPaiement(?Paiement $id_paiement): void {
		$this->idPaiement = $id_paiement;
	}

	public function getIdStatus(): ?Status {
		return $this->idStatus;
	}

	public function setIdStatus(?Status $id_status): void {
		$this->idStatus = $id_status;
	}

}