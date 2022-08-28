<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220712185616 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE friend ADD player2_id INT DEFAULT NULL, DROP player2');
        $this->addSql('ALTER TABLE friend ADD CONSTRAINT FK_55EEAC61D22CABCD FOREIGN KEY (player2_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_55EEAC61D22CABCD ON friend (player2_id)');
        $this->addSql('ALTER TABLE message CHANGE from_user from_users VARCHAR(255) NOT NULL, CHANGE to_user_id to_user INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE friend DROP FOREIGN KEY FK_55EEAC61D22CABCD');
        $this->addSql('DROP INDEX UNIQ_55EEAC61D22CABCD ON friend');
        $this->addSql('ALTER TABLE friend ADD player2 VARCHAR(255) NOT NULL, DROP player2_id');
        $this->addSql('ALTER TABLE message CHANGE to_user to_user_id INT NOT NULL, CHANGE from_users from_user VARCHAR(255) NOT NULL');
    }
}
