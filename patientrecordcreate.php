<?php   
 include "connection.php";  
 $firstName="";  
 $lastName="";  
 $gender="";  
 $age="";  
 $phoneNo="";  
 $bloodGroup="";
 $observation="";
 $treatment="";
 if (isset($_GET['id'])) {  
      $id=$_GET['id'];  
      $select=mysqli_query($conn,"select * from patient where patientId='$id'");  
      $data=mysqli_fetch_assoc($select);  
      $firstName=$data['firstName'];  
      $lastName=$data['lastName'];  
      $gender=$data['gender'];  
      $age=$data['age'];  
      $phoneNo=$data['phoneNo'];  
	  $bloodGroup = $data['bloodGroup'];
	  $observation = $data['observation'];
	  $treatment = $data['treatment'];
 }  
 if (isset($_POST['submit'])) {  
      //echo "<pre>";  
      //print_r($_POST);  
      $firstName=$_POST['firstName'];  
      $lastName=$_POST['lastName'];  
      $gender=$_POST['gender'];  
      $age=$_POST['age'];  
      $phoneNo=$_POST['phoneNo'];  
	  $bloodGroup=$_POST['bloodGroup'];
	  $observation = $_POST['observation'];
	  $treatment=$_POST['treatment'];
      if (isset($_GET['id'])) {  
           $update=mysqli_query($conn,"UPDATE `patient` SET `firstName`='$firstName',`lastName`='$lastName',`gender`='$gender',`age`='$age',`phoneNo`='$phoneNo' ,`bloodGroup`='$bloodGroup','observation' ='$observation','treatment'='$treatment'WHERE patientId='$id'");  
           if ($update) {  
                header("location:patient.php");  
                die();  
           }  
      }else{  
           $insert= mysqli_query($conn,"INSERT INTO `patient`(firstName, lastName, gender, age, phoneNo, bloodGroup, observation, treatment) 
		   VALUES ('$firstName','$lastName','$gender','$age','$phoneNo','$bloodGroup','$observation','$treatment')");  
           if ($insert) {  
                $msg="Data inserted successfully";  
           }else{  
                $msg="Something Error, Try after sometime !";  
           }  
      }  
 }  
 ?> 
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Record</title>
    <link rel="stylesheet" href="fullcalendar-2.4.0\layui\css\layui.css">
    <style type="text/css">
        .main{
        /* border: 1px solid black; */
        margin:0;
        position:relative;
        top:60px;
    }
    .main_title{
        
        height:150px;
        font-size:30px;
        font-weight:bold;
        /* border:1px solid black; */
        padding-left:770px;
        line-height:150px;
        position: relative;
        bottom:30px;

    }
    #textbox{
        width:300px;
        height: 40px; 
        /* position: absolute;
        top: 25px;
        left:1080px; */
        border-radius: 30px;
        border: none;
    }
    .main_part1{
        width:300px;
        /* border: 1px solid black; */
        position: relative;
        left:300px;
    }
    .main_part1 span{
        display:inline-block;
        font-weight: bold;
    }
    .FamilyName{
        
        
    }
    .GivenName{
        position: relative;
        top:100px;
       
    }
    .PatientID{
        position:relative;
        top:200px;
    }
    
    .main_part2 span{
        display:inline-block;
        font-weight: bold;
    }

    .main_part2{
        
        width:300px;
        /* border: 1px solid black; */
        position: relative;
        left:1300px;
        bottom:170px;
        }
        .DateofBirth{
            position: relative;
            top:100px;
           
        }
        .PhoneNum{
            position:relative;
            top:200px;
        }


    .main_part3 span{
        display:inline-block;
        font-weight: bold;
    }
    .main_part3{
        margin:0;
        /* border: 1px solid black; */
        position: absolute;
        left:300px;
        top:550px;
    }


    .Status{
        position: relative;
        left:200px;
        

    }
    .DateofFirstTreatment{
        position: relative;
        left:390px;
        /* bottom:120px; */
    }


    #patientphoto{
        width: 400px;
        height:400px;
        position: absolute;
        left:750px;
        top:120px;
    }
    
    .button{
        width:400px;
        height:30px;
        position: relative;
        left: 750px;
        top:220px;
    
    }
    #buttonid{
        width:400px;
        height:30px;
        background-color: rgb(154, 172, 242);
        border: none;
        border-radius: 15px;


    }
    .buttonsize{
        font-weight: bold;
        
    }
    #textbox1{
        width:500px;
        height: 100px; 
        /* position: absolute;
        top: 25px;
        left:1080px; */
        /* border-radius: 30px; */
        border: none;

    }
    #textbox2{
        width:500px;
        height: 100px; 
       
        /* border-radius: 30px; */
        border: none;
    }
    .Treat{
        position: relative;
        left:800px;
        bottom: 120px;;
    }



    </style>
