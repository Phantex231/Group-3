<?php 
if (isset($_POST['submit'])) {
    if (isset($_POST['firstName']) && isset($_POST['lastName']) &&
        isset($_POST['age']) && isset($_POST['gender']) &&
        isset($_POST['phoneNo'])) {
        
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $phoneNo = $_POST['phoneNo'];
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "test";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Insert = "INSERT INTO paient(firstName, lastName, age, gender, phoneNo) values(?, ?, ?, ?, ?)";
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssii",$firstName, $lastName, $age, $gender, $phoneNo);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
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