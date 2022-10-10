<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['userName'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from staff where userName = '$user_name' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['userId'] = $user_data['userId'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clinical Login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>




  <body>
    <div class="center">
      <h1> <img src="./fullcalendar-2.4.0/imgs/01.jpg"height="60" alt=""><span><img src="./fullcalendar-2.4.0/imgs/02.jpg"height="65" alt=""> </span>Login</h1>
      
      
    <form method="post">
      <div class="txt_field">
        <input type="text" name = "userName"required>
        <span></span>
        <label>Username</label>
      </div>    
    <div class="txt_field">
      <input type="password" name="password"required>
      <span></span>
      <label>Password</label>
    </div>
      <!-- <div class="Nurse">Forgot Password?</div> -->
      <!-- <input type="submit" value="Login"> -->
      <div class="login"> 
        <input type="submit" value="Login"name="submit">
      </div>
      <div class="Nurse_link">
        <!-- No account? Register  <a href="Nurse login.htm">Sign up</a> -->

      </div>
      

    </div>
    </form>
    </div>
  </body>