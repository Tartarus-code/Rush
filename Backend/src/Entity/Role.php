<?php

namespace App\Entity;

use App\Repository\RoleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: RoleRepository::class)]
#[ORM\Table(name: 'role')]
class Role {

	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column(type: Types::INTEGER)]
	private ?int $idRole = null;

	#[ORM\Column(type: Types::STRING)]
	private ?string $libRole = null;

	#[ORM\Column(type: Types::STRING)]
	private ?string $codeRole = null;

	public function getIdRole(): ?int {
		return $this->idRole;
	}

	public function setIdRole(?int $id_role): void {
		$this->idRole = $id_role;
	}

	public function getLibRole(): ?string {
		return $this->libRole;
	}

	public function setLibRole(?string $lib_role): void {
		$this->libRole = $lib_role;
	}

	public function getCodeRole(): ?string {
		return $this->codeRole;
	}

	public function setCodeRole(?string $code_role): void {
		$this->codeRole = $code_role;
	}

}