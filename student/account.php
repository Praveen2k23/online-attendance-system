<?php

ob_start();
session_start();

// checking if the session is valid
if ($_SESSION['name'] != 'oasis') {
    header('location: ../login.php');
    exit(); // It's a good practice to stop script execution after redirection
}
?>
<?php include('connect.php'); ?>


<?php
try {

    // checking form data and empty fields
    if (isset($_POST['done'])) {

        if (empty($_POST['name'])) {
            throw new Exception("Name cannot be empty");
        }
        if (empty($_POST['dept'])) {
            throw new Exception("Department cannot be empty");
        }
        if (empty($_POST['batch'])) {
            throw new Exception("Batch cannot be empty");
        }
        if (empty($_POST['email'])) {
            throw new Exception("Email cannot be empty");
        }

        // initializing the student id
        $sid = $_POST['id'];

        // updating students information to database table "students"
        $stmt = $conn->prepare("UPDATE students SET st_name=?, st_dept=?, st_batch=?, st_sem=?, st_email=? WHERE st_id=?");
        $stmt->bind_param("sssssi", $_POST['name'], $_POST['dept'], $_POST['batch'], $_POST['semester'], $_POST['email'], $sid);
        $stmt->execute();
        $success_msg = 'Updated successfully';
    }
} catch (Exception $e) {
    $error_msg = $e->getMessage();
}

?>






<!DOCTYPE html>
<html lang="en">

<!-- head started -->
<head>
<title>Attendance Management System </title>
<meta charset="UTF-8">
  
  <link rel="stylesheet" type="text/css" href="/am/css/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
  <link rel="stylesheet" href="style.css" >
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
 

</head>

<style>
h3{
    font-size: 30px;
    font-family: sans-serif;
    font-weight: bold;
}

body{
    overflow: hidden;}

</style>
<body>

<nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/logo.png" alt="">
            </div>

            <span class="uil uil-university">Attendance Managment System</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="index.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>

                <li><a href="account.php">
                    <i class="uil uil-user"></i>
                    <span class="link-name">Account Update </span>
                </a></li>

                <li><a href="students.php">
                    <i class="uil uil-list-ul"></i>
                    <span class="link-name">Student List </span>
                </a></li>

                <li><a href="report.php">
                    <i class="uil uil-file-graph"></i>
                    <span class="link-name"> Student Report </span>
                </a></li>
                
                <li><a href="QR.php">
                    <i class="uil uil-qrcode-scan"></i>
                    <span class="link-name">Qr-Code Gnerator</span>
                </a></li>


                <li><a href="qr-code.php">
                    <i class="uil uil-qrcode-scan"></i>
                    <span class="link-name">QR-Code Scanner</span>
                </a></li>

                <li><a href="#">
                    <i class="uil uil-rss-interface"></i>
                    <span class="link-name">RFID-Scanner</span>
                </a></li>
        
            </ul>
            
            <ul class="logout-mode">
                <li><a href="../logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>





<center>



<div class="row">
    <div class="content">

          <h3>Update Account</h3>

          <br>
          
          <!-- Error or Success Message printint started --><p>
   <?php
                if (isset($success_msg)) {
                    echo $success_msg;
                }
                if (isset($error_msg)) {
                    echo $error_msg;
                }
                ?>
          </p><!-- Error or Success Message printint ended -->

          <br>
   
          <form method="post" action="" class="form-horizontal col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="input1" class="col-sm-3 control-label">Student ID</label>
                <div class="col-sm-7">
                  <input type="text" name="sr_id"  class="form-control" id="input1" placeholder="Enter your id " />
                </div>
            </div>
            <input type="submit" class="btn btn-primary col-md-3 col-md-offset-7" value="Go!" name="sr_btn" />
          </form>
          <div class="content"></div>


       <?php

            if (isset($_POST['sr_btn'])) {

                // initializing student ID from form data
                $sr_id = $_POST['sr_id'];

                $i = 0;

                // searching students information respected to the particular ID
                $stmt = $conn->prepare("SELECT * FROM students WHERE st_id=?");
                $stmt->bind_param("i", $sr_id);
                $stmt->execute();
                $result = $stmt->get_result();

                while ($data = $result->fetch_assoc()) {
                    $i++;

            ?>
<form action="" method="post" class="form-horizontal col-md-6 col-md-offset-3">
   <table class="table table-striped">
  
          <tr>
            <td>Student ID:</td>
            <td><?php echo $data['st_id']; ?></td>
          </tr>

          <tr>
              <td>Student's Name:</td>
              <td><input type="text" name="name" value="<?php echo $data['st_name']; ?>"></input></td>
          </tr>

          <tr>
              <td>Department:</td>
              <td><input type="text" name="dept" value="<?php echo $data['st_dept']; ?>"></input></td>
          </tr>

          <tr>
              <td>Batch:</td>
              <td><input type="text" name="batch" value="<?php echo $data['st_batch']; ?>"></input></td>
          </tr>
          
          <tr>
              <td>Semester:</td>
              <td><input type="text" name="semester" value="<?php echo $data['st_sem']; ?>"></input></td>
          </tr>

          <tr>
              <td>Email:</td>
              <td><input type="text" name="email" value="<?php echo $data['st_email']; ?>"></input></td>
          </tr>
          <input type="hidden" name="id" value="<?php echo $sr_id; ?>">
          
          <tr><td></td></tr>
          <tr>
                <td></td>
                <td><input type="submit" class="btn btn-primary col-md-3 col-md-offset-7" value="Update" name="done" /></td>
                
          </tr>

    </table>
</form>
     <?php 
   } 
     }  
     ?>


      </div>

  </div>

  </center>

  <script src="new.js"></script>


</body>

</html>
