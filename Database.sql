CREATE SCHEMA `hospital` ;

CREATE TABLE `hospital`.`patient` (
  `patientId` INT NOT NULL,
  `firstName` VARCHAR(45) NULL,
  `givenName` VARCHAR(45) NULL,
  `DOB` VARCHAR(45) NULL,
  `gender` VARCHAR(45) NULL,
  `bloodGroup` VARCHAR(45) NULL,
  `phoneNumber` VARCHAR(45) NULL,
  PRIMARY KEY (`patientId`));

CREATE TABLE `hospital`.`patient record` (
  `patientId` INT NOT NULL,
  `familyName` VARCHAR(45) NULL,
  `givenName` VARCHAR(45) NULL,
  `DOB` VARCHAR(45) NULL,
  `gender` VARCHAR(45) NULL,
  `bloodGroup` VARCHAR(45) NULL,
  `phoneNumber` VARCHAR(45) NULL,
  `dateOfFirstTreatment` VARCHAR(45) NULL,
  `staus` VARCHAR(45) NULL,
  PRIMARY KEY (`patientId`));

CREATE TABLE `hospital`.`study` (
  `patientId` INT NOT NULL,
  `courseName` VARCHAR(45) NULL,
  `type` VARCHAR(45) NULL,
  `startDate` VARCHAR(45) NULL,
  `studyRoom` VARCHAR(45) NULL,
  `status` VARCHAR(45) NULL,
  `note` VARCHAR(45) NULL,
  PRIMARY KEY (`patientId`));

CREATE TABLE `hospital`.`enroll trial` (
  `courseName` INT NOT NULL,
  `date` VARCHAR(45) NULL,
  `time` VARCHAR(45) NULL,
  `roomNumber` VARCHAR(45) NULL,
  `personNumber` VARCHAR(45) NULL,
  `tutor` VARCHAR(45) NULL,
  PRIMARY KEY (`courseName`));

CREATE TABLE `hospital`.`observation` (
  `patienrId` INT NOT NULL,
  PRIMARY KEY (`patienrId`));
