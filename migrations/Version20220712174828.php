<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220712174828 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_55EEAC61D22CABCD ON friend');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_55EEAC61D22CABCD ON friend (player2_id)');
        $this->addSql('ALTER TABLE message CHANGE to_user_id to_user_id INT DEFAULT NULL, CHANGE text text LONGTEXT DEFAULT NULL, CHANGE create_at create_at DATETIME DEFAULT NULL, CHANGE is_read is_read INT DEFAULT NULL, CHANGE from_user from_user VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_55EEAC61D22CABCD ON friend');
        $this->addSql('CREATE INDEX UNIQ_55EEAC61D22CABCD ON friend (player2_id)');
        $this->addSql('ALTER TABLE message CHANGE to_user_id to_user_id INT NOT NULL, CHANGE text text LONGTEXT NOT NULL, CHANGE create_at create_at DATETIME NOT NULL, CHANGE is_read is_read INT NOT NULL, CHANGE from_user from_user VARCHAR(255) NOT NULL');
    }
}
