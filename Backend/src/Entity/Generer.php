<?php

namespace App\Entity;

use App\Repository\GenererRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: GenererRepository::class)]
#[ORM\Table(name: 'generer')]
class Generer {

	#[ORM\Id]

	#[ORM\Column(type: Types::INTEGER)]
	private ?int $idNotification = null;

	#[ORM\Id]

	#[ORM\Column(type: Types::INTEGER)]
	private ?int $idCours = null;

	public function getIdNotification(): ?int {
		return $this->idNotification;
	}

	public function setIdNotification(?int $id_notification): void {
		$this->idNotification = $id_notification;
	}

	public function getIdCours(): ?int {
		return $this->idCours;
	}

	public function setIdCours(?int $id_cours): void {
		$this->idCours = $id_cours;
	}

}