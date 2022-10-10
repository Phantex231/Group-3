<?php 
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "hospital";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
	 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $mysqli = "DELETE FROM `patient` WHERE `patient`.`patientId` = '$id'";
           header('location:patient.php');  
      }  
 