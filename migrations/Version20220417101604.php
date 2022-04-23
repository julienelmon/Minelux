<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220417101604 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE box DROP firstname');
        $this->addSql('ALTER TABLE user ADD role VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE vote DROP firstname');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE box ADD firstname VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user DROP role');
        $this->addSql('ALTER TABLE vote ADD firstname VARCHAR(255) NOT NULL');
    }
}
