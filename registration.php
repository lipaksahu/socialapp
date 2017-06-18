<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Social App</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="./css/app.css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
		<?php
			include ('classes/DB.php');

			if(isset($_POST['registration'])){

				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$gender = $_POST['gender'];
				$mobilenumber = $_POST['mobilenumber'];
				$email = $_POST['email'];
				$password = $_POST['password'];

				$sql = " INSERT INTO `registration` (firstname, lastname, gender, mobilenumber, email, password)
				VALUES ('$firstname', '$lastname', '$gender', '$mobilenumber', '$email', '$password') ";

				DB::myQuery($sql);
			}
		?>
	</head>
<body>
	<div class="container">
		<form action="registration.php" method="POST" class="register-form"> 
	      <div class="row">      
	           <div class="col-md-4 col-sm-4 col-lg-4">
	              <label for="firstname">First Name</label>
	               <input name="firstname" class="form-control" type="text">    
	           </div>   
	      </div>
	      <div class="row">
	           <div class="col-md-4 col-sm-4 col-lg-4">
	              <label for="lastname">Last Name</label>
	               <input name="lastname" class="form-control" type="text">    
	           </div>             
	      </div>
	      <div class="row">
           	<div class="col-md-12">
           		<label for="gender">Gender</label>
              	<select class="form-control" name="gender">
					<option>Please select</option>
					<option>Male</option>
					<option>Female</option>
				</select>            
           	</div>            
	      </div>
	      <div class="row">
	           <div class="col-md-4 col-sm-4 col-lg-4">
	              <label for="mobilenumber">Mobile Number</label>
	               <input name="mobilenumber" class="form-control" type="text">    
	           </div>             
	      </div>
	      <div class="row">
           	<div class="col-md-4 col-sm-4 col-lg-4">
	              	<label for="email">Email</label>
	               <input name="email" class="form-control" type="email">             
           	</div>            
	      </div>
	      <div class="row">
	           <div class="col-md-4 col-sm-4 col-lg-4">
	              <label for="password">Password</label>
	               <input name="password" class="form-control" type="password">             
	           </div>            
	      </div>
	      <hr>
	      <div class="row">
	          <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
	           <button class="btn btn-default logbutton" name="registration" type="submit">Sign up</button>    </div>          
	      </div>    
	    </form>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.3.3/backbone-min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
