<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190320113757 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE logboek DROP FOREIGN KEY FK_13847B9AFE9F2F8D');
        $this->addSql('ALTER TABLE logboek ADD kubs VARCHAR(255) NOT NULL, ADD laadplaats VARCHAR(255) NOT NULL, ADD vertrektijd TIME NOT NULL, ADD bestemming VARCHAR(255) NOT NULL, ADD evenement VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE logboek ADD CONSTRAINT FK_13847B9AFE9F2F8D FOREIGN KEY (truck_id_id) REFERENCES fos_user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE logboek DROP FOREIGN KEY FK_13847B9AFE9F2F8D');
        $this->addSql('ALTER TABLE logboek DROP kubs, DROP laadplaats, DROP vertrektijd, DROP bestemming, DROP evenement');
        $this->addSql('ALTER TABLE logboek ADD CONSTRAINT FK_13847B9AFE9F2F8D FOREIGN KEY (truck_id_id) REFERENCES truck (id)');
    }
}
