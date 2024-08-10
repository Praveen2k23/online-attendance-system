<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{
  header('location: ../login.php');
}
?>
<?php include('connect.php');?>




<!DOCTYPE html>
<html lang="en">
<head>
<title>Attendance Management System</title>
<meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
  <link rel="stylesheet" href="style.css" >
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <style>

.list{
  font-size: 50px;
  font-weight: bold;
  font-family: cursive;
}


tr{
  text-align: center;
}


.fff{
  text-align: center;
}

body{
    overflow: hidden;}

</style>

</head>
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
    <h3 class="list" >Student List</h3>
    <br>

   <form method="post" action="" class="form-horizontal col-md-6 col-md-offset-3">
      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Batch</label>
            <div class="col-sm-7">
                <input type="text" name="sr_batch"  class="form-control" id="input1" placeholder="enter your batch to continue" />
                
            </div>

      </div>
      <input type="submit" class="btn btn-primary col-md-3 col-md-offset-7" value="Go!" name="sr_btn" />
      
   </form>

   <div class="content"></div>
    <table class="table table-striped">
      
      <thead>
      <tr class>
        <th class="fff" scope="col">Student ID</th>
        <th class="fff" scope="col">Name</th>
        <th class="fff" scope="col">Department</th>
        <th class="fff" scope="col">Batch</th>
        <th class="fff" scope="col">Semester</th>
        <th class="fff" scope="col">Email</th>
      </tr>
      </thead>







   <?php

    if(isset($_POST['sr_btn'])){
     
     $srbatch = $_POST['sr_batch'];
     $i=0;
     
     $query = "SELECT * FROM students WHERE st_batch = '$srbatch' ORDER BY st_id ASC";
     $result = mysqli_query($conn, $query);

     while ($data = mysqli_fetch_array($result)) {
       $i++;
     
     ?>

     <tr>
       <td><?php echo $data['st_id']; ?></td>
       <td><?php echo $data['st_name']; ?></td>
       <td><?php echo $data['st_dept']; ?></td>
       <td><?php echo $data['st_batch']; ?></td>
       <td><?php echo $data['st_sem']; ?></td>
       <td><?php echo $data['st_email']; ?></td>
     </tr>

     <?php 
          } 
              }
      ?>
    </table>

  </div>

</div>

</center>

<script src="new.js"></script>

</body>
</html>
