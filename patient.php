<?php   
 include "connection.php";  
 if (isset($_GET['id'])) {  
      $id=$_GET['id'];  
      $delete=mysqli_query($conn,"delete from patient where patientId='$id'");  
      if ($delete) {  
           header("location:patient.php");  
           die();  
      }  
 }  
 ?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Patient</title>
</head>
<style>
.table{
	float: right;
	width: 78vw;
	height:100%;
}
  .search--notification--profile{
  width:400px;
  /* border:1px solid black; */
  position:relative;
  left: 1200px;
}
</style>


<section class="header">
    <div class="logo"></div>
        <img src="images/hospital logo.jpg"height="60" alt=""><span><img src="images/NSW Health logo.jpg"height="65" alt=""></span>
    </div>

        <!-- <div class="notification--profile">
          <div class="picon add">
            <i class="ri-add-circle-line"></i>
        </div>   -->
          
        <!-- <div class="picon bell">
            <i class="ri-notification-2-line"></i>
        </div> -->
       
      </div>
      </div>
  </section>
  <section class="main">
      <div class="sidebar">
        <u1 class="siderbar--item">
            <li>
              <a href="index.php">
                <span class="icon icon-1"><i class="ri-dashboard-line"></i></span>
                <span class="sidebar--item">Dashboard</span>
              </a>
            </li>
            <li>
            <a href="patient.php">
              <span class="icon icon-2"><i class="ri-team-fill"></i></span>
              <span class="sidebar--item">Patients</span>
            </a>
          </li>
		   <li>
          <a href="./patientsearchbar.php">
            <span class="icon icon-3"><i class="ri-file-text-line"></i></span>
            <span class="sidebar--item">Search</span>
          </a>
        </li>
        <li>
        <a href="./fullcalendar-2.4.0/demos/default.html">
          <span class="icon icon-4"><i class="ri-calendar-check-line"></i></span>
          <span class="sidebar--item">Calendar</span>
        </a>
      </li>

      <li>
        <a href="study.php">
          <span class="icon icon-5"><i class="ri-book-mark-line"></i></span>
          <span class="sidebar--item">Studies</span>
        </a>
      </li>
       
            </u1>
            <u1 class="sidebar--bottom-items"> 
              <!-- <li>
                <a href="#">
                  <span class="icon icon-6"><i class="ri-settings-3-line"></i></span>
                  <span class="sidebar--item">Settings</span>
                </a>
              </li> -->
              
            
              <li>
                <a href="./logout.php">
                  <span class="icon icon-7"><i class="ri-logout-circle-r-line " ></i></span>
                  <span class="sidebar--item">Log out</span>
                </a>
              </li>
              
            </div>
			<div class = "table">
            <table>
              <thead>
                <tr>
                  <th>Patients ID </th>
                  <th>First name </th>
                  <th>Last name </th>
                  <th>Gender  </th>
                  <th>Age </th>
                  <th>Phone No</th>
                </tr>	
				<?php   
                include "connection.php";  
                $select=mysqli_query($conn,"select * from patient");  
                $num=mysqli_num_rows($select);  
                if ($num>0) {  
                     while($result=mysqli_fetch_assoc($select)){  
                          echo "  
                               <tr>  
                                    <td>".$result['patientId']."</td>  
                                    <td>".$result['firstName']."</td>  
                                    <td>".$result['lastName']."</td>  
                                    <td>".$result['gender']."</td>  
                                    <td>".$result['age']."</td>  
                                    <td>".$result['phoneNo']."</td>  
                                    <td>  
                                         <a href='?id=".$result['patientId']."' class='opt'>Delete</a>  
                                         <a href='patientrecordcreate.php?id=".$result['patientId']."' class='opt'>Edit/Update</a>  
                                    </td>  
                               </tr>  
                          ";  
                     }  
                }  
           ?>    
            	</table>	
					</div>
                    </div>
                  </head>
          