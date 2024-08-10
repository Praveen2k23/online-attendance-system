<?php

if(isset($_POST['login']))
{
	//start of try block

	try{

		//checking empty fields
		if(empty($_POST['username'])){
			throw new Exception("Username is required!");
			
		}
		if(empty($_POST['password'])){
			throw new Exception("Password is required!");
			
		}
		//establishing connection with db and things
		include ('connect.php');
		
		//checking login info into database
		$row=0;
		$result = $conn->query("select * from admininfo where username='{$_POST['username']}' and password='{$_POST['password']}' and type='{$_POST['type']}'");


		$row = mysqli_num_rows($result);


		if($row>0 && $_POST["type"] == 'teacher'){
			session_start();
			$_SESSION['name']="oasis";
			header('location: teacher/index.php');
		}

		else if($row>0 &&  $_POST["type"] == 'student'){
			session_start();
			$_SESSION['name']="oasis";
			header('location: student/index.php');
		}

		else if($row>0 && $_POST["type"] == 'admin'){
			session_start();
			$_SESSION['name']="oasis";
			header('location: admin/index.php');
		}

		else{
			throw new Exception("Username,Password is wrong, try again!");
			
			header('location: login.php');
		}
	}

	//end of try block
	catch(Exception $e){
		$error_msg=$e->getMessage();
	}
	//end of try-catch
}

?>




<!DOCTYPE html>
<html>
<head>

	<title>Mark Your Way</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	 
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
	 
	<link rel="stylesheet" href="styles.css" ><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

<style type="text/css">
  header{font-size: 17px;margin-bottom: 5px;}



h1{font-size: 45px
	!important; 
	margin-top: 20px;
	font-family:'Courier New', Courier, monospace;
	font-weight: bold;
}


.content{
	margin-top: 50px;


}


.reset{
	font-family: Arial, Helvetica, sans-serif;
	color: red;
}

.signup{
	font-family: Arial, Helvetica, sans-serif;
	color: red;

}

body{
	background-image: url('img/sltc.jpg');
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;

}

.abcd{
	color: black;
	font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
	font-style: italic;
	font-weight: bold;
	font-size: 60px;
	

}



.col-sm-3 control-label{

	color: black;
	font-weight: bold;
	

}

.form-control{
	color: black;
	font-weight: bold;

}

.content {
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
    backdrop-filter: blur(2px);
    -webkit-backdrop-filter: blur(15px);
    -moz-backdrop-filter: blur(10px); /* For Firefox */
    -ms-backdrop-filter: blur(10px); /* For Internet Explorer */
    border: 1px solid rgba(255, 255, 255, 0.2); /* Adjust border color */
    border-radius: 20px;
    position: relative; /* Ensure proper positioning */
    z-index: 1; /* Ensure stacking context */
	color: black;
	font-weight: bold;
	font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}




</style>



	 
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>


	<center>
<header class="bg-blue-700 text-white p-4">
    <h1 class="text-xl font-bold text-dark text-center">Mark Your Way </h1>
    <nav class="mt-4 ms-5">
</nav>
  </header>

<h1 class="abcd">SLTC Research University</h1>

<?php
//printing error message
if(isset($error_msg))
{
	echo $error_msg;
}
?>

<!-- Old Version -->
<!-- 
<form action="" method="post">
	
	<table>
		<tr>
			<td>Username </td>
			<td><input type="text" name="username"></input></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></input></td>
		</tr>
		<tr>
			<td>Role</td>
			<td>
			<select name="type">
				<option name="teacher" value="teacher">Teacher</option>
				<option name="student" value="student">Student</option>
				<option name="admin" value="admin">Admin</option>
			</select>
			</td>
		</tr>
		<tr><td><br></td></tr>
		<tr>
			<td><button><input type="submit" name="login" value="Login"></input></button></td>
			<td><button><input type="reset" name="reset" value="Reset"></button></td>
		</tr>
	</table>
</form>
-->

<div class="content">
	<div class="row">

		<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
			<div class="form-group">
			    <label for="input1" class="col-sm-3 control-label">Username</label>
			    <div class="col-sm-7">
			      <input type="text" name="username"  class="form-control" id="input1" placeholder="Usrename" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-3 control-label">Password</label>
			    <div class="col-sm-7">
			      <input type="password" name="password"  class="form-control" id="input1" placeholder="Password" />
			    </div>
			</div>


			<div class="form-group" class="radio">
			<label for="input1" class="col-sm-3 control-label"></label>
			<div class="col-sm-7">
			  <label>
			    <input type="radio" name="type" id="optionsRadios1" value="student" checked> Student
			  </label>
			  	  <label>
			    <input type="radio" name="type" id="optionsRadios1" value="teacher"> Teacher
			  </label>
			  <label>
			    <input type="radio" name="type" id="optionsRadios1" value="admin"> Admin
			  </label>
			</div>
			</div>


			<input type="submit" class="btn btn-primary col-md-3 col-md-offset-7" value="Login" name="login" />
		</form>
	</div>
</div>


<br><br>
<p><strong>Forgot password ? <a class="reset" href="reset.php">Reset here.</a></strong></p>
<p><strong>If you don't have an account ? <a class="signup" href="signup.php">Signup</a> here</strong></p>

</center>
  <style>
    footer {
      background-color: #5032a8;
      color: white;
      text-align: center;
      padding: 20px;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
    .mt{margin-top: 100px;}
  </style>

  <footer>
    <p>© 2024 Attendance Management System. Group Activity</p>
  </footer>
</body>
</html>