<?php 
if (isset($_POST['submit'])) {
	
    if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['bloodGroup']) &&
        isset($_POST['age']) && isset($_POST['gender']) &&
        isset($_POST['phoneNo'])) {
       
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
		$bloodGroup =$_POST['bloodGroup'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $phoneNo = $_POST['phoneNo'];
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "hospital";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
           $sql = "INSERT INTO patient VALUES (null,'$firstName','$lastName','$bloodGroup' ,'$age', '$gender', '$phoneNo')";

			if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
			} 
			else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			}

$conn->close();
          
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>