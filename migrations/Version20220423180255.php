<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220423180255 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD inventory_1 VARCHAR(255) DEFAULT NULL, ADD inventory_2 VARCHAR(255) DEFAULT NULL, ADD inventory_3 VARCHAR(255) DEFAULT NULL, ADD inventory_4 VARCHAR(255) NOT NULL, ADD inventory_5 VARCHAR(255) DEFAULT NULL, ADD inventory_6 VARCHAR(255) DEFAULT NULL, ADD inventory_7 VARCHAR(255) DEFAULT NULL, ADD inventory_8 VARCHAR(255) DEFAULT NULL, ADD inventory_9 VARCHAR(255) DEFAULT NULL, ADD inventory_10 VARCHAR(255) DEFAULT NULL, ADD inventory_11 VARCHAR(255) DEFAULT NULL, ADD inventory_12 VARCHAR(255) DEFAULT NULL, ADD inventory_13 VARCHAR(255) DEFAULT NULL, ADD inventory_14 VARCHAR(255) DEFAULT NULL, ADD inventory_15 VARCHAR(255) DEFAULT NULL, ADD inventory_16 VARCHAR(255) DEFAULT NULL, ADD inventory_17 VARCHAR(255) DEFAULT NULL, ADD inventory_18 VARCHAR(255) DEFAULT NULL, ADD inventory_19 VARCHAR(255) DEFAULT NULL, ADD inventory_20 VARCHAR(255) DEFAULT NULL, ADD inventory_21 VARCHAR(255) DEFAULT NULL, ADD inventory_22 VARCHAR(255) DEFAULT NULL, ADD inventory_23 VARCHAR(255) DEFAULT NULL, ADD inventory_24 VARCHAR(255) DEFAULT NULL, ADD inventory_25 VARCHAR(255) DEFAULT NULL, ADD inventory_26 VARCHAR(255) DEFAULT NULL, ADD inventory_27 VARCHAR(255) DEFAULT NULL, ADD inventory_28 VARCHAR(255) DEFAULT NULL, ADD inventory_29 VARCHAR(255) DEFAULT NULL, ADD inventory_30 VARCHAR(255) DEFAULT NULL, ADD inventory_31 VARCHAR(255) DEFAULT NULL, ADD inventory_32 VARCHAR(255) DEFAULT NULL, ADD inventory_33 VARCHAR(255) DEFAULT NULL, ADD inventory_34 VARCHAR(255) DEFAULT NULL, ADD inventory_35 VARCHAR(255) DEFAULT NULL, ADD inventory_36 VARCHAR(255) DEFAULT NULL, ADD armor_1 VARCHAR(255) DEFAULT NULL, ADD armor_2 VARCHAR(255) DEFAULT NULL, ADD armor_3 VARCHAR(255) DEFAULT NULL, ADD armor_4 VARCHAR(255) DEFAULT NULL, ADD inventory_special VARCHAR(255) DEFAULT NULL, ADD inventory_1_count INT NOT NULL, ADD inventory_2_count INT DEFAULT NULL, ADD inventory_3_count INT NOT NULL, ADD inventory_5_count INT DEFAULT NULL, ADD inventory_4_count INT DEFAULT NULL, ADD inventory_6_count INT DEFAULT NULL, ADD inventory_7_count INT DEFAULT NULL, ADD inventory_8_count INT DEFAULT NULL, ADD inventory_9_count INT DEFAULT NULL, ADD inventory_10_count INT DEFAULT NULL, ADD inventory_11_count INT DEFAULT NULL, ADD inventory_12_count INT DEFAULT NULL, ADD inventory_13_count INT DEFAULT NULL, ADD inventory_14_count INT DEFAULT NULL, ADD inventory_15_count INT DEFAULT NULL, ADD inventory_16_count INT DEFAULT NULL, ADD inventory_17_count INT DEFAULT NULL, ADD inventory_18_count INT DEFAULT NULL, ADD inventory_19_count INT DEFAULT NULL, ADD inventory_20_count INT DEFAULT NULL, ADD inventory_21_count INT DEFAULT NULL, ADD inventory_22_count INT DEFAULT NULL, ADD inventory_23_count INT DEFAULT NULL, ADD inventory_24_count INT DEFAULT NULL, ADD inventory_25_count INT DEFAULT NULL, ADD inventory_26_count INT DEFAULT NULL, ADD inventory_27_count INT DEFAULT NULL, ADD inventory_28_count INT DEFAULT NULL, ADD inventory_29_count INT DEFAULT NULL, ADD inventory_30_count INT DEFAULT NULL, ADD inventory_31_count INT DEFAULT NULL, ADD inventory_32_count INT DEFAULT NULL, ADD inventory_33_count INT DEFAULT NULL, ADD inventory_34_count INT DEFAULT NULL, ADD inventory_35_count INT DEFAULT NULL, ADD inventory_36_count INT NOT NULL, ADD inventory_special_count INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP inventory_1, DROP inventory_2, DROP inventory_3, DROP inventory_4, DROP inventory_5, DROP inventory_6, DROP inventory_7, DROP inventory_8, DROP inventory_9, DROP inventory_10, DROP inventory_11, DROP inventory_12, DROP inventory_13, DROP inventory_14, DROP inventory_15, DROP inventory_16, DROP inventory_17, DROP inventory_18, DROP inventory_19, DROP inventory_20, DROP inventory_21, DROP inventory_22, DROP inventory_23, DROP inventory_24, DROP inventory_25, DROP inventory_26, DROP inventory_27, DROP inventory_28, DROP inventory_29, DROP inventory_30, DROP inventory_31, DROP inventory_32, DROP inventory_33, DROP inventory_34, DROP inventory_35, DROP inventory_36, DROP armor_1, DROP armor_2, DROP armor_3, DROP armor_4, DROP inventory_special, DROP inventory_1_count, DROP inventory_2_count, DROP inventory_3_count, DROP inventory_5_count, DROP inventory_4_count, DROP inventory_6_count, DROP inventory_7_count, DROP inventory_8_count, DROP inventory_9_count, DROP inventory_10_count, DROP inventory_11_count, DROP inventory_12_count, DROP inventory_13_count, DROP inventory_14_count, DROP inventory_15_count, DROP inventory_16_count, DROP inventory_17_count, DROP inventory_18_count, DROP inventory_19_count, DROP inventory_20_count, DROP inventory_21_count, DROP inventory_22_count, DROP inventory_23_count, DROP inventory_24_count, DROP inventory_25_count, DROP inventory_26_count, DROP inventory_27_count, DROP inventory_28_count, DROP inventory_29_count, DROP inventory_30_count, DROP inventory_31_count, DROP inventory_32_count, DROP inventory_33_count, DROP inventory_34_count, DROP inventory_35_count, DROP inventory_36_count, DROP inventory_special_count');
    }
}
