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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>QR Code Generator | Code Traversal</title>
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


    <div class="box">
        <div class="qr-header">
            <h1>Generate QR Code</h1>
            <input type="text" placeholder="Type your text or URL" id="qr-text">
            <div>
            <label for="sizes">Select Size:</label>
            <select id="sizes">
                <option value="100">100x100</option>
                <option value="200">200x200</option>
                <option value="300">300x300</option>
                <option value="400">400x400</option>
                <option value="500">500x500</option>
                <option value="600">600x600</option>
                <option value="700">700x700</option>
                <option value="800">800x800</option>
                <option value="900">900x900</option>
                <option value="1000">1000x1000</option>
            </select>
        </div>
        </div>
        <div class="qr-body"></div>
        <div class="qr-footer">
            <a href="" id="generateBtn">Generate</a>
            <a href="" id="downloadBtn" download="QR_Code.png">Download</a>
        </div>
    </div>

    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <script src="new.js"></script>
</body>
</html>