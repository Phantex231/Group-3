-- Active: 1660497485442@@127.0.0.1@3306
CREATE TABLE patient(
  patientId int NOT NULL AUTO_INCREMENT,
  firstName varchar(30) NOT NULL,
  lastName varchar(30) NOT NULL,
  age int NOT NULL,
  gender char(1) NOT NULL,
  phoneNo bigint NOT NULL,
)