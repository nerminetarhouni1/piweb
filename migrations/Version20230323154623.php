<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230323154623 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE conducteur (id_conducteur INT AUTO_INCREMENT NOT NULL, cin_conducteur INT NOT NULL, nom_conducteur VARCHAR(255) NOT NULL, prenom_conducteur VARCHAR(255) NOT NULL, telephone_conducteur INT NOT NULL, email_conducteur VARCHAR(255) NOT NULL, ville_conducteur VARCHAR(255) NOT NULL, mdp_conducteur VARCHAR(255) NOT NULL, type_de_permis VARCHAR(255) NOT NULL, image_conducteur VARCHAR(255) NOT NULL, PRIMARY KEY(id_conducteur)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE client ADD id_client INT AUTO_INCREMENT NOT NULL, DROP id, ADD PRIMARY KEY (id_client)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE conducteur');
        $this->addSql('ALTER TABLE client MODIFY id_client INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON client');
        $this->addSql('ALTER TABLE client ADD id INT NOT NULL, DROP id_client');
    }
}
