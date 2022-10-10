<?php   
 include "connection.php";  
 $studyName="";  
 $type="";  
 $sDate="";  
 $notes="";  

 if (isset($_GET['id'])) {  
      $id=$_GET['id'];  
      $select=mysqli_query($conn,"select * from study where studyId='$id'");  
      $data=mysqli_fetch_assoc($select);  
      $studyName=$data['studyName'];  
      $type=$data['type'];  
      $sDate=$data['sDate'];  
      $notes=$data['notes'];  
 }  
 if (isset($_POST['submit'])) {  
      //echo "<pre>";  
      //print_r($_POST);  
      $studyName=$_POST['studyName'];  
      $type=$_POST['type'];  
      $sDate=$_POST['sDate'];  
      $notes=$_POST['notes'];  
      if (isset($_GET['id'])) {  
           $update=mysqli_query($conn,"UPDATE `study` SET `studyName`='$studyName',`type`='$type',`sDate`='$sDate',`notes`='$notes'WHERE studyId='$id'");  
           if ($update) {  
                header("location:study.php");  
                die();  
           }  
      }else{  
           $insert= mysqli_query($conn,"INSERT INTO `study`(studyName, type, sDate, notes) 
		   VALUES ('$studyName','$type','$sDate','$notes')");  
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
    <title>Study</title>
    <link rel="stylesheet" href="fullcalendar-2.4.0\layui\css\layui.css">
    <style type="text/css">

.main{
        /* border:1px solid black; */
        position: relative;
        top:20px;

    }
    .main_title{
        
        height:150px;
        font-size:50px;
        font-weight:bold;
        /* border:1px solid black; */
       padding-left:780px;
        line-height:150px;

    }
    .main_title1{
        
        /* height:50px; */
        font-weight: bold;
        position: relative;
    }
    .main_title2{
        /* height:50px; */
        font-weight: bold;
        
        


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
    .main_title1 span{
        display: inline-block;
    }
    .course{
        position:absolute;
        left: 150px;

    }
    .type{
        position: absolute;
        left:800px;
    }
    .startdate{
        position: absolute;
        left:1400px;
    }
    .main_title2 span{
        display: inline-block;
        position: relative;

    }
    .patientid{
        position:absolute;
        left: 150px;
        top: 100px;
    }
    .studyroom{
        position:absolute;
        left: 500px;
        top: 100px;
    }
    .status{
        position:absolute;
        left: 790px;
        top:100px;
    }
    .note{
        
        width:800px;
        position: relative;
        left:550px;
        top:150px;
        font-weight: bold;

    }
    #notebox{
        border: none;
        width:800px;
        height:250px;

    }
    .button{
        width:400px;
        height:30px;
        position: relative;
        left:760px;
        top:200px;
    
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

        </i>   </a></li>
    -->
</ul>
<div class="main">
    <div class="main_title">
        Create/edit a Study
    </div>            
	<form method="post" action="">
    <div class="main_title1">
        <span class="course">Course Name:<br/>

            <input type="text" id="textbox" Name="studyName" required>

    
        </span>
        <span class="type">Type:<br/>

            <input type="text" id="textbox" Name="type" required>


        </span>
        <span class="startdate">Start Date:<br/>

            <input type="date" id="textbox" Name="sDate" required>

        </span>
    </div>
    <!-- <div class="main_title2">
        <span class="patientid">PATIENT ID:<br/>
            <form method="post" action="">
            <input type="text" id="textbox">
        </form>
        </span>
        <span class="studyroom">Study Room:<br/>
            <form method="post" action="">
            <input type="text" id="textbox">
        </form>
        </span>
        <span class="status">Status:<br/>
            <form method="post" action="">
            <input type="text" id="textbox">
        </form>
        </span>
    </div> -->
    <div class="note">Note:<br/>
        <input type="text" id="notebox" name="notes">
    </div>
    <div class="button">
        <input type="submit" value="submit" name="submit" id="buttonid">
    </div>
	</form>
</div>
</body>
</html>