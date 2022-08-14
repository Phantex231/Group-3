CREATE SCHEMA `hospital` ;

CREATE TABLE `health`.`clinical_trial_staff` (
  `Staff_ID` INT NOT NULL,
  `Title` VARCHAR(45) NULL,
  `Responsible_project` VARCHAR(45) NULL,
  `Responsible_patient` VARCHAR(45) NULL,
  `Summary_test_result` VARCHAR(45) NULL,
  `Work_schedule` VARCHAR(45) NULL,
  `Drug_distribution_record` VARCHAR(45) NULL,
  `Drug_storage_record` VARCHAR(45) NULL,
  `Equipment_usage_records` VARCHAR(45) NULL,
  `Patient_cases` VARCHAR(45) NULL,
  `Test_application_form` VARCHAR(45) NULL,
  `Test_result_report` VARCHAR(45) NULL,
  PRIMARY KEY (`Staff_ID`));

CREATE TABLE `health`.`drugs` (
  `Drug_ID` INT NOT NULL,
  `Action_1` VARCHAR(45) NULL,
  `Delivery_records` VARCHAR(45) NULL,
  `Storage_lisT` VARCHAR(45) NULL,
  `Reflections` VARCHAR(45) NULL,
  `drugscol` VARCHAR(45) NULL,
  PRIMARY KEY (`Drug_ID`));

CREATE TABLE `health`.`nurse` (
  `Nurse_ID` INT NOT NULL,
  `LastName` VARCHAR(45) NULL,
  `FirstName` VARCHAR(45) NULL,
  `Address_1` VARCHAR(45) NULL,
  `City` VARCHAR(45) NULL,
  `Repatients_ID` INT NULL,
  `Scheduletime` VARCHAR(45) NULL,
  `Equipment_records` VARCHAR(45) NULL,
  `Staff_ID` INT NULL,
  PRIMARY KEY (`Nurse_ID`));

CREATE TABLE `health`.`patient` (
  `Patient_ID` INT NOT NULL,
  `SurName` VARCHAR(45) NULL,
  `LastName` VARCHAR(45) NULL,
  `Age` INT NULL,
  `Address_1` VARCHAR(45) NULL,
  `Household_Registration` VARCHAR(45) NULL,
  `PhoneNo` INT NULL,
  `Emergency_contact_PhoneNo` INT NULL,
  `Allergy_history` VARCHAR(45) NULL,
  `Medical_treatment_records` VARCHAR(45) NULL,
  `Classification` VARCHAR(45) NULL,
  `Treatment_process` VARCHAR(45) NULL,
  `Medication_response` VARCHAR(45) NULL,
  `Drug_efficacy_feedback_form` VARCHAR(45) NULL,
  `Treatment_staff` VARCHAR(45) NULL,
  PRIMARY KEY (`Patient_ID`));
