
<?php

$db = new PDO('mysql:host=localhost;dbname=php-63;charset=utf8mb4', 'root', '');
$query = "SELECT * FROM `course` where id = ".$_GET['id'];
$stmt = $db->query($query);
$results =  $stmt->fetch(PDO::FETCH_ASSOC);



?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration form</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/style.css">

    <style>
        label{
            display: block;
            border-bottom: 2px solid green;
            padding: 7px 5px;
        }
    </style>
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
      <li><a href="assign.php">Assign Student and Courses</a></li>
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



<div class="area">
    <h3>Course Information Show</h3>
    <hr>
    <label for="">Course Title: <i><?php $n = $results['c_title']; echo $n;?></i></label>

    <label for="">Course Code:<i><?php echo $results['c_code']?></i></label>

    <label for="">Course Duration:<i><?php echo $results['c_duration']?></i></label>

    <label for="">Course Credit:<i><?php echo $results['c_credit']?></i></label>

    <label for="">Course Teacher:<i><?php echo $results['c_teacher']?></i></label>
    
    <h4>Course Students:</h4>
    <?php 
      $query = "SELECT `name` FROM `user_info` WHERE `subjectcs` LIKE '%".$n."%'";
      $stmt = $db->query($query);
      $data =  $stmt->fetchAll(PDO::FETCH_ASSOC);

      //var_dump($data);
      //echo $data;
      //die();
     
     foreach ($data as $user){
     ?>
     <i><?php echo $user['name'].", "; ?></i>
     <?php }?>
    

</div>

</body>
</html>