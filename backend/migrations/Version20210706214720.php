<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210706214720 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE admin (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(30) NOT NULL, pwd VARCHAR(30) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE classe (id INT AUTO_INCREMENT NOT NULL, id_classe NUMERIC(10, 0) NOT NULL, lib_class VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inscription (id INT AUTO_INCREMENT NOT NULL, date_inscri VARCHAR(255) NOT NULL, status TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE matiere (id INT AUTO_INCREMENT NOT NULL, id_mat NUMERIC(10, 0) NOT NULL, lib_mat VARCHAR(255) NOT NULL, prix_mat NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE niveau (id INT AUTO_INCREMENT NOT NULL, id_niveau NUMERIC(10, 0) NOT NULL, lib_niv VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paiement (id INT AUTO_INCREMENT NOT NULL, id_paiement NUMERIC(10, 0) NOT NULL, date_paiement VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE posts (id INT AUTO_INCREMENT NOT NULL, id_post NUMERIC(10, 0) NOT NULL, date_publier VARCHAR(255) NOT NULL, contenue VARCHAR(255) NOT NULL, nb_likes NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE publications (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, information_id INT NOT NULL, question_id INT NOT NULL, date_pub DATETIME NOT NULL, nb_likes INT NOT NULL, content LONGTEXT NOT NULL, nb_signal INT NOT NULL, discr VARCHAR(255) NOT NULL, subject VARCHAR(30) DEFAULT NULL, file VARCHAR(255) DEFAULT NULL, class VARCHAR(20) DEFAULT NULL, status TINYINT(1) DEFAULT NULL, INDEX IDX_32783AF4A76ED395 (user_id), INDEX IDX_32783AF42EF03101 (information_id), INDEX IDX_32783AF41E27F6BF (question_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(20) NOT NULL, lastname VARCHAR(20) NOT NULL, username VARCHAR(30) NOT NULL, email VARCHAR(50) NOT NULL, birth_date DATE NOT NULL, pwd VARCHAR(30) NOT NULL, discr VARCHAR(255) NOT NULL, class VARCHAR(20) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, rating_nb DOUBLE PRECISION DEFAULT NULL, speciality VARCHAR(30) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE publications ADD CONSTRAINT FK_32783AF4A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE publications ADD CONSTRAINT FK_32783AF42EF03101 FOREIGN KEY (information_id) REFERENCES publications (id)');
        $this->addSql('ALTER TABLE publications ADD CONSTRAINT FK_32783AF41E27F6BF FOREIGN KEY (question_id) REFERENCES publications (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE publications DROP FOREIGN KEY FK_32783AF42EF03101');
        $this->addSql('ALTER TABLE publications DROP FOREIGN KEY FK_32783AF41E27F6BF');
        $this->addSql('ALTER TABLE publications DROP FOREIGN KEY FK_32783AF4A76ED395');
        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE classe');
        $this->addSql('DROP TABLE inscription');
        $this->addSql('DROP TABLE matiere');
        $this->addSql('DROP TABLE niveau');
        $this->addSql('DROP TABLE paiement');
        $this->addSql('DROP TABLE posts');
        $this->addSql('DROP TABLE publications');
        $this->addSql('DROP TABLE user');
    }
}
