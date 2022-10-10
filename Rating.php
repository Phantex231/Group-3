<?php   
 include "connection.php";  
 $patientId="";  
 $Q1="";  
 $Q2="";  
 $Q3="";  
 $Q4="";  
 $Q5="";


 if (isset($_POST['submit'])) {  
      //echo "<pre>";  
      //print_r($_POST);  
      $patientId=$_POST['patientId'];  
      $Q1=$_POST['Q1'];  
      $Q2=$_POST['Q2'];  
      $Q3=$_POST['Q3'];  
      $Q4=$_POST['Q4'];  
	  $Q5=$_POST['Q5'];


           $insert= mysqli_query($conn,"INSERT INTO `feedback`(patientId, Q1, Q2, Q3, Q4, Q5) 
		   // VALUES ('$patientId','$Q1','$Q2','$Q3','$Q4','$Q5')");  
           if ($insert) {  
                $msg="Data inserted successfully";  
           }else{  
                $msg="Something Error, Try after sometime !";  
           }  
      }    
 ?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/rating(2).css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Dashboard</title>
</head>
<style>
  .search--notification--profile{
  width:400px;
  /* border:1px solid black; */
  position:relative;
  left: 1200px;
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
             </div>
            
             <div class="wrap">
               
                <form method="post" action="">
				<label class="statement">Patient Id</label>
                  <ul class='likert'>
                    <li>
                      <input type="text" id="textbox" name="PatientId">
                    </li>
				</ul>
                  <label class="statement">How much pain are you in?</label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="Q1" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="Q1" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="Q1" value="3">
                      <label>3</label>
                    </li>
                    <li>
                      <input type="radio" name="Q1" value="4">
                      <label>4</label>
                    </li>
                    <li>
                      <input type="radio" name="Q1" value="5">
                      <label>5</label>
                    </li>
                  </ul>
                  <label class="statement">Have this help with your condition?
                </label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="Q2" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="Q2" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="Q2" value="3">
                      <label>3</label>
                    </li>
                    <li>
                      <input type="radio" name="Q2" value="4">
                      <label>4</label>
                    </li>
                    <li>
                      <input type="radio" name="Q2" value="5">
                      <label>5</label>
                    </li>
                  </ul>
                  <label class="statement"></label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="Q3" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="Q3" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="Q3" value="3">
                      <label>3</label>
                    </li>
                    <li>
                      <input type="radio" name="Q3" value="4">
                      <label>4</label>
                    </li>
                    <li>
                      <input type="radio" name="Q3" value="5">
                      <label>5</label>
                    </li>
                  </ul>
                  <label class="statement"></label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="Q4" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="Q4" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="Q4" value="3">
                      <label>3</label>
                    </li>
                    <li>
                      <input type="radio" name="Q4" value="4">
                      <label>4</label>
                    </li>
                    <li>
                      <input type="radio" name="Q4" value="5">
                      <label>5</label>
                    </li>
                  </ul>
                  <label class="statement"></label>
                  <ul class='likert'>
                    <li>
                      <input type="radio" name="Q5" value="1">
                      <label>1</label>
                    </li>
                    <li>
                      <input type="radio" name="Q5" value="2">
                      <label>2</label>
                    </li>
                    <li>
                      <input type="radio" name="Q5" value="3">
                      <label>3</label>
                    </li>
                    <li>
                      <input type="radio" name="Q5" value="4">
                      <label>4</label>
                    </li>
                    <li>
                      <input type="radio" name="Q5" value="5">
                      <label>5</label>
                    </li>
                  </ul>

                  <div class="buttons">
                    <button class="clear">Clear</button>
                    <input type="submit" value="submit" name="submit" id="buttonid">
                  </div>
                </form>
              </div>
           
                
                </div>
    </section>
    
</body>

</html>
