<?php

// Establishing connection
include('connect.php');

try {
    // Validation of empty fields
    if (isset($_POST['signup'])) {

        if (empty($_POST['email'])) {
            throw new Exception("Email cannot be empty.");
        }

        if (empty($_POST['uname'])) {
            throw new Exception("Username cannot be empty.");
        }

        if (empty($_POST['pass'])) {
            throw new Exception("Password cannot be empty.");
        }

        if (empty($_POST['fname'])) {
            throw new Exception("Username cannot be empty.");
        }

        if (empty($_POST['phone'])) {
            throw new Exception("Username cannot be empty.");
        }

        if (empty($_POST['type'])) {
            throw new Exception("Username cannot be empty.");
        }

        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO admininfo (username, password, email, fname, phone, type) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $_POST['uname'], $_POST['pass'], $_POST['email'], $_POST['fname'], $_POST['phone'], $_POST['type']);

        // Execute statement
        if ($stmt->execute()) {
            $success_msg = "Signup Successfully!";
        } else {
            throw new Exception("Error inserting data.");
        }
    }
} catch (Exception $e) {
    $error_msg = $e->getMessage();
}

?>








<!DOCTYPE html>
<html lang="en">

<head>
<title>Mark Your Way</title>
<meta charset="UTF-8">

  <link rel="stylesheet" type="text/css" href="/am/css/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
   
  <link rel="stylesheet" href="styles.css" >
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>

<body>

    <header class="head1">

      <h1>Mark Your Way </h1>
      <div class="navbar">
      <a href="signup.php">Create-Users</a>
      <a href="index.php">Add-Data</a>
      <a href="../logout.php">Logout</a>
      

    </div>

  


<style>

  h1{
    font-weight: bold;
    font-size: 40px;
  }
    
.head1{

  color: black;
  font-size: large;
  text-align: center;
  font-weight: bold;
  font-style: italic;
  font-variant: normal;
  font-family: monospace;
  background-color: #3d5873;
  margin-bottom: 50px;
  padding: 3px;

}

.navbar{
  text-align: left;
  font-size: 25px;
  color: blue;

}

.navbar:hover{
  color: red;
}

.a:hover{
  color: red;
}




body {
  background-color: #733d72;
}


.use{
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  font-weight: bold;
}

</style>



    </header>
    <!-- Menus ended -->

<center>
<h1 class="use">Create User Account</h1>
<p>    <?php
    if(isset($success_msg)) echo $success_msg;
    if(isset($error_msg)) echo $error_msg;
     ?>
       
     </p>
     <br>
<div class="content">

  <div class="row">
    <!-- Old version started -->
    <!--<form action="" method="post">
      
      <table>
        
        <tr>
          <td>Email</td>
          <td><input type="text" name="email"></td>
        </tr>
        <tr>
          <td>Username</td>
          <td><input type="text" name="uname"></td>

        </tr>
        <tr>
          <td>Password</td>
          <td><input type="Password" name="pass"></td>
        </tr>

        <tr>
          <td>Full Name</td>
          <td><input type="text" name="fname"></td>
        </tr>

        <tr>
          <td>Phone Number</td>
          <td><input type="text" name="phone"></td>
        </tr>

        <tr>
          <td>Type</td>
          <td>      <select name="type">
        <option name="teacher" value="teacher">Teacher</option>
        <option name="student" value="student">Student</option>
      </select></td>
        </tr>

        <tr><td><br></td></tr>
        <tr>
          <td></td>
          <td><input type="submit" name="signup" value="Signup"></td>
        </tr>

      </table>
    </form>--><!-- Old version ended -->

    <form method="post" class="form-horizontal col-md-6 col-md-offset-3">

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-7">
            <input type="text" name="email"  class="form-control" id="input1" placeholder="Your Email" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Username</label>
          <div class="col-sm-7">
            <input type="text" name="uname"  class="form-control" id="input1" placeholder="Username" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Password</label>
          <div class="col-sm-7">
            <input type="password" name="pass"  class="form-control" id="input1" placeholder="Password" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Full Name</label>
          <div class="col-sm-7">
            <input type="text" name="fname"  class="form-control" id="input1" placeholder="Full name" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Phone Number</label>
          <div class="col-sm-7">
            <input type="text" name="phone"  class="form-control" id="input1" placeholder="Phone number" />
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

      <input type="submit" class="btn btn-primary col-md-2 col-md-offset-8" value="Signup" name="signup" />
    </form>
  </div>
    <br>
    <p><strong>Already have an account? <a href="../index.php">Login</a> here.</strong></p>

</div>

</center>

</body>
<!-- Body ended  -->

</html>
