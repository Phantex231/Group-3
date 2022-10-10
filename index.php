<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($conn);

?>
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
  /* .notification--profile .dd_menu{
    display:none;
  } */
  /* #icon:hover  .dd_menu{
    display: block;

} */
.search--notification--profile{
  width:400px;
  /* border:1px solid black; */
  position:relative;
  left: 1200px;
}
.cards{
  /* border:1px solid black; */

}
.card-1{
  width:500px;
  height:250px;
  position:relative;
  top:50px;
  left:50px;

}
.card-2{
  width:500px;
  height:250px;
  position:relative;
  top:50px;
  left:300px;
}
.card-3{
  width:500px;
  height:250px;
  position:relative;
  top:400px;
 right:300px;

}
.card-4{
  width:500px;
  height:250px;
  position:relative;
  top:400px;
  right:50px;
  
}
.card-5{
  background-color: rgb(206, 199, 242);
  width:500px;
  height:250px;
  position:relative;
  top:50px;
  right:100px;

  
}

</style>



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
      <div class="main--content"></div>
        </div>
        
        <div class="main--content">
          <div class="overview">
            <div style="font-size:30px; font-weight:bold">Welcome to St George Hospital Services</div>
              <!-- <div class="title">
                  <h2 class="section--title">Overview</h2>
                  <select name="date" id="date" class="dropdown">
                      <option value="today">Today</option>
                      <option value="lastweek">Last Week</option>
                      <option value="lastmonth">Last Month</option>
                      <option value="lastyear">Last Year</option>
                      <option value="alltime">All Time</option>
                  </select>
              </div> -->
              <div class="cards">
                  <div class="card card-1">
                    <a href="./patientrecordcreate.php">
                      <div class="card--data">
                          <div class="card--content">
                              <h5 class="card--title"></h5>
                              <h1>New Patients </h1>
                          </div>
                          <i class="ri-user-2-line card--icon--lg"></i>

                      </div>
                    </a>
                      
                  </div>
                  <!-- <div class="card card-2">
                    <a href="./patienttreatment.html">
                      <div class="card--data">
                          <div class="card--content">
                              <h5 class="card--title"></h5>
                              <h1>Add treatment</h1>
                          </div>
                          <i class="ri-user-line card--icon--lg"></i>
                      </div>
                    </a>
                  </div> -->
                  <!-- <div class="card card-3">
                    <a href="./patientobservation.html">
                      <div class="card--data">
                          <div class="card--content">
                              <h5 class="card--title"></h5>
                              <h1>Create patient observations</h1>
                          </div>
                          <i class="ri-calendar-2-line card--icon--lg"></i>
                      </div>
                    </a>
                  </div> -->
                  <div class="card card-4">
                    <a href="./patientstudycreate.php">
                      <div class="card--data">
                          <div class="card--content">
                              <h5 class="card--title"></h5>
                              <h1>Create a study</h1>
                          </div>
                          <i class="ri-microscope-line card--icon--lg"></i>
                      </div>
                    </a> 
                  </div>
                  <div class="card card-5">
                    <a href="./Rating.php">
                      <div class="card--data">
                          <div class="card--content">
                              <h5 class="card--title"></h5>
                              <h1>Feedback</h1>
                          </div>
                          <i class="ri-user-line card--icon--lg"></i>
                      </div>
                    </a> 
                  </div>
              </div>
          </div>
        

      <!-- <table>
        <thead>
          <tr>
            <th>Patients ID </th>
            <th>First name </th>
            <th>Last name </th>
            <th>Gender  </th>
            <th>Age </th>
            <th>Phone No</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td> 1</td>
            <td> Zhou</td>
            <td> yan</td>
            <td> Male</td>
            <td> 22</td>
            <td class="pending">0452622222</td>
            <td><span><i class="ri-edit-box-line"></i></i><i class="ri-delete-bin-line delete"></i></span></td>
          </tr>
          <tr>
            <td> -</td>
            <td> -</td>
            <td> -</td>
            <td> -</td>
            <td> -</td>
            <td >-</td>
            <td><span><i class="ri-edit-box-line"></i><i class="ri-delete-bin-line delete"></i></span></td>
          </tr>

          <tr>
            <td> -</td>
            <td> -</td>
            <td> -</td>
            <td> -</td>
            <td> -</td>
            <td >-</td>
            <td><span><i class="ri-edit-box-line"></i><i class="ri-delete-bin-line delete"></i></span></td>
          </tr>

          <tr>
            <td> -</td>
            <td> -</td>
            <td> -</td>
            <td> -</td>
            <td> -</td>
            <td >-</td>
            <td><span><i class="ri-edit-box-line"></i><i class="ri-delete-bin-line delete"></i></span></td>
          </tr>

          
        </tbody>
      </table> -->
      </div>
    </head>


  
    </section>
    
</body>

</html>

