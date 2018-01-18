<!DOCTYPE html>
<html>
<head>
	<title>Assign subject</title>
	<meta charset="UTF-8">
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

<?php


$db = new PDO('mysql:host=localhost;dbname=php-63;charset=utf8mb4', 'root', '');
$_POST['subject'] = implode(', ',$_POST['subject']);
	
	//echo $_POST['subject'];
	//echo "<br>";
    //echo $_POST['st_name'];
  //  echo "<br>";
//    echo $_POST['id'];


//$query = "INSERT INTO `php-63`.`user_info` (`subjectcs`) VALUES (NULL,'".$_POST['subject']."') WHERE `user_info`.`name` = ;".$_POST['st_name'];

$query = "UPDATE `php-63`.`user_info` SET `subjectcs`='".$_POST['subject']."' WHERE `user_info`.`id` = ".$_POST['id'];

$result = $db->exec($query);

if($result){
	echo "Subject Assigned Successfully";
    header("location:view.php?id=".$_POST['id']);
}

//$query = "SELECT * FROM `course` where id = ".$_GET['id'];
//$stmt = $db->query($query);
//$results =  $stmt->fetch(PDO::FETCH_ASSOC);


?>
</body>
</html>