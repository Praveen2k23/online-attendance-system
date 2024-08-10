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
  <link rel="stylesheet" type="text/css" href="/am/css/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
  <link rel="stylesheet" href="style.css" >
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>

<style>

h3{
    font-size: 40px;
    font-family:monospace;
    font-weight: bolder;
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
    <h3>Student Report</h3>
    <br>
    <form method="post" action="" class="form-horizontal col-md-6 col-md-offset-3">

  <div class="form-group">

    <label  for="input1" class="col-sm-3 control-label">Select Department</label>
      <div class="col-sm-4">
      <select name="whichcourse" id="input1">
         <option name="networking" value="networking">IT</option>
        <option name="swe" value="swe">Business</option>
      </select>
      </div>

  </div>

        <div class="form-group">
           <label for="input1" class="col-sm-3 control-label">Your ID</label>
              <div class="col-sm-7">
                  <input type="text" name="sr_id"  class="form-control" id="input1" placeholder="enter your id" />
              </div>
        </div>
        <input type="submit" class="btn btn-primary col-md-3 col-md-offset-7" value="Go!" name="sr_btn" />
    </form>

    <div class="content"><br></div>

    <form method="post" action="" class="form-horizontal col-md-6 col-md-offset-3">
    <table class="table table-striped">

    <?php

                if (isset($_POST['sr_btn'])) {
                    $sr_id = $_POST['sr_id'];
                    $course = $_POST['whichcourse'];
                    $count_pre = 0;

                    $stmt = $conn->prepare("SELECT * FROM reports WHERE st_id=? AND course=?");
                    $stmt->bind_param("is", $sr_id, $course);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    $count_tot = $result->num_rows;

                    while ($data = $result->fetch_assoc()) {
                        if ($count_pre == 0) {
                ?>
  <tbody>
                                <tr>
                                    <td>Student ID: </td>
                                    <td><?php echo $data['st_id']; ?></td>
                                </tr>
                                <tr>
                                    <td>Student Name: </td>
                                    <td><?php echo $data['st_name']; ?></td>
                                </tr>
                                <tr>
                                    <td>Department: </td>
                                    <td><?php echo $data['st_dept']; ?></td>
                                </tr>
                                <tr>
                                    <td>Batch: </td>
                                    <td><?php echo $data['st_batch']; ?></td>
                                </tr>
                <?php
                        }
                        if ($data['st_status'] == "Present") {
                            $count_pre++;
                        }
                    }

                ?>
                <tr>
                    <td>Total Class (Days): </td>
                    <td><?php echo $count_tot; ?> </td>
                </tr>
                <tr>
                    <td>Present (Days): </td>
                    <td><?php echo $count_pre; ?> </td>
                </tr>
                <tr>
                    <td>Absent (Days): </td>
                    <td><?php echo $count_tot -  $count_pre; ?> </td>
                </tr>
                </tbody>
                <?php
                }
                ?>
            </table>
        </form>
    </div>
</div>

</center>

<script src="new.js"></script>


</body>

</html>
