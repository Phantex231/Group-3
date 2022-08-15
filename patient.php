<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Dashboard</title>
</head>



<body>
  <section class="header">
    <div class="logo"></div>
        <img src="images/hospital logo.jpg"height="60" alt=""><span><img src="images/NSW Health logo.jpg"height="65" alt=""></span>
    </div>
      <div class="search--notification--profile">
        <div class="search">
          <input type="text" placeholder="Search">
          <button><i class="ri-search-line"></i></button>
        </div> 
        <div class="notification--profile">
          <div class="picon add">
            <i class="ri-add-circle-line"></i>
        </div>  
          
        <div class="picon bell">
            <i class="ri-notification-2-line"></i>
        </div>
       
      </div>
      </div>
  </section>
  <section class="main">
      <div class="sidebar">
        <u1 class="siderbar--item">
            <li>
              <a href="index.html">
                <span class="icon icon-1"><i class="ri-dashboard-line"></i></span>
                <span class="sidebar--item">Dashborad</span>
              </a>
            </li>
            <li>
            <a href="patient.php">
              <span class="icon icon-2"><i class="ri-team-fill"></i></span>
              <span class="sidebar--item">Patients</span>
            </a>
          </li>
          <li>
          <a href="#">
            <span class="icon icon-3"><i class="ri-file-text-line"></i></span>
            <span class="sidebar--item">Document</span>
          </a>
        </li>
        <li>
        <a href="#">
          <span class="icon icon-4"><i class="ri-calendar-check-line"></i></span>
          <span class="sidebar--item">Calendar</span>
        </a>
      </li>

      <li>
        <a href="#">
          <span class="icon icon-5"><i class="ri-book-mark-line"></i></span>
          <span class="sidebar--item">Studies</span>
        </a>
      </li>
       
            </u1>
            <u1 class="sidebar--bottom-items"> 
              <li>
                <a href="#">
                  <span class="icon icon-6"><i class="ri-settings-3-line"></i></span>
                  <span class="sidebar--item">Settings</span>
                </a>
              </li>
              
            
              <li>
                <a href="#">
                  <span class="icon icon-7"><i class="ri-logout-circle-r-line " ></i></span>
                  <span class="sidebar--item">Log out</span>
                </a>
              </li>
              
            </div>
			<a href="form.html"><button></a>
            <table>
              <thead>
			  
                <tr>
                  <th>Patients ID </th>
                  <th>First name </th>
                  <th>Last name </th>
                  <th>Age  </th>
                  <th>Gender </th>
                  <th>Phone No</th>
                </tr>
			
					<?php
						$conn = mysqli_connect("localhost","root","","hospital");
						$sql = "SELECT * FROM patient";
						$result = $conn -> query($sql);
						
						if($result->num_rows >0){
							while($row = $result-> fetch_assoc()){
								echo"<tr><td>".$row["patientId"]. "</td><td>".$row["firstName"]. "</td><td>".$row["lastName"]. "</td><td>".$row["age"]. "</td><td>".$row["gender"]. "</td><td>".$row["phoneNo"]. "</td></tr>";
							}
						}else{
								echo"No results";
							}
							$conn->close();
							
					?>
			</table>
            </div>
 </body>
          