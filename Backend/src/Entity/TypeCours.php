<?php

namespace App\Entity;

use App\Repository\TypeCoursRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TypeCoursRepository::class)]
#[ORM\Table(name: 'type_cours')]
class TypeCours {

	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column(type: Types::INTEGER)]
	private ?int $idTypeCours = null;

	#[ORM\Column(type: Types::STRING)]
	private ?string $libTypeCours = null;

	public function getIdTypeCours(): ?int {
		return $this->idTypeCours;
	}

	public function setIdTypeCours(?int $id_type_cours): void {
		$this->idTypeCours = $id_type_cours;
	}

	public function getLibTypeCours(): ?string {
		return $this->libTypeCours;
	}

	public function setLibTypeCours(?string $lib_type_cours): void {
		$this->libTypeCours = $lib_type_cours;
	}

}