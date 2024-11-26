<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: 'user')]
#[ORM\HasLifecycleCallbacks]
class User {

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: Types::INTEGER)]
    private ?int $idUser = null;

    #[ORM\Column(type: Types::STRING)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::STRING)]
    private ?string $prenom = null;

    #[ORM\Column(type: Types::STRING)]
    private ?string $email = null;

    #[ORM\Column(type: Types::STRING)]
    private ?string $password = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTime $dateNaissance = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTime $dateInscription = null;

    #[ORM\Column(type: Types::STRING)]
    private ?string $numTelephone = null;

    #[ORM\Column(type: Types::INTEGER)]
    private ?int $isNotifSms = null;

    #[ORM\Column(type: Types::STRING)]
    private ?string $codeRole = null;

    #[ORM\PrePersist]
    public function setDateInscriptionValue(): void {
        $this->dateInscription = new \DateTime();
    }

    public function getIdUser(): ?int {
        return $this->idUser;
    }

    public function setIdUser(?int $id_user): void {
        $this->idUser = $id_user;
    }

    public function getNom(): ?string {
        return $this->nom;
    }

    public function setNom(?string $nom): void {
        $this->nom = $nom;
    }

    public function getPrenom(): ?string {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): void {
        $this->prenom = $prenom;
    }

    public function getEmail(): ?string {
        return $this->email;
    }

    public function setEmail(?string $email): void {
        $this->email = $email;
    }

    public function getPassword(): ?string {
        return $this->password;
    }

    public function setPassword(?string $password): void {
        $this->password = $password;
    }

    public function getDateNaissance(): ?\DateTime {
        return $this->dateNaissance;
    }

    public function setDateNaissance(?\DateTime $date_naissance): void {
        $this->dateNaissance = $date_naissance;
    }

    public function getDateInscription(): ?\DateTime {
        return $this->dateInscription;
    }

    public function setDateInscription(?\DateTime $date_inscription): void {
        $this->dateInscription = $date_inscription;
    }

    public function getNumTelephone(): ?string {
        return $this->numTelephone;
    }

    public function setNumTelephone(?string $num_telephone): void {
        $this->numTelephone = $num_telephone;
    }

    public function getIsNotifSms(): ?int {
        return $this->isNotifSms;
    }

    public function setIsNotifSms(?int $is_notif_sms): void {
        $this->isNotifSms = $is_notif_sms;
    }

    public function getCodeRole(): ?string {
        return $this->codeRole;
    }

    public function setCodeRole(?string $code_role): void {
        $this->codeRole = $code_role;
    }
}
