<?php

namespace App\Entity;

use App\Repository\MethodePaiementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MethodePaiementRepository::class)]
#[ORM\Table(name: 'methode_paiement')]
class MethodePaiement {

	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column(type: Types::INTEGER)]
	private ?int $idMethodePaiement = null;

	#[ORM\Column(type: Types::STRING)]
	private ?string $libMethodePaiement = null;

	public function getIdMethodePaiement(): ?int {
		return $this->idMethodePaiement;
	}

	public function setIdMethodePaiement(?int $id_methode_paiement): void {
		$this->idMethodePaiement = $id_methode_paiement;
	}

	public function getLibMethodePaiement(): ?string {
		return $this->libMethodePaiement;
	}

	public function setLibMethodePaiement(?string $lib_methode_paiement): void {
		$this->libMethodePaiement = $lib_methode_paiement;
	}

}