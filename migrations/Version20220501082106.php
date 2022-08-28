<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220501082106 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user CHANGE pseudo pseudo VARCHAR(255) DEFAULT NULL, CHANGE inventory_4 inventory_4 VARCHAR(255) DEFAULT NULL, CHANGE inventory_1_count inventory_1_count INT DEFAULT NULL, CHANGE inventory_3_count inventory_3_count INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user CHANGE pseudo pseudo VARCHAR(255) NOT NULL, CHANGE inventory_4 inventory_4 VARCHAR(255) NOT NULL, CHANGE inventory_1_count inventory_1_count INT NOT NULL, CHANGE inventory_3_count inventory_3_count INT NOT NULL');
    }
}
