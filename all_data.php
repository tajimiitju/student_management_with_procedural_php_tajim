<?php
$db = new PDO('mysql:host=localhost;dbname=php-63;charset=utf8mb4', 'root', '');
$query = "SELECT * FROM `user_info`";
$stmt = $db->query($query);
$data =  $stmt->fetchAll(PDO::FETCH_ASSOC);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Students</title>

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

      <li class="active"><a href="all_data.php">All Students</a></li>
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

<div class="container">
    <h2><u>All the Students Are:</u></h2>
    
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Gander</th>
                <th>Subjects</th>
                <th>Hobby</th>
                <th>Image</th>
                <th>Date of Birth</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sl = 0;
            foreach ($data as $user){
                $sl ++;

                ?>
                <tr>
                    <td><?php echo $sl?></td>
                    <td><?php echo $user['name']?></td>
                    <td><?php echo $user['email']?></td>
                    <td><?php echo $user['password']?></td>
                    <td><?php echo $user['address']?></td>
                    <td><?php echo $user['mobile']?></td>
                    <td><?php echo $user['gender']?></td>
                    <td><?php echo $user['subjectcs']?></td>
                    <td><?php echo $user['hobby']?></td>
                    <td><img src="images/<?php echo $user['image_name']?>" alt="" height="50" width="50"></td>
                    <td><?php echo $user['dob']?></td>
                    <td>
                        <a  class="text-info" href="view.php?id=<?php echo $user['id']?>">View</a>
                        <a  class="text-primary" href="edit.php?id=<?php echo $user['id']?>">Edit</a>
                        <a class="text-danger" href="delete.php?id=<?php echo $user['id']?>">Delete</a>
                    </td>


                </tr>

            <?php }?>

            </tbody>
        </table>
    </div>
</div>

</body>
</html>






