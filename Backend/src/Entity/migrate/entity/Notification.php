<?php

namespace App\Entity;

use App\Repository\NotificationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: NotificationRepository::class)]
#[ORM\Table(name: 'notification')]
class Notification {

	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column(type: Types::INTEGER)]
	private ?int $idNotification = null;

	#[ORM\Column(type: Types::STRING)]
	private ?string $message = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTime $dateEnvoi = null;

	public function getIdNotification(): ?int {
		return $this->idNotification;
	}

	public function setIdNotification(?int $id_notification): void {
		$this->idNotification = $id_notification;
	}

	public function getMessage(): ?string {
		return $this->message;
	}

	public function setMessage(?string $message): void {
		$this->message = $message;
	}

	public function getDateEnvoi(): ?\DateTime {
		return $this->dateEnvoi;
	}

	public function setDateEnvoi(?\DateTime $date_envoi): void {
		$this->dateEnvoi = $date_envoi;
	}

}