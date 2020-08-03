-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema SENA
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema SENA
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `SENA` DEFAULT CHARACTER SET utf8 ;
USE `SENA` ;

-- -----------------------------------------------------
-- Table `SENA`.`aprendiz`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SENA`.`aprendiz` (
  `idAprendiz` INT NOT NULL,
  `Nom1Aprendiz` VARCHAR(25) NOT NULL,
  `Nom2Aprendiz` VARCHAR(25) NOT NULL,
  `Ape1Aprendiz` VARCHAR(25) NOT NULL,
  `Ape2Aprendiz` VARCHAR(25) NOT NULL,
  `TeleAprendiz` VARCHAR(25) NOT NULL,
  `EmailAprendiz` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`idAprendiz`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SENA`.`ambiente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SENA`.`ambiente` (
  `idAmbiente` INT NOT NULL,
  `NomAmbiente` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idAmbiente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SENA`.`competencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SENA`.`competencia` (
  `idCompetencia` INT NOT NULL,
  `NomCompetencia` VARCHAR(45) NOT NULL,
  `idPrograma` INT NOT NULL,
  PRIMARY KEY (`idCompetencia`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SENA`.`inscribe`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SENA`.`inscribe` (
  `idAprendiz` INT NOT NULL,
  `idCompetencia` INT NOT NULL,
  PRIMARY KEY (`idAprendiz`, `idCompetencia`),
  INDEX `fk_MATRICULAAPRENDIZCOMPETENCIA_COMPETENCA1_idx` (`idCompetencia` ASC),
  CONSTRAINT `fk_MATRICULAAPRENDIZCOMPETENCIA_APRENDIZ1`
    FOREIGN KEY (`idAprendiz`)
    REFERENCES `SENA`.`aprendiz` (`idAprendiz`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_MATRICULAAPRENDIZCOMPETENCIA_COMPETENCA1`
    FOREIGN KEY (`idCompetencia`)
    REFERENCES `SENA`.`competencia` (`idCompetencia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SENA`.`franja`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SENA`.`franja` (
  `idFranja` INT NOT NULL,
  `Horainicial` TIME NOT NULL,
  `Horafinal` TIME NOT NULL,
  PRIMARY KEY (`idFranja`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SENA`.`programa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SENA`.`programa` (
  `idPrograma` INT NOT NULL,
  `NomPrograma` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idPrograma`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SENA`.`ficha`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SENA`.`ficha` (
  `idficha` INT NOT NULL,
  `fechadeinicio` VARCHAR(45) NOT NULL,
  `idPrograma` INT NOT NULL,
  PRIMARY KEY (`idficha`),
  INDEX `fk_ficha_programa1_idx` (`idPrograma` ASC),
  CONSTRAINT `fk_ficha_programa1`
    FOREIGN KEY (`idPrograma`)
    REFERENCES `SENA`.`programa` (`idPrograma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SENA`.`instructor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SENA`.`instructor` (
  `idInstrutor` INT NOT NULL,
  `Nom1Instructor` VARCHAR(45) NOT NULL,
  `Nom2Instructor` VARCHAR(45) NOT NULL,
  `Ape1Instructor` VARCHAR(45) NOT NULL,
  `Ape2Instructor` VARCHAR(45) NOT NULL,
  `EmailInstructor` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idInstrutor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SENA`.`horarioficha`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SENA`.`horarioficha` (
  `idHorarioficha` INT NOT NULL,
  `FechaInicial` DATE NOT NULL,
  `idInstructor` INT NOT NULL,
  `idCompetencia` INT NOT NULL,
  `idAmbiente` INT NOT NULL,
  `idFranja` INT NOT NULL,
  `idficha` INT NOT NULL,
  `diadelasemana` VARCHAR(45) NOT NULL,
  `trimestre` VARCHAR(45) NOT NULL,
  `aniohorario` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idHorarioficha`, `FechaInicial`, `idInstructor`, `idCompetencia`, `idAmbiente`, `idFranja`, `idficha`, `diadelasemana`, `trimestre`, `aniohorario`),
  INDEX `fk_HORARIOFICHA_FRANJA1_idx` (`idFranja` ASC),
  INDEX `fk_HORARIOFICHA_AMBIENTE1_idx` (`idAmbiente` ASC),
  INDEX `fk_HORARIOFICHA_COMPETENCA1_idx` (`idCompetencia` ASC),
  INDEX `fk_HORARIOFICHA_FICHA1_idx` (`idficha` ASC),
  INDEX `fk_HORARIOFICHA_INSTRUCTOR1_idx` (`idInstructor` ASC),
  CONSTRAINT `fk_HORARIOFICHA_FRANJA1`
    FOREIGN KEY (`idFranja`)
    REFERENCES `SENA`.`franja` (`idFranja`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_HORARIOFICHA_AMBIENTE1`
    FOREIGN KEY (`idAmbiente`)
    REFERENCES `SENA`.`ambiente` (`idAmbiente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_HORARIOFICHA_COMPETENCA1`
    FOREIGN KEY (`idCompetencia`)
    REFERENCES `SENA`.`competencia` (`idCompetencia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_HORARIOFICHA_FICHA1`
    FOREIGN KEY (`idficha`)
    REFERENCES `SENA`.`ficha` (`idficha`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_HORARIOFICHA_INSTRUCTOR1`
    FOREIGN KEY (`idInstructor`)
    REFERENCES `SENA`.`instructor` (`idInstrutor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SENA`.`dicta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SENA`.`dicta` (
  `idInstructor` INT NOT NULL,
  `Idcompetencia` INT NOT NULL,
  PRIMARY KEY (`idInstructor`, `Idcompetencia`),
  INDEX `fk_INSTRUCTOR-COMPETENCIA_COMPETENCA1_idx` (`Idcompetencia` ASC),
  CONSTRAINT `fk_INSTRUCTOR-COMPETENCIA_INSTRUCTOR1`
    FOREIGN KEY (`idInstructor`)
    REFERENCES `SENA`.`instructor` (`idInstrutor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_INSTRUCTOR-COMPETENCIA_COMPETENCA1`
    FOREIGN KEY (`Idcompetencia`)
    REFERENCES `SENA`.`competencia` (`idCompetencia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SENA`.`programa-competencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SENA`.`programa-competencia` (
  `idPrograma` INT NOT NULL,
  `idCompetencia` INT NOT NULL,
  PRIMARY KEY (`idPrograma`, `idCompetencia`),
  INDEX `fk_PROGRAMA-COMPETENCIA_COMPETENCA1_idx` (`idCompetencia` ASC),
  CONSTRAINT `fk_PROGRAMA-COMPETENCIA_PROGRAMA1`
    FOREIGN KEY (`idPrograma`)
    REFERENCES `SENA`.`programa` (`idPrograma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PROGRAMA-COMPETENCIA_COMPETENCA1`
    FOREIGN KEY (`idCompetencia`)
    REFERENCES `SENA`.`competencia` (`idCompetencia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SENA`.`resultado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SENA`.`resultado` (
  `idResultado` INT NOT NULL,
  `NombreResultado` VARCHAR(45) NOT NULL,
  `idCompetencia` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idResultado`),
  INDEX `fk_RESULTADO_COMPETENCA1_idx` (`idCompetencia` ASC),
  CONSTRAINT `fk_RESULTADO_COMPETENCA1`
    FOREIGN KEY (`idCompetencia`)
    REFERENCES `SENA`.`competencia` (`idCompetencia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SENA`.`horarioInstructor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SENA`.`horarioInstructor` (
  `idHorario` INT NOT NULL,
  `FechaInicial` DATE NOT NULL,
  `idficha` INT NOT NULL,
  `idInstructor` INT NOT NULL,
  `idCompetencia` INT NOT NULL,
  `idAmbiente` INT NOT NULL,
  `idFranja` INT NOT NULL,
  `diadelasemana` VARCHAR(45) NOT NULL,
  `Trimestre` VARCHAR(45) NOT NULL,
  `aniohorario` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idHorario`, `idficha`, `FechaInicial`, `idInstructor`, `idCompetencia`, `idAmbiente`, `idFranja`, `diadelasemana`, `Trimestre`, `aniohorario`),
  INDEX `fk_HORARIOINSTRUCTOR_FICHA1_idx` (`idficha` ASC),
  INDEX `fk_HORARIOINSTRUCTOR_INSTRUCTOR1_idx` (`idInstructor` ASC),
  INDEX `fk_HORARIOINSTRUCTOR_COMPETENCIA1_idx` (`idCompetencia` ASC),
  INDEX `fk_HORARIOINSTRUCTOR_AMBIENTE1_idx` (`idAmbiente` ASC),
  INDEX `fk_HORARIOINSTRUCTOR_FRANJA1_idx` (`idFranja` ASC),
  CONSTRAINT `fk_HORARIOINSTRUCTOR_FICHA1`
    FOREIGN KEY (`idficha`)
    REFERENCES `SENA`.`ficha` (`idficha`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_HORARIOINSTRUCTOR_INSTRUCTOR1`
    FOREIGN KEY (`idInstructor`)
    REFERENCES `SENA`.`instructor` (`idInstrutor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_HORARIOINSTRUCTOR_COMPETENCIA1`
    FOREIGN KEY (`idCompetencia`)
    REFERENCES `SENA`.`competencia` (`idCompetencia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_HORARIOINSTRUCTOR_AMBIENTE1`
    FOREIGN KEY (`idAmbiente`)
    REFERENCES `SENA`.`ambiente` (`idAmbiente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_HORARIOINSTRUCTOR_FRANJA1`
    FOREIGN KEY (`idFranja`)
    REFERENCES `SENA`.`franja` (`idFranja`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SENA`.`informeAcademicoFinal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SENA`.`informeAcademicoFinal` (
  `idinformeAcademico` INT NOT NULL,
  `IdAprendiz` INT NOT NULL,
  `IdCompetencia` INT NOT NULL,
  `idInstrutor` INT NOT NULL,
  `IdResultado` INT NOT NULL,
  `fechainformefinal` DATE NOT NULL,
  `Trimestre` INT NOT NULL,
  `fallasinjustificadas` INT NOT NULL,
  `fallasjustificadas` INT NOT NULL,
  `nota1` INT NOT NULL,
  `nota2` INT NOT NULL,
  `nota3` INT NOT NULL,
  `promedio` INT NOT NULL,
  `estado` TINYINT(1) NOT NULL,
  PRIMARY KEY (`idinformeAcademico`),
  INDEX `fk_informeAcademicoFinal_COMPETENCIA2_idx` (`IdCompetencia` ASC),
  INDEX `fk_informeAcademicoFinal_RESULTADO1_idx` (`IdResultado` ASC),
  INDEX `fk_informeAcademicoFinal_APRENDIZ1_idx` (`IdAprendiz` ASC),
  INDEX `fk_informeAcademicoFinal_INSTRUCTOR1_idx` (`idInstrutor` ASC),
  CONSTRAINT `fk_informeAcademicoFinal_COMPETENCIA2`
    FOREIGN KEY (`IdCompetencia`)
    REFERENCES `SENA`.`competencia` (`idCompetencia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_informeAcademicoFinal_RESULTADO1`
    FOREIGN KEY (`IdResultado`)
    REFERENCES `SENA`.`resultado` (`idResultado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_informeAcademicoFinal_APRENDIZ1`
    FOREIGN KEY (`IdAprendiz`)
    REFERENCES `SENA`.`aprendiz` (`idAprendiz`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_informeAcademicoFinal_INSTRUCTOR1`
    FOREIGN KEY (`idInstrutor`)
    REFERENCES `SENA`.`instructor` (`idInstrutor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `SENA` ;

-- -----------------------------------------------------
-- Placeholder table for view `SENA`.`view1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SENA`.`view1` (`id` INT);

-- -----------------------------------------------------
-- View `SENA`.`view1`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SENA`.`view1`;
USE `SENA`;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
