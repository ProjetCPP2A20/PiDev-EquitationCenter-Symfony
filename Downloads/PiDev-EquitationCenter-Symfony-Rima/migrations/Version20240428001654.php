<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240428001654 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE complaints DROP FOREIGN KEY complaints_ibfk_1');
        $this->addSql('DROP TABLE admins');
        $this->addSql('DROP TABLE complaints');
        $this->addSql('DROP TABLE personne');
        $this->addSql('ALTER TABLE activitysession CHANGE StartTime StartTime TIME DEFAULT NULL, CHANGE EndTime EndTime TIME DEFAULT NULL');
        $this->addSql('ALTER TABLE activitysession RENAME INDEX activityid TO IDX_7B01D2576706C1E4');
        $this->addSql('ALTER TABLE commentaire CHANGE Date Date DATE DEFAULT NULL, CHANGE Commentaire Commentaire VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE complaint ADD created_at DATE DEFAULT NULL, DROP createdAt, CHANGE objet objet VARCHAR(255) DEFAULT NULL, CHANGE etat etat VARCHAR(50) DEFAULT NULL, CHANGE answer answer VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE horseactivity DROP FOREIGN KEY horseactivity_ibfk_2');
        $this->addSql('ALTER TABLE horseactivity DROP FOREIGN KEY horseactivity_ibfk_1');
        $this->addSql('ALTER TABLE horseactivity ADD CONSTRAINT FK_65D07BB976B275AD FOREIGN KEY (horse_id) REFERENCES horse (id)');
        $this->addSql('ALTER TABLE horseactivity ADD CONSTRAINT FK_65D07BB981C06096 FOREIGN KEY (activity_id) REFERENCES activity (id)');
        $this->addSql('ALTER TABLE horseactivity RENAME INDEX horseactivity_ibfk_2 TO IDX_65D07BB981C06096');
        $this->addSql('ALTER TABLE medicalvisit DROP FOREIGN KEY medicalvisit_ibfk_1');
        $this->addSql('ALTER TABLE medicalvisit DROP FOREIGN KEY medicalvisit_ibfk_2');
        $this->addSql('ALTER TABLE medicalvisit CHANGE VisitDate VisitDate DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE medicalvisit ADD CONSTRAINT FK_4DA8330A755E6C05 FOREIGN KEY (idHorse) REFERENCES horse (id)');
        $this->addSql('ALTER TABLE medicalvisit ADD CONSTRAINT FK_4DA8330AC197FAB0 FOREIGN KEY (idVet) REFERENCES users (id)');
        $this->addSql('ALTER TABLE medicalvisit RENAME INDEX medicalvisit_ibfk_1 TO IDX_4DA8330A755E6C05');
        $this->addSql('ALTER TABLE medicalvisit RENAME INDEX medicalvisit_ibfk_2 TO IDX_4DA8330AC197FAB0');
        $this->addSql('ALTER TABLE post CHANGE Date Date DATE DEFAULT NULL, CHANGE Description Description VARCHAR(255) DEFAULT NULL');
        $this->addSql('DROP INDEX fk_client_id ON product_order');
        $this->addSql('DROP INDEX product_id ON product_order');
        $this->addSql('ALTER TABLE useractivity CHANGE UserId UserId INT DEFAULT NULL, CHANGE ActivityId ActivityId INT DEFAULT NULL');
        $this->addSql('ALTER TABLE useractivity RENAME INDEX userid TO IDX_8031F62D631A48FA');
        $this->addSql('ALTER TABLE useractivity RENAME INDEX activityid TO IDX_8031F62D5C68E12C');
        $this->addSql('ALTER TABLE users CHANGE password password VARCHAR(255) DEFAULT NULL, CHANGE roles roles JSON NOT NULL, CHANGE is_verified is_verified TINYINT(1) NOT NULL, CHANGE salt salt VARBINARY(255) NOT NULL, CHANGE dateJoined dateJoined DATE NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9E7927C74 ON users (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE admins (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, email VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, password VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE complaints (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, complaint_text VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, created_at DATETIME DEFAULT \'NULL\', status VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, priority VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX user_id (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE personne (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, prenom VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, age INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE complaints ADD CONSTRAINT complaints_ibfk_1 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE activitysession CHANGE StartTime StartTime TIME DEFAULT \'NULL\', CHANGE EndTime EndTime TIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE activitysession RENAME INDEX idx_7b01d2576706c1e4 TO ActivityID');
        $this->addSql('ALTER TABLE commentaire CHANGE Date Date DATE DEFAULT \'NULL\', CHANGE Commentaire Commentaire VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE complaint ADD createdAt DATE DEFAULT \'NULL\', DROP created_at, CHANGE objet objet VARCHAR(255) DEFAULT \'NULL\', CHANGE etat etat VARCHAR(50) DEFAULT \'NULL\', CHANGE answer answer VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE horseactivity DROP FOREIGN KEY FK_65D07BB976B275AD');
        $this->addSql('ALTER TABLE horseactivity DROP FOREIGN KEY FK_65D07BB981C06096');
        $this->addSql('ALTER TABLE horseactivity ADD CONSTRAINT horseactivity_ibfk_2 FOREIGN KEY (activity_id) REFERENCES activity (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE horseactivity ADD CONSTRAINT horseactivity_ibfk_1 FOREIGN KEY (horse_id) REFERENCES horse (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE horseactivity RENAME INDEX idx_65d07bb981c06096 TO horseactivity_ibfk_2');
        $this->addSql('ALTER TABLE medicalvisit DROP FOREIGN KEY FK_4DA8330A755E6C05');
        $this->addSql('ALTER TABLE medicalvisit DROP FOREIGN KEY FK_4DA8330AC197FAB0');
        $this->addSql('ALTER TABLE medicalvisit CHANGE VisitDate VisitDate DATE DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE medicalvisit ADD CONSTRAINT medicalvisit_ibfk_1 FOREIGN KEY (idHorse) REFERENCES horse (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE medicalvisit ADD CONSTRAINT medicalvisit_ibfk_2 FOREIGN KEY (idVet) REFERENCES users (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE medicalvisit RENAME INDEX idx_4da8330ac197fab0 TO medicalvisit_ibfk_2');
        $this->addSql('ALTER TABLE medicalvisit RENAME INDEX idx_4da8330a755e6c05 TO medicalvisit_ibfk_1');
        $this->addSql('ALTER TABLE post CHANGE Date Date DATE DEFAULT \'NULL\', CHANGE Description Description VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('CREATE INDEX fk_client_id ON product_order (id_client)');
        $this->addSql('CREATE INDEX product_id ON product_order (product_id)');
        $this->addSql('ALTER TABLE useractivity CHANGE UserId UserId INT NOT NULL, CHANGE ActivityId ActivityId INT NOT NULL');
        $this->addSql('ALTER TABLE useractivity RENAME INDEX idx_8031f62d631a48fa TO UserId');
        $this->addSql('ALTER TABLE useractivity RENAME INDEX idx_8031f62d5c68e12c TO activityId');
        $this->addSql('DROP INDEX UNIQ_1483A5E9E7927C74 ON users');
        $this->addSql('ALTER TABLE users CHANGE password password VARCHAR(255) DEFAULT \'NULL\', CHANGE roles roles VARCHAR(50) NOT NULL, CHANGE is_verified is_verified TINYINT(1) DEFAULT NULL, CHANGE salt salt VARBINARY(255) DEFAULT \'NULL\', CHANGE dateJoined dateJoined DATE DEFAULT \'NULL\'');
    }
}
