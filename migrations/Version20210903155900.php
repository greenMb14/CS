<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210903155900 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE dislike_user_from_blog');
        $this->addSql('ALTER TABLE unlike_annonce CHANGE id_annoce id_annonce NUMERIC(10, 0) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE dislike_user_from_blog (id INT AUTO_INCREMENT NOT NULL, id_annonce NUMERIC(10, 0) NOT NULL, detester NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE unlike_annonce CHANGE id_annonce id_annoce NUMERIC(10, 0) NOT NULL');
    }
}
