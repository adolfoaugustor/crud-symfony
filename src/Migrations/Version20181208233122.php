<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181208233122 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE animals DROP FOREIGN KEY FK_6AAB231FE977AD0D');
        $this->addSql('DROP INDEX IDX_6AAB231FE977AD0D ON animals');
        $this->addSql('ALTER TABLE animals CHANGE raça_id breed_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE animals ADD CONSTRAINT FK_6AAB231FA8B4A30F FOREIGN KEY (breed_id) REFERENCES breed (id)');
        $this->addSql('CREATE INDEX IDX_6AAB231FA8B4A30F ON animals (breed_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE animals DROP FOREIGN KEY FK_6AAB231FA8B4A30F');
        $this->addSql('DROP INDEX IDX_6AAB231FA8B4A30F ON animals');
        $this->addSql('ALTER TABLE animals CHANGE breed_id raça_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE animals ADD CONSTRAINT FK_6AAB231FE977AD0D FOREIGN KEY (raça_id) REFERENCES species (id)');
        $this->addSql('CREATE INDEX IDX_6AAB231FE977AD0D ON animals (raça_id)');
    }
}
