<?php

declare(strict_types=1);

/*
 * (c) 2021 Michael Joyce <mjoyce@sfu.ca>
 * This source file is subject to the GPL v2, bundled
 * with this source code in the file LICENSE.
 */

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210127212325 extends AbstractMigration {
    public function getDescription() : string {
        return '';
    }

    public function up(Schema $schema) : void {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book ADD uniform_title LONGTEXT DEFAULT NULL, ADD author VARCHAR(160) DEFAULT NULL, ADD publisher VARCHAR(160) DEFAULT NULL, CHANGE variants variant_titles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\'');
    }

    public function down(Schema $schema) : void {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book DROP uniform_title, DROP author, DROP publisher, CHANGE variant_titles variants LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\'');
    }
}
