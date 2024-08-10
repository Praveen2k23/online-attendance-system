<?php
ob_start();
session_start();

if($_SESSION['name']!='oasis') {
    header('location: /am/index.php');
}

include('connect.php');

// Data insertion
try {
    // Checking if the data comes from students form
    if(isset($_POST['std'])) {
        // Students data insertion to database table "students"
        $stmt = $conn->prepare("INSERT INTO students (st_id, st_name, st_dept, st_batch, st_sem, st_email) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $_POST['st_id'], $_POST['st_name'], $_POST['st_dept'], $_POST['st_batch'], $_POST['st_sem'], $_POST['st_email']);
        $stmt->execute();
        $success_msg = "Student added successfully.";
    }

    // Checking if the data comes from teachers form
    if(isset($_POST['tcr'])) {
        // Teachers data insertion to the database table "teachers"
        $stmt = $conn->prepare("INSERT INTO teachers (tc_id, tc_name, tc_dept, tc_email, tc_course) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $_POST['tc_id'], $_POST['tc_name'], $_POST['tc_dept'], $_POST['tc_email'], $_POST['tc_course']);
        $stmt->execute();
        $success_msg = "Teacher added successfully.";
    }
} catch(Exception $e) {
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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

<style type="text/css">

.message{
    padding: 20px;
    font-size: 15px;
    font-style: bold;
    color: black;
}


header{
    font-size: 20px;
      margin-bottom: 10px;
      text-align: right;
      font-weight: bold;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #3d5873;

    }
    
a:hover{
    color: red;
    text-decoration: none;}
  

.h1{
  margin-top: 20px;
  
}

.popo{
  font-size: 40px;
  text-align: center;
  color: black;
  font-style: italic;
  font-family:monospace;
  font-weight: bold;
}
  
.content{margin-top: 50px;
}


body{
  background-color: #6067c4;
}



span{
  font-size: 40px;
  font-weight: bold;
  font-family:sans-serif;
  color: blue;
}

.mr-4{
  font-family:monospace;
}




</style>
</head>
<!-- head ended -->

<!-- body started -->




<body>

    <!-- Menus started-->
<header class="text-white p-4">
    <h1 class="text-xl font-bold text-white text-center"></h1>
    <h2 class="popo">Mark Your Way</h2>
    <nav class="mt-4 ms-5">
      <a href="signup.php" class="mr-4">Create-Users</a>
      <a href="index.php" class="mr-4">Add-Data</a>
      <a href="../logout.php" class="mr-4">Logout</a>

    </nav>
  </header>
    <!-- Menus ended -->
</head>


<center>
<!-- Error or Success Message printint started -->
<div class="message">
        <?php if(isset($success_msg)) echo $success_msg; if(isset($error_msg)) echo $error_msg; ?>
</div>
<!-- Error or Success Message printint ended -->

<!-- Content, Tables, Forms, Texts, Images started -->
<div class="content">

  <center><span> <a class="teach" href="#teacher">Teacher</a> / <a class="std" href="">Student</a> </span> <br></center>

  <div class="row" id="student">


<!--    <h3>Add Student Information</h3>
      
      <form action="" method="post">
          <table>
            
                <tr>
                  <td>Student ID</td>
                  <td><input type="text" name="st_id"></td>
                </tr>

                <tr>
                  <td>Name</td>
                  <td><input type="text" name="st_name"></td>
                </tr>

                <tr>
                  <td>Department</td>
                  <td><input type="text" name="st_dept"></td>
                </tr>

                <tr>
                  <td>Batch</td>
                  <td><input type="text" name="st_batch"></td>
                </tr>

                <tr>
                  <td>Semester</td>
                  <td><input type="text" name="st_sem"></td>
                </tr>

                <tr>
                  <td>Email</td>
                  <td><input type="text" name="st_email"></td>
                </tr>

                <tr><td><br></td></tr>
                <tr>
                  <td></td>
                  <td><button><input type="submit" name="std" value="Add"></button></td>
                </tr>


          </table>
      </form>
--->
    

      <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
      <h4 class="py-5 mb-5">Add Student's Information</h4>
      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Student ID</label>
          <div class="col-sm-7">
            <input type="text" name="st_id"  class="form-control" id="input1" placeholder="Student id" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Name</label>
          <div class="col-sm-7">
            <input type="text" name="st_name"  class="form-control" id="input1" placeholder="Student full name" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Department</label>
          <div class="col-sm-7">
            <input type="text" name="st_dept"  class="form-control" id="input1" placeholder="Department ex. (IT, Business, Engineering....) " />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Batch</label>
          <div class="col-sm-7">
            <input type="text" name="st_batch"  class="form-control" id="input1" placeholder="Batch e.x (9A, 9B.....)" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Semester</label>
          <div class="col-sm-7">
            <input type="text" name="st_sem"  class="form-control" id="input1" placeholder="Semester ex. (1st sem, 2nd sem......)" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-7">
            <input type="email" name="st_email"  class="form-control" id="input1" placeholder="22ug2-xxx@sltc.ac.lk" />
          </div>
      </div>


      <input type="submit" class="btn btn-primary col-md-2 col-md-offset-8" value="Add Student" name="std" />
    </form>

  </div>
<br><br><br>
  <div class="rowtwo" id="teacher">
    <!-- Old Verion--><!--
    <h3>Add Teacher Information</h3>

      <form action="" method="post">
          <table>
            
                <tr>
                  <td>Teacher ID</td>
                  <td><input type="text" name="tc_id"></td>
                </tr>

                <tr>
                  <td>Name</td>
                  <td><input type="text" name="tc_name"></td>
                </tr>

                <tr>
                  <td>Department</td>
                  <td><input type="text" name="tc_dept"></td>
                </tr>

                <tr>
                  <td>Email</td>
                  <td><input type="text" name="tc_email"></td>
                </tr>

                <tr>
                  <td>Course</td>
                  <td><input type="text" name="tc_course"></td>
                </tr>

                <tr><td><br></td></tr>
                <tr>
                  <td></td>
                  <td><button><input type="submit" name="tcr" value="Add"></button></td>
                </tr>

          </table>
      </form>
-->

       <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
        <h4 class="mb-5 py-5">Add Teacher's Information</h4>
      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Teacher ID</label>
          <div class="col-sm-7">
            <input type="text" name="tc_id"  class="form-control" id="input1" placeholder="Teacher's Id" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Name</label>
          <div class="col-sm-7">
            <input type="text" name="tc_name"  class="form-control" id="input1" placeholder="Teacher full name" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Department</label>
          <div class="col-sm-7">
            <input type="text" name="tc_dept"  class="form-control" id="input1" placeholder="Department ex. (IT, Business, Engineering....)" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-7">
            <input type="email" name="tc_email"  class="form-control" id="input1" placeholder="UG-xxxx@sltc.ac.lk" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Course Name</label>
          <div class="col-sm-7">
            <input type="text" name="tc_course"  class="form-control" id="input1" placeholder="course ex. (Software Engineering, Cyber Sequrity, Data Science)" />
          </div>
      </div>

      <input type="submit" class="btn btn-primary col-md-2 col-md-offset-8" value="Add Teacher" name="tcr" />
    </form>
    
  </div>


</div><br>
<!-- Contents, Tables, Forms, Images ended -->

</center>

<footer>

</footer>
</body>

<!-- Body ended  -->
</html>
