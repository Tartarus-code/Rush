<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241122092120 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE coach (id_coach INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, creation DATETIME NOT NULL, PRIMARY KEY(id_coach)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cours (id_cours INT AUTO_INCREMENT NOT NULL, id_coach INT NOT NULL, id_etat INT NOT NULL, id_type_cours INT NOT NULL, heure_debut DATETIME NOT NULL, heure_fin DATETIME NOT NULL, capacite_max INT NOT NULL, INDEX IDX_FDCA8C9CD1DC2CFC (id_coach), INDEX IDX_FDCA8C9CDEEAEB60 (id_etat), INDEX IDX_FDCA8C9C564C8BBC (id_type_cours), PRIMARY KEY(id_cours)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etat (id_etat INT AUTO_INCREMENT NOT NULL, lib_etat VARCHAR(255) NOT NULL, PRIMARY KEY(id_etat)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evaluation (id_eval INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, id_cours INT NOT NULL, note INT NOT NULL, commentaire VARCHAR(255) NOT NULL, date_eval DATETIME NOT NULL, INDEX IDX_1323A5756B3CA4B (id_user), INDEX IDX_1323A575134FCDAC (id_cours), PRIMARY KEY(id_eval)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE generer (id_notification INT NOT NULL, id_cours INT NOT NULL, PRIMARY KEY(id_notification, id_cours)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE methode_paiement (id_methode_paiement INT AUTO_INCREMENT NOT NULL, lib_methode_paiement VARCHAR(255) NOT NULL, PRIMARY KEY(id_methode_paiement)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE notification (id_notification INT AUTO_INCREMENT NOT NULL, message VARCHAR(255) NOT NULL, date_envoi DATETIME NOT NULL, PRIMARY KEY(id_notification)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paiement (id_paiement INT AUTO_INCREMENT NOT NULL, id_methode_paiement INT NOT NULL, montant DOUBLE PRECISION NOT NULL, date_paiement DATETIME NOT NULL, INDEX IDX_B1DC7A1E1DA0ED78 (id_methode_paiement), PRIMARY KEY(id_paiement)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE participer (id_user INT NOT NULL, id_cours INT NOT NULL, PRIMARY KEY(id_user, id_cours)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE programme (id_programme INT AUTO_INCREMENT NOT NULL, nom_programme VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, date_creation DATETIME NOT NULL, PRIMARY KEY(id_programme)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recevoir (id_notification INT NOT NULL, id_user INT NOT NULL, is_lu INT NOT NULL, PRIMARY KEY(id_notification, id_user)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE souscription (id_souscription INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, id_type_abonnement INT NOT NULL, id_paiement INT NOT NULL, id_status INT NOT NULL, date_souscription DATETIME NOT NULL, date_fin_souscription DATETIME NOT NULL, INDEX IDX_2AED620D6B3CA4B (id_user), INDEX IDX_2AED620DC14F7D16 (id_type_abonnement), INDEX IDX_2AED620DE107968B (id_paiement), INDEX IDX_2AED620D5D37D0F1 (id_status), PRIMARY KEY(id_souscription)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statistique (id_stat INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, poids DOUBLE PRECISION NOT NULL, performance VARCHAR(255) NOT NULL, date DATETIME NOT NULL, INDEX IDX_73A038AD6B3CA4B (id_user), PRIMARY KEY(id_stat)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE status (id_status INT AUTO_INCREMENT NOT NULL, lib_status VARCHAR(255) NOT NULL, PRIMARY KEY(id_status)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE suivre (id_programme INT NOT NULL, id_user INT NOT NULL, PRIMARY KEY(id_programme, id_user)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_abonnement (id_type_abonnement INT AUTO_INCREMENT NOT NULL, lib_type_abonnement VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, PRIMARY KEY(id_type_abonnement)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_cours (id_type_cours INT AUTO_INCREMENT NOT NULL, lib_type_cours VARCHAR(255) NOT NULL, PRIMARY KEY(id_type_cours)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id_user INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, date_naissance DATETIME NOT NULL, date_inscription DATETIME NOT NULL, num_telephone VARCHAR(255) NOT NULL, is_notif_sms INT NOT NULL, code_role VARCHAR(255) NOT NULL, PRIMARY KEY(id_user)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CD1DC2CFC FOREIGN KEY (id_coach) REFERENCES coach (id_coach)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CDEEAEB60 FOREIGN KEY (id_etat) REFERENCES etat (id_etat)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9C564C8BBC FOREIGN KEY (id_type_cours) REFERENCES type_cours (id_type_cours)');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A5756B3CA4B FOREIGN KEY (id_user) REFERENCES user (id_user)');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A575134FCDAC FOREIGN KEY (id_cours) REFERENCES cours (id_cours)');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1E1DA0ED78 FOREIGN KEY (id_methode_paiement) REFERENCES methode_paiement (id_methode_paiement)');
        $this->addSql('ALTER TABLE souscription ADD CONSTRAINT FK_2AED620D6B3CA4B FOREIGN KEY (id_user) REFERENCES user (id_user)');
        $this->addSql('ALTER TABLE souscription ADD CONSTRAINT FK_2AED620DC14F7D16 FOREIGN KEY (id_type_abonnement) REFERENCES type_abonnement (id_type_abonnement)');
        $this->addSql('ALTER TABLE souscription ADD CONSTRAINT FK_2AED620DE107968B FOREIGN KEY (id_paiement) REFERENCES paiement (id_paiement)');
        $this->addSql('ALTER TABLE souscription ADD CONSTRAINT FK_2AED620D5D37D0F1 FOREIGN KEY (id_status) REFERENCES status (id_status)');
        $this->addSql('ALTER TABLE statistique ADD CONSTRAINT FK_73A038AD6B3CA4B FOREIGN KEY (id_user) REFERENCES user (id_user)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CD1DC2CFC');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CDEEAEB60');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9C564C8BBC');
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A5756B3CA4B');
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A575134FCDAC');
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1E1DA0ED78');
        $this->addSql('ALTER TABLE souscription DROP FOREIGN KEY FK_2AED620D6B3CA4B');
        $this->addSql('ALTER TABLE souscription DROP FOREIGN KEY FK_2AED620DC14F7D16');
        $this->addSql('ALTER TABLE souscription DROP FOREIGN KEY FK_2AED620DE107968B');
        $this->addSql('ALTER TABLE souscription DROP FOREIGN KEY FK_2AED620D5D37D0F1');
        $this->addSql('ALTER TABLE statistique DROP FOREIGN KEY FK_73A038AD6B3CA4B');
        $this->addSql('DROP TABLE coach');
        $this->addSql('DROP TABLE cours');
        $this->addSql('DROP TABLE etat');
        $this->addSql('DROP TABLE evaluation');
        $this->addSql('DROP TABLE generer');
        $this->addSql('DROP TABLE methode_paiement');
        $this->addSql('DROP TABLE notification');
        $this->addSql('DROP TABLE paiement');
        $this->addSql('DROP TABLE participer');
        $this->addSql('DROP TABLE programme');
        $this->addSql('DROP TABLE recevoir');
        $this->addSql('DROP TABLE souscription');
        $this->addSql('DROP TABLE statistique');
        $this->addSql('DROP TABLE status');
        $this->addSql('DROP TABLE suivre');
        $this->addSql('DROP TABLE type_abonnement');
        $this->addSql('DROP TABLE type_cours');
        $this->addSql('DROP TABLE user');
    }
}
