<?php

namespace App\Entity;

use App\Repository\EvaluationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EvaluationRepository::class)]
#[ORM\Table(name: 'evaluation')]
class Evaluation {

	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column(type: Types::INTEGER)]
	private ?int $idEval = null;

	#[ORM\Column(type: Types::INTEGER)]
	private ?int $note = null;

	#[ORM\Column(type: Types::STRING)]
	private ?string $commentaire = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTime $dateEval = null;

	#[ORM\ManyToOne(targetEntity: User::class)]
	#[ORM\JoinColumn(name: 'id_user', referencedColumnName: 'id_user', nullable: false)]
	private ?User $idUser = null;

	#[ORM\ManyToOne(targetEntity: Cours::class)]
	#[ORM\JoinColumn(name: 'id_cours', referencedColumnName: 'id_cours', nullable: false)]
	private ?Cours $idCours = null;

	public function getIdEval(): ?int {
		return $this->idEval;
	}

	public function setIdEval(?int $id_eval): void {
		$this->idEval = $id_eval;
	}

	public function getNote(): ?int {
		return $this->note;
	}

	public function setNote(?int $note): void {
		$this->note = $note;
	}

	public function getCommentaire(): ?string {
		return $this->commentaire;
	}

	public function setCommentaire(?string $commentaire): void {
		$this->commentaire = $commentaire;
	}

	public function getDateEval(): ?\DateTime {
		return $this->dateEval;
	}

	public function setDateEval(?\DateTime $date_eval): void {
		$this->dateEval = $date_eval;
	}

	public function getIdUser(): ?User {
		return $this->idUser;
	}

	public function setIdUser(?User $id_user): void {
		$this->idUser = $id_user;
	}

	public function getIdCours(): ?Cours {
		return $this->idCours;
	}

	public function setIdCours(?Cours $id_cours): void {
		$this->idCours = $id_cours;
	}

}