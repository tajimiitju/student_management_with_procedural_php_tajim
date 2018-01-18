<?php


$db = new PDO('mysql:host=localhost;dbname=php-63;charset=utf8mb4', 'root', '');
$query = "SELECT * FROM `user_info` where id = ".$_GET['id'];
$stmt = $db->query($query);
$results =  $stmt->fetch(PDO::FETCH_ASSOC);

//var_dump($results);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Students Info</title>

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


<h2>Registration Form</h2>

<form action="update.php" method="POST" enctype="multipart/form-data">
    <div class="box">
        <hr>
        <div class="form-group">
            <label for="name">Enter Your Name:</label>
            <input type="text" name="name" value="<?php echo $results['name']?>" id="name" class="form-control">
            <input type="hidden" name="id" value="<?php echo $results['id']?>" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Enter Your Email:</label>
            <input id="email" type="email" value="<?php echo $results['email']?>" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="pass">Enter Your Password:</label>
            <input type="text" value="<?php echo $results['password']?>" name="password" class="form-control">

        </div>
        <div class="form-group">
            <label for="address">Enter Your Address:</label>
            <textarea id="address" name="address" class="form-control"><?php echo $results['address']?></textarea>
        </div>
        <div class="form-group">
            <label for="cell">Enter Your Mobile:</label>
            <input id="cell" type="text" value="<?php echo $results['mobile']?>" name="mobile" class="form-control">
        </div>
        <div class="form-group">
            <label>Select your Gender:</label>
            <input id="male" type="radio" <?php echo ($results['gender']=='male')? 'checked':'';?> name="gender" value="male">
            <label for="male">Male</label>

            <input id="female" type="radio" <?php echo ($results['gender']=='female')? 'checked':'';?> name="gender" value="female">
            <label for="female">Female</label>
        </div>

        <div class="form-group">
            <label for="name">Check your hobbies:</label>

            <input id="cricket" type="checkbox" <?php echo (in_array('cricket', explode(', ',$results['hobby'])))?'checked':''?> name="hobby[]" value="cricket">
            <label for="cricket">Cricket</label>

            <input id="sing" type="checkbox" <?php echo (in_array('singing', explode(', ',$results['hobby'])))?'checked':''?> name="hobby[]" value="singing">
            <label for="sing">Singing</label>

            <input id="dance" type="checkbox" <?php echo (in_array('dancing', explode(', ',$results['hobby'])))?'checked':''?> name="hobby[]" value="dancing">
            <label for="dance">Dancing</label>
        </div>

        <div class="form-group">
            <label for="image">Chosose yor profile pic</label>
            <input id="image" type="file" name="image" class="btn btn-default">
        </div>

        <?php

        $date = explode('-', $results['dob']);
        ?>

        <div class="form-group">
            <label>Select your DOB:</label>
            <select name="day" class="btn btn-default">
                <option value="">Day</option>
                <?php
                for($i=1; $i<=31; $i++){
                    if($i==$date[0]){
                        $key = 'selected';
                    }else{
                        $key = '';
                    }
                    echo "<option $key value='$i'>$i</option>";
                }
                ?>


            </select>
            <select name="month" class="btn btn-default">
                <option value="">Month</option>
                <?php
                for($i=1; $i<=12; $i++){
                    if($i==$date[1]){
                        $key = 'selected';
                    }else{
                        $key = '';
                    }
                    echo "<option $key value='$i'>$i</option>";
                }
                ?>
            </select>
            <select name="year" class="btn btn-default">
                <option value="">Year</option>
                <?php
                for($i=1990; $i<=2017; $i++){
                    if($i==$date[2]){
                        $key = 'selected';
                    }else{
                        $key = '';
                    }
                    echo "<option $key value='$i'>$i</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Update" class="btn btn-primary">
            <input type="reset" name="submit" value="Reset" class="btn btn-info">
        </div>
    </div>
</form>

</body>
</html>
