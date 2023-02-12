-- Create Database nprohub 
create database nprohub;

-- User Newly Creaetd Database
use nprohub;

-- Create userMaster
CREATE TABLE `nprohub`.`userMaster` (
  `pk_userId` INT NOT NULL AUTO_INCREMENT,
  `firstName` VARCHAR(255) NOT NULL,
  `lastName` VARCHAR(45) NULL,
  `password` VARCHAR(255) NOT NULL,
  `countryCode` VARCHAR(10) NULL,
  `mobile` VARCHAR(20) NULL,
  `email` VARCHAR(255) NOT NULL,
  `profileImage` VARCHAR(255) NULL,
  `isEmailVerified` TINYINT(1) NOT NULL DEFAULT 0,
  `isFaceBookSignedIn` TINYINT(1) NULL DEFAULT 0,
  `faceBookJson` MEDIUMTEXT NULL DEFAULT NULL,
  `status` TINYINT(1) NOT NULL DEFAULT 0,
  `createdAt` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` DATETIME NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pk_userId`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC));

-- Add email token column  
ALTER TABLE `nprohub`.`userMaster` 
ADD COLUMN `emailToken` VARCHAR(255) NULL DEFAULT NULL AFTER `isEmailVerified`;
ALTER TABLE `nprohub`.`userMaster` 
ADD COLUMN `emailVerificationValidTill` DATETIME NULL DEFAULT CURRENT_TIMESTAMP AFTER `emailToken`;