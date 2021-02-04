<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210204172227 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '#5 add entity Adverts';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE adverts (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, categories_id INT NOT NULL, title VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, created_at DATETIME NOT NULL, modified_at DATETIME DEFAULT NULL, active TINYINT(1) NOT NULL, INDEX IDX_8C88E777A76ED395 (user_id), INDEX IDX_8C88E777A21214B7 (categories_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE adverts ADD CONSTRAINT FK_8C88E777A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE adverts ADD CONSTRAINT FK_8C88E777A21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE adverts');
    }
}