</head>
<body style="background-color: rgb(237,242,245)">



<ul class="layui-nav" lay-filter="" style="background-color:rgb(32,43,109)">

    <li class="layui-nav-item"><img src="./fullcalendar-2.4.0/imgs/01.jpg" width="65px"></li>
    <li class="layui-nav-item" style=""><img src="./fullcalendar-2.4.0/imgs/02.jpg" width="130px" height="66px;"></li>


    <li class="layui-nav-item " style="float: right;"><a href="./index.php"><i class="layui-icon layui-icon-logout" style="font-size: 30px;"></i>&nbsp;&nbsp;Home   </a>

    <!-- <li class="layui-nav-item " style="float: right;"><a href="#"><i class="layui-icon layui-icon-set" style="font-size: 30px;"></i>&nbsp;&nbsp;Setting   </a> -->

    <li class="layui-nav-item " style="float: right;"><a href="#"><input type="text"  style="margin-top: 10px" name="title" required  lay-verify="required" placeholder="Search" autocomplete="off" class="layui-input">  </a>

    </li>

    <li class="layui-nav-item " style="float: right;"><a href="#"><i class="layui-icon layui-icon-search" style="font-size: 30px;"></i>   </a>

    </li>
    <!-- <li class="layui-nav-item " style="float: right;"><a href="../patientstudycreate.html"><i class="layui-icon layui-icon-add-circle" style="font-size: 30px;"></i></a></li>
    <li class="layui-nav-item " style="float: right;"><a href="#"><i class="layui-icon layui-icon-notice" style="font-size: 30px;">

    </i>   </a></li>

    <li class="layui-nav-item " style="float: right;"><a href="demos/default.html">TimeTable

        </i>   </a></li> -->
   
</ul>
<div class="main">
    <div class="main_title">
        Create/edit a Patient record
    </div>        
	<form method="post" action="">
    <div class="main_part1">
        <span class="FamilyName">First Name:<br/>
    
            <input type="text" id="textbox" name="firstName">
        </span>
        <span class="GivenName">Last Name:<br/>

                <input type="text" id="textbox" name="lastName" required>

        </span>
        <span class="PatientID">Gender:<br/>
            
					<input type="radio" name="gender"value="m"required> Male
					<input type="radio" name="gender" value="f"required> Female

        </span>
    </div>
    <img src="./fullcalendar-2.4.0/imgs/01.jpg" alt="photo upload" id="patientphoto">
    <div class="main_part2">
        <span class="BloodGroup">Blood Group:<br/>
            
                <input type="text" id="textbox" name="bloodGroup" required>

        </span>
        <span class="DateofBirth">Age:<br/>

                <input type="number" id="textbox" name="age" required>

        </span>
        <span class="PhoneNum">Phone Number:<br/>

                <input type="number" id="textbox" name="phoneNo" required>

        </span>
    </div>
    <div class="main_part3">
        <div class="ober">
            <span>Observation Record:
            <input type="text" ID="textbox1" name ="observation"required>
            </span>
        </div>
        <div class="Treat">
            <span>Treatment Record:
                <input type="text" ID="textbox2" name ="treatment"required>
            </span>
        </div>

    </div>
	<div class="button">
		<input type="submit" value="Submit"name="submit">
	</div>
	</form>
  
</div>


</div>
</body>
</html>