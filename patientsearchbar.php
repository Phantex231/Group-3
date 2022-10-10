<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Search Patients</title>
    <link rel="stylesheet" href="fullcalendar-2.4.0\layui\css\layui.css">
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
<style>
.table{
	float: right;
	width: 83vw;
	height:100%;
}
</style>



<body>
  <section class="header">
    <div class="logo"></div>
        <img src="images/hospital logo.jpg"height="60" alt=""><span><img src="images/NSW Health logo.jpg"height="65" alt=""></span>
    </div>
      
 
        
        <!-- <div class="notification--profile">
          <div class="picon add">
            <ul>
              <li class="nr_li li_main">
                <a href="" id="icon"><i class="ri-add-circle-line"></i></a>
            </li> -->
            
           <!-- <div class="dd_menu" >
              <div class="dd_right">
            <ul>
              <li>
                <a href="./patientrecordcreate.html">New Patients </a>
              </li>
              <li>
                <a href="./patienttreatment.html">Add treatment

                </a>
              </li>
                
                <li>
                  <a href="./patientobservation.html">Create patient observations</a>
                  
                </li>
              <li>
                <a href="./patientstudycreate.html">Create a study</a>
              </li>
              <li>
                <a href="./Rating.html">Feedback</a>
              </li>
            </ul>
          </div> -->
        <!-- </div> -->
       
        </div>  
        
             
        
           
        <!-- <div class="picon bell">
            <i class="ri-notification-2-line"></i>
        </div>
        -->
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
              </li>
               -->
            
              <li>
                <a href="./logout.php">
                  <span class="icon icon-7"><i class="ri-logout-circle-r-line " ></i></span>
                  <span class="sidebar--item">Log out</span>
                </a>
              </li>
              
                
          </div>
		  <div class="container my-5">
			<form method="post">
				<input type="text" placeholder="Search"name="search">
				<input type="submit" value="Search"name="submit">
			</form>
			<div class="container my-5">
			<table class="table">
			<?php
			if(isset($_POST['submit']) ){
			$search=$_POST['search'];
			
			$sql = "SELECT * FROM 
			patient WHERE 
			patientId like '%$search%' 
			or firstName like '%$search%' 
			or lastName like '%$search%'";
			$result = mysqli_query($conn,$sql);
			if($result){
				if(mysqli_num_rows($result)>0){
					echo '<thread>
						<tr>
						<th>Patients Id</th>
						<th>First Name</th>
						<th>Last Name</th>
						';
						while($row = mysqli_fetch_assoc($result)){
						echo '<tbody>
						<tr>
							<td><a href="searchData.php?data='.$row['patientId'].'">'.$row['patientId'].'</a></td>
							<td>'.$row['firstName'].'</td>
							<td>'.$row['lastName'].'</td>
						</tr>
						</tbody>';
						}
				}else{
				echo '<h2>Data Not found</h2>';
				}
			}
			}
			?>
</body>
</html>






























