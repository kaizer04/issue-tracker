-- MySQL Script generated by MySQL Workbench
-- 05/09/15 12:01:22
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema issue-tracker
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema issue-tracker
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `issue-tracker` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `issue-tracker` ;

-- -----------------------------------------------------
-- Table `issue-tracker`.`issues`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `issue-tracker`.`issues` (
  `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `title` VARCHAR(45) NOT NULL,
  `description` VARCHAR(500) NOT NULL,
  `submission_date_and_time` DATETIME NOT NULL,
  `user_id` INT NOT NULL,
  INDEX `fk_issues_users_idx` (`user_id` ASC),
  CONSTRAINT `fk_issues_users`
    FOREIGN KEY (`user_id`)
    REFERENCES `issue-tracker`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `issue-tracker`.`states`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `issue-tracker`.`states` (
  `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `state` VARCHAR(45) NULL)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `issue-tracker`.`comments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `issue-tracker`.`comments` (
  `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `visitor_name` VARCHAR(45) NOT NULL,
  `text` VARCHAR(200) NOT NULL,
  `issue_id` INT NOT NULL,
  INDEX `fk_comments_issues_idx` (`issue_id` ASC),
  CONSTRAINT `fk_comments_issues`
    FOREIGN KEY (`issue_id`)
    REFERENCES `issue-tracker`.`issues` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `issue-tracker`.`states_issues`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `issue-tracker`.`states_issues` (
  `state_id` INT NOT NULL,
  `issue_id` INT NOT NULL,
  PRIMARY KEY (`state_id`, `issue_id`),
  INDEX `fk_states_has_issues_issues1_idx` (`issue_id` ASC),
  INDEX `fk_states_has_issues_states1_idx` (`state_id` ASC),
  CONSTRAINT `fk_states_has_issues_states1`
    FOREIGN KEY (`state_id`)
    REFERENCES `issue-tracker`.`states` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_states_has_issues_issues1`
    FOREIGN KEY (`issue_id`)
    REFERENCES `issue-tracker`.`issues` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `issue-tracker`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `issue-tracker`.`users` (
  `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  UNIQUE INDEX `username_UNIQUE` (`username` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
