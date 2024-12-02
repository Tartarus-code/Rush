<?php

namespace App\Entity;

use App\Repository\TypeAbonnementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TypeAbonnementRepository::class)]
#[ORM\Table(name: 'type_abonnement')]
class TypeAbonnement {

	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column(type: Types::INTEGER)]
	private ?int $idTypeAbonnement = null;

	#[ORM\Column(type: Types::STRING)]
	private ?string $libTypeAbonnement = null;

	#[ORM\Column(type: Types::FLOAT)]
	private ?float $prix = null;

	public function getIdTypeAbonnement(): ?int {
		return $this->idTypeAbonnement;
	}

	public function setIdTypeAbonnement(?int $id_type_abonnement): void {
		$this->idTypeAbonnement = $id_type_abonnement;
	}

	public function getLibTypeAbonnement(): ?string {
		return $this->libTypeAbonnement;
	}

	public function setLibTypeAbonnement(?string $lib_type_abonnement): void {
		$this->libTypeAbonnement = $lib_type_abonnement;
	}

	public function getPrix(): ?float {
		return $this->prix;
	}

	public function setPrix(?float $prix): void {
		$this->prix = $prix;
	}

}