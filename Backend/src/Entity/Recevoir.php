<?php

namespace App\Entity;

use App\Repository\RecevoirRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: RecevoirRepository::class)]
#[ORM\Table(name: 'recevoir')]
class Recevoir {

	#[ORM\Id]
	#[ORM\Column(type: Types::INTEGER)]
	private ?int $idNotification = null;

	#[ORM\Id]
	#[ORM\Column(type: Types::INTEGER)]
	private ?int $idUser = null;

	#[ORM\Column(type: Types::INTEGER)]
	private ?int $isLu = null;

	public function getIdNotification(): ?int {
		return $this->idNotification;
	}

	public function setIdNotification(?int $id_notification): void {
		$this->idNotification = $id_notification;
	}

	public function getIdUser(): ?int {
		return $this->idUser;
	}

	public function setIdUser(?int $id_user): void {
		$this->idUser = $id_user;
	}

	public function getIsLu(): ?int {
		return $this->isLu;
	}

	public function setIsLu(?int $is_lu): void {
		$this->isLu = $is_lu;
	}

}