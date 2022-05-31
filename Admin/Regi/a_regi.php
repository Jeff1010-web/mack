<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
	<title>Registration</title>
	<style type="text/css">
		body
		{
			font-family: 'Poppins', sans-serif;
		}
		.text_p
		{
			font-size: 12px;
			padding-top: 15px;
		}
	</style>
</head>
<body>
<form method="post">
	
<div class="container mt-5">
	<div class="row shadow" style="border-radius: 15px;">
		<div class="col-md-8">
			<img src="p1.jpg" style="height: 550px; width: 100%; object-fit: cover; border-radius: 15px;">
		</div>
		<div class="col-md-4">
			<div class="container">
				<br>
				<h3>Registration</h3>
                 
                 <h6 class="text_p">First Name</h6>
                 <input type="text" name="f_name" placeholder="Enter First Name" class="form-control rounded-pill">

                 <h6 class="text_p">Last Name</h6>
                 <input type="text" name="l_name" placeholder="Enter Last Name" class="form-control rounded-pill">

                 <h6 class="text_p">Email Id</h6>
                 <input type="text" name="email" placeholder="Enter Email Id" class="form-control rounded-pill">
				 <h6 class="text_p">Phone number</h6>
                 <input type="text" name="phone" placeholder="Enter phone number" class="form-control rounded-pill">
                 <h6 class="text_p">Password</h6>

                 <input type="Password" name="pass" placeholder="Enter Password" class="form-control rounded-pill">

                  <h6 class="text_p">Confirm Password</h6>
                 <input type="Password" name="c_pass" placeholder="Enter Confirm Password" class="form-control rounded-pill">
<br>
                 <input type="submit" name="submit" value="Registration" class="btn btn-dark rounded-pill w-100">
<br>
                 <h6 style="padding-top: 15px; font-size: 12px;">I Have an account ? <a href="log.php" style="text-decoration: none;">Log In</a></h6>

			</div>
		</div>
	</div>
</div>






	





<?php

$conn = mysqli_connect("localhost:8111","root","1234","estate");

if (isset($_POST['submit'])) 
{
	
	 $f_name = $_POST['f_name'];
	 $l_name = $_POST['l_name'];
	 $email = $_POST['email'];
	 $phone = $_POST['phone'];
	 $pass = $_POST['pass'];
	 $c_pass = $_POST['c_pass'];

	 $pass = md5($pass);
	 $c_pass = md5($c_pass);

	 $sql = " insert into a_regi (f_name,l_name,email,phone,pass,c_pass) values ('$f_name','$l_name','$email','$phone','$pass','$c_pass') ";

	 if (mysqli_query($conn,$sql)) 
	 {
	 	header("location:log.php");
     }
     else
     {
     	echo "Not Done";
     }


}


?>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</form>
</body>
</html>