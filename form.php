<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration form</title>

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
      <li class="active"><a href="form.php">Add Student</a></li>

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

	<form action="store.php" method="POST" enctype="multipart/form-data">
		<div class="box">
			<hr>
			<div class="form-group">
				<label for="name">Enter Your Name:</label>
				<input type="text" name="name" id="name" class="form-control">
			</div>
			<div class="form-group">
				<label for="email">Enter Your Email:</label>
				<input id="email" type="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="pass">Enter Your Password:</label>
				<input type="password" name="password" class="form-control">
				
			</div>
			<div class="form-group">
				<label for="address">Enter Your Address:</label>
				<textarea id="address" name="address" class="form-control"></textarea>	
			</div>
			<div class="form-group">
				<label for="cell">Enter Your Mobile:</label>
				<input id="cell" type="text" name="mobile" class="form-control">
			</div>
				
			<div class="form-group">
				<label>Select your Gender:</label>
				  <input id="male" type="radio" name="gender" value="male">
				  <label for="male">Male</label>
				  
				<input id="female" type="radio" name="gender" value="female">
				<label for="female">Female</label>
			</div>

			<div class="form-group">
				<label for="name">Check your hobbies:</label>
				
				<input id="cricket" type="checkbox" name="hobby[]" value="cricket">
				<label for="cricket">Cricket</label>
				
				<input id="sing" type="checkbox" name="hobby[]" value="singing">
				<label for="sing">Singing</label>
				
				<input id="dance" type="checkbox" name="hobby[]" value="dancing">
				<label for="dance">Dancing</label>
			</div>
				
			<div class="form-group">
				<label for="image">Chosose yor profile pic</label>
				<input id="image" type="file" name="image" class="btn btn-default">
			</div>
			
			<div class="form-group">
				<label>Select your DOB:</label>
				<select name="day" class="btn btn-default">
					<option value="">Day</option>
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>
					<option value="04">04</option>
					<option value="05">05</option>
					<option value="06">06</option>
					<option value="07">07</option>
					<option value="08">08</option>
					<option value="09">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
				</select>
				<select name="month" class="btn btn-default">
					<option value="">Month</option>
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>
					<option value="04">04</option>
					<option value="05">05</option>
					<option value="06">06</option>
					<option value="07">07</option>
					<option value="08">08</option>
					<option value="09">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
				</select>
				<select name="year" class="btn btn-default">
					<option value="">Year</option>
					<option value="2001">2001</option>
					<option value="2002">2002</option>
					<option value="2003">2003</option>
					<option value="2004">2004</option>
					<option value="2005">2005</option>
					<option value="2006">2006</option>
					<option value="2007">2007</option>
					<option value="2008">2008</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
				</select>
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="Register" class="btn btn-success">
				<input type="reset" name="submit" value="Reset" class="btn btn-info">
			</div>
		</div>
	</form>

</body>
</html>