<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210318142040 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE content (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, text TEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE drink_info (id INT AUTO_INCREMENT NOT NULL, liter INT NOT NULL, alcohol INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE drink_info_drink_type (drink_info_id INT NOT NULL, drink_type_id INT NOT NULL, INDEX IDX_F52F0E257F2F95CA (drink_info_id), INDEX IDX_F52F0E25E7E8D8A1 (drink_type_id), PRIMARY KEY(drink_info_id, drink_type_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE drink_type (id INT AUTO_INCREMENT NOT NULL, type_category_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_841484B1595F4A73 (type_category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE food_info (id INT AUTO_INCREMENT NOT NULL, fat INT NOT NULL, energy INT NOT NULL, glucid INT NOT NULL, protein INT NOT NULL, sugar INT NOT NULL, salt INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, product_type_id INT NOT NULL, food_info_id INT DEFAULT NULL, drink_info_id INT DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, price INT DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, INDEX IDX_D34A04AD14959723 (product_type_id), UNIQUE INDEX UNIQ_D34A04AD12141DC0 (food_info_id), UNIQUE INDEX UNIQ_D34A04AD7F2F95CA (drink_info_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_category (id INT AUTO_INCREMENT NOT NULL, product_type_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_CBB33E3D14959723 (product_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE drink_info_drink_type ADD CONSTRAINT FK_F52F0E257F2F95CA FOREIGN KEY (drink_info_id) REFERENCES drink_info (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE drink_info_drink_type ADD CONSTRAINT FK_F52F0E25E7E8D8A1 FOREIGN KEY (drink_type_id) REFERENCES drink_type (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE drink_type ADD CONSTRAINT FK_841484B1595F4A73 FOREIGN KEY (type_category_id) REFERENCES type_category (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD14959723 FOREIGN KEY (product_type_id) REFERENCES product_type (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD12141DC0 FOREIGN KEY (food_info_id) REFERENCES food_info (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD7F2F95CA FOREIGN KEY (drink_info_id) REFERENCES drink_info (id)');
        $this->addSql('ALTER TABLE type_category ADD CONSTRAINT FK_CBB33E3D14959723 FOREIGN KEY (product_type_id) REFERENCES product_type (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE drink_info_drink_type DROP FOREIGN KEY FK_F52F0E257F2F95CA');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD7F2F95CA');
        $this->addSql('ALTER TABLE drink_info_drink_type DROP FOREIGN KEY FK_F52F0E25E7E8D8A1');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD12141DC0');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD14959723');
        $this->addSql('ALTER TABLE type_category DROP FOREIGN KEY FK_CBB33E3D14959723');
        $this->addSql('ALTER TABLE drink_type DROP FOREIGN KEY FK_841484B1595F4A73');
        $this->addSql('DROP TABLE content');
        $this->addSql('DROP TABLE drink_info');
        $this->addSql('DROP TABLE drink_info_drink_type');
        $this->addSql('DROP TABLE drink_type');
        $this->addSql('DROP TABLE food_info');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE product_type');
        $this->addSql('DROP TABLE type_category');
    }
}
