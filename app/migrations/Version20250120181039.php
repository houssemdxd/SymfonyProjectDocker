<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250120181039 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE time (id INT AUTO_INCREMENT NOT NULL, room_id INT DEFAULT NULL, timeround DATETIME DEFAULT NULL, lie TINYINT(1) DEFAULT NULL, INDEX IDX_6F94984554177093 (room_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE time ADD CONSTRAINT FK_6F94984554177093 FOREIGN KEY (room_id) REFERENCES room (id)');
        $this->addSql('ALTER TABLE player ADD winner VARCHAR(255) DEFAULT NULL, ADD `rank` VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE room ADD ready TINYINT(1) DEFAULT NULL, ADD goal VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE round DROP goal');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE time DROP FOREIGN KEY FK_6F94984554177093');
        $this->addSql('DROP TABLE time');
        $this->addSql('ALTER TABLE player DROP winner, DROP `rank`');
        $this->addSql('ALTER TABLE room DROP ready, DROP goal');
        $this->addSql('ALTER TABLE round ADD goal VARCHAR(255) NOT NULL');
    }
}
