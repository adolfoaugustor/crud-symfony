<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181208231734 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, address_id INT DEFAULT NULL, name_client VARCHAR(50) NOT NULL, telephone_client VARCHAR(20) NOT NULL, email_client VARCHAR(130) NOT NULL, INDEX IDX_C7440455F5B7AF75 (address_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE animal_client (client_id INT NOT NULL, animal_id INT NOT NULL, INDEX IDX_7DB5C18919EB6921 (client_id), INDEX IDX_7DB5C1898E962C16 (animal_id), PRIMARY KEY(client_id, animal_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE address (id INT AUTO_INCREMENT NOT NULL, street_address VARCHAR(150) NOT NULL, number_address VARCHAR(20) NOT NULL, district_address VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE breed (id INT AUTO_INCREMENT NOT NULL, species_id INT DEFAULT NULL, name_breed VARCHAR(50) NOT NULL, INDEX IDX_F8AF884FB2A1D860 (species_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE species (id INT AUTO_INCREMENT NOT NULL, name_species VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE animals (id INT AUTO_INCREMENT NOT NULL, raça_id INT DEFAULT NULL, name_animal VARCHAR(50) NOT NULL, date_birth_animal DATE NOT NULL, INDEX IDX_6AAB231FE977AD0D (raça_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C7440455F5B7AF75 FOREIGN KEY (address_id) REFERENCES address (id)');
        $this->addSql('ALTER TABLE animal_client ADD CONSTRAINT FK_7DB5C18919EB6921 FOREIGN KEY (client_id) REFERENCES client (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE animal_client ADD CONSTRAINT FK_7DB5C1898E962C16 FOREIGN KEY (animal_id) REFERENCES animals (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE breed ADD CONSTRAINT FK_F8AF884FB2A1D860 FOREIGN KEY (species_id) REFERENCES species (id)');
        $this->addSql('ALTER TABLE animals ADD CONSTRAINT FK_6AAB231FE977AD0D FOREIGN KEY (raça_id) REFERENCES species (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE animal_client DROP FOREIGN KEY FK_7DB5C18919EB6921');
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C7440455F5B7AF75');
        $this->addSql('ALTER TABLE breed DROP FOREIGN KEY FK_F8AF884FB2A1D860');
        $this->addSql('ALTER TABLE animals DROP FOREIGN KEY FK_6AAB231FE977AD0D');
        $this->addSql('ALTER TABLE animal_client DROP FOREIGN KEY FK_7DB5C1898E962C16');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE animal_client');
        $this->addSql('DROP TABLE address');
        $this->addSql('DROP TABLE breed');
        $this->addSql('DROP TABLE species');
        $this->addSql('DROP TABLE animals');
    }
}
