<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{
  header('location: ../index.php');
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
<title>Attendance Management System</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<style>

body{
    overflow: hidden;
   
    
}


</style>
 
</head>

<body>


<nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/logo.png" alt="">
            </div>

            <span class="uil uil-university">Student's Dashboard</span>
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

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
          
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text"></span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-book-reader"></i>
                        <span class="text">Students</span>
                        <span class="number">3000</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-user-md"></i>
                        <span class="text">Staff-Members</span>
                        <span class="number">800</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-university"></i>
                        <span class="text">Faculty</span>
                        <span class="number">8</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Name</span>
                        <span class="data-list">Praveen Perera</span>
                        <span class="data-list">Sandeepa Perera</span>
                        <span class="data-list">Shakila Bashitha</span>
                        <span class="data-list">Gimhan Subasinghe</span>
                        <span class="data-list">Vishal Abhiman</span>
               
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        <span class="data-list">22ug2-0569@Sltc.ac.lk</span>
                        <span class="data-list">22ug2-0258@Sltc.ac.lk</span>
                        <span class="data-list">22ug2-0095@Sltc.ac.lk</span>
                        <span class="data-list">22ug2-0011@Sltc.ac.lk</span>
                        <span class="data-list">22ug2-0153@Sltc.ac.lk</span>

                    </div>
                    <div class="data joined">
                        <span class="data-title">Date</span>
                        <span class="data-list">2024-01-06</span>
                        <span class="data-list">2024-01-06</span>
                        <span class="data-list">2024-01-06</span>
                        <span class="data-list">2024-01-06</span>
                        <span class="data-list">2024-01-06</span>
                    
                      
                    </div>
                    <div class="data type">
                        <span class="data-title">Type</span>
                        <span class="data-list">Student</span>
                        <span class="data-list">Staff-Member</span>
                        <span class="data-list">Staff-Member</span>
                        <span class="data-list">Staff-Member</span>
                        <span class="data-list">Student</span>
                        
                    </div>
                    <div class="data status">
                        <span class="data-title">Status</span>
                        <span class="data-list">Present</span>
                        <span class="data-list">Present</span>
                        <span class="data-list">Absent</span>
                        <span class="data-list">Absent</span>
                        <span class="data-list">Present</span>
                     
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="new.js"></script>

</body>
</html>
