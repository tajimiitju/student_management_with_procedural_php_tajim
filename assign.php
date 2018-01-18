<?php


$db = new PDO('mysql:host=localhost;dbname=php-63;charset=utf8mb4', 'root', '');
//$query = "SELECT * FROM `course` where id = ".$_GET['id'];
//$query = "SELECT * FROM `course`";
//$stmt = $db->query($query);
//$results =  $stmt->fetch(PDO::FETCH_ASSOC);

$query = "SELECT * FROM `user_info`";
$stmt = $db->query($query);
$data =  $stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump($results);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assign Student Subjects</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<hr>
<h1 style="text-align: center;">Sudent Management System With Database CRUD and PHP</h1>
<hr>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">tajim iitju</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
      <li><a href="course.php">Add Course</a></li>
      <li><a href="form.php">Add Student</a></li>
      <li><a href="all_data.php">All Students</a></li>
      <li><a href="all_course.php">All Courses</a></li>
      <li class="active"><a href="assign.php">Assign Student and Courses</a></li>
    </ul>
    <form class="navbar-form navbar-left">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>


<h2>Assign Student Subjects</h2>

<form action="assign_a.php" method="POST" enctype="multipart/form-data">
    <div class="box">
        <hr>
        
        <div class="form-group">
            <div class="form-group">
            <label for="name">Select Student:</label>
            <br>
            <select name="id" class="btn btn-default">
                <option value="">Select Student</option>
                <?php
                $i="";
                $ii="";
                foreach ($data as $uu){
                    if($ii==$uu['name']){
                        $key = 'selected';
                    }else{
                        $key = '';
                    }
                    echo "<option $key value=".$uu['id'].">".$uu['name']." Id = ".$uu['id']."</option>";
                  }
                /*
                foreach ($data as $user){
                    if($i==$user['name']){
                        $key = 'selected';
                    }else{
                        $key = '';
                    }
                    echo "<option $key value='$i'>$i</option>";
                }
                */
                ?>
            </select>

            <div class="form-group">
                <hr>
                <label for="name">Assign Subjects:</label>
                <br>
                <?php 
                  $query2 = "SELECT `c_title` FROM `course`";
                  $stmt2 = $db->query($query2);
                  $data2 =  $stmt2->fetchAll(PDO::FETCH_ASSOC);

                  foreach ($data2 as $u){
              
                    if($i==$u['c_title']){
                        $key = 'selected';
                    }else{
                        $key = '';
                    }
                    /*
                    echo "<option $key value='$i'>".$u['c_title']."</option>";
                    */

                    echo "<input type='checkbox' name='subject[]' value=".$u['c_title'].">
                      <label>".$u['c_title']."</label>"."<br>";
                  }
                 ?>
            </div>
            
        </div>

        
        <div class="form-group">
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-info">
        </div>
        <hr>
    </div>
</form>

</body>
</html>
