<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220712185242 extends AbstractMigration
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
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307F29F6EE60');
        $this->addSql('DROP INDEX IDX_B6BD307F29F6EE60 ON message');
        $this->addSql('ALTER TABLE message CHANGE from_user from_users VARCHAR(255) NOT NULL, CHANGE to_user_id to_user INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_55EEAC61D22CABCD ON friend');
        $this->addSql('CREATE INDEX UNIQ_55EEAC61D22CABCD ON friend (player2_id)');
        $this->addSql('ALTER TABLE message CHANGE to_user to_user_id INT NOT NULL, CHANGE from_users from_user VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307F29F6EE60 FOREIGN KEY (to_user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_B6BD307F29F6EE60 ON message (to_user_id)');
    }
}
