-- MySQL Script generated by MySQL Workbench
-- Fri May 22 17:11:36 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema desquinela_sqlserver
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema desquinela_sqlserver
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `desquinela_sqlserver` DEFAULT CHARACTER SET utf8 ;
USE `desquinela_sqlserver` ;

-- -----------------------------------------------------
-- Table `desquinela_sqlserver`.`dono`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `desquinela_sqlserver`.`dono` (
  `idDono` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(20) NULL,
  `email` VARCHAR(20) NULL,
  `telefone` VARCHAR(15) NULL,
  `senha` VARCHAR(8) NULL,
  PRIMARY KEY (`idDono`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `desquinela_sqlserver`.`animal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `desquinela_sqlserver`.`animal` (
  `idAnimal` INT NOT NULL AUTO_INCREMENT,
  `foto` VARCHAR(20) NULL,
  `nome` VARCHAR(20) NULL,
  `idade` VARCHAR(2) NULL,
  `info_extra` VARCHAR(45) NULL,
  `cidade` VARCHAR(45) NULL,
  `estado` VARCHAR(45) NULL,
  `status` VARCHAR(15) NULL,
  PRIMARY KEY (`idAnimal`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;