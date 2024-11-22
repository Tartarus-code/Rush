<?php

namespace App\Entity;

use App\Repository\StatusRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: StatusRepository::class)]
#[ORM\Table(name: 'status')]
class Status {

	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column(type: Types::INTEGER)]
	private ?int $idStatus = null;

	#[ORM\Column(type: Types::STRING)]
	private ?string $libStatus = null;

	public function getIdStatus(): ?int {
		return $this->idStatus;
	}

	public function setIdStatus(?int $id_status): void {
		$this->idStatus = $id_status;
	}

	public function getLibStatus(): ?string {
		return $this->libStatus;
	}

	public function setLibStatus(?string $lib_status): void {
		$this->libStatus = $lib_status;
	}

}