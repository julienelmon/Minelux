<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220712175029 extends AbstractMigration
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
        $this->addSql('DROP INDEX UNIQ_B6BD307F29F6EE60 ON message');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B6BD307F29F6EE60 ON message (to_user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_55EEAC61D22CABCD ON friend');
        $this->addSql('CREATE INDEX UNIQ_55EEAC61D22CABCD ON friend (player2_id)');
        $this->addSql('DROP INDEX UNIQ_B6BD307F29F6EE60 ON message');
        $this->addSql('CREATE INDEX UNIQ_B6BD307F29F6EE60 ON message (to_user_id)');
    }
}
