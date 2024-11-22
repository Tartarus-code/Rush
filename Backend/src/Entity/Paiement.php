<?php

namespace App\Entity;

use App\Repository\PaiementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PaiementRepository::class)]
#[ORM\Table(name: 'paiement')]
class Paiement {

	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column(type: Types::INTEGER)]
	private ?int $idPaiement = null;

	#[ORM\Column(type: Types::FLOAT)]
	private ?float $montant = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTime $datePaiement = null;

	#[ORM\ManyToOne(targetEntity: MethodePaiement::class)]
	#[ORM\JoinColumn(name: 'id_methode_paiement', referencedColumnName: 'id_methode_paiement', nullable: false)]
	private ?MethodePaiement $idMethodePaiement = null;

	public function getIdPaiement(): ?int {
		return $this->idPaiement;
	}

	public function setIdPaiement(?int $id_paiement): void {
		$this->idPaiement = $id_paiement;
	}

	public function getMontant(): ?float {
		return $this->montant;
	}

	public function setMontant(?float $montant): void {
		$this->montant = $montant;
	}

	public function getDatePaiement(): ?\DateTime {
		return $this->datePaiement;
	}

	public function setDatePaiement(?\DateTime $date_paiement): void {
		$this->datePaiement = $date_paiement;
	}

	public function getIdMethodePaiement(): ?MethodePaiement {
		return $this->idMethodePaiement;
	}

	public function setIdMethodePaiement(?MethodePaiement $id_methode_paiement): void {
		$this->idMethodePaiement = $id_methode_paiement;
	}

}