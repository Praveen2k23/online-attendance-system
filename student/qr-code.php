<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css" >
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f0f0f0;
    }

    .container {
      max-width: 600px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    h1 {
      color: #333;
    }

    .scanner-container {
      margin: 20px auto;
      width: 100%;
    }

    #qr-reader {
      width: 500px;
    }

    #qr-reader-results {
      position: absolute;
      top: 0px;
      left: 520px;
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

<base target="_top">

<div class="container">
  <h1>QR Code Scanner</h1>
  <div id="qr-reader" class="scanner-container"></div>
  <div id="qr-reader-results" class="scanner-container"></div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/html5-qrcode@2.0.9/dist/html5-qrcode.min.js"></script>

<script type="text/javascript">
  var resultContainer = document.getElementById('qr-reader-results');
  var lastResult, countResults = 0;

  async function onScanSuccess(decodedText, decodedResult) {
    if (decodedText !== lastResult) {
      ++countResults;
      lastResult = decodedText;
      // Handle on success condition with the decoded message.
      console.log(`Scan result ${decodedText}`, decodedResult);
      //alert(decodedText);

      google.script.run.sendback(decodedText);
      await waitme();
      $('#qr-reader-results').prepend("<p>" + decodedText + "</p>");
      
      // Redirect to a different site
      window.location.href = decodedText; // Assuming the decoded text is a URL
    }
  }

  setTimeout(function(){
    var html5QrcodeScanner = new Html5QrcodeScanner(
      "qr-reader", { fps: 10, qrbox: 250 });
    html5QrcodeScanner.render(onScanSuccess);

  },500);

  function waitme(){
    promise1=new Promise(function(resolve){

      setTimeout(function(){

        resolve('ok');
      },1000)
    })

    return promise1;

  }

  window.addEventListener('beforeunload', function (e) {
    e.preventDefault();
    e.returnValue = '3';
  });
</script>
<script src="new.js"></script>

</body>
</html>
