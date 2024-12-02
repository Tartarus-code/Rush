<?php

namespace App\Entity;

use App\Repository\EtatRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EtatRepository::class)]
#[ORM\Table(name: 'etat')]
class Etat {

	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column(type: Types::INTEGER)]
	private ?int $idEtat = null;

	#[ORM\Column(type: Types::STRING)]
	private ?string $libEtat = null;

	public function getIdEtat(): ?int {
		return $this->idEtat;
	}

	public function setIdEtat(?int $id_etat): void {
		$this->idEtat = $id_etat;
	}

	public function getLibEtat(): ?string {
		return $this->libEtat;
	}

	public function setLibEtat(?string $lib_etat): void {
		$this->libEtat = $lib_etat;
	}

}