<?php

session_start();


?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
	<title>Log In</title>
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
		@media only screen and (max-width: 600px) {
         .img_r
         {
         	display: none;
         }
}
	</style>
</head>
<body>
<form method="post">
	



       
       <div class="container mt-5">
	<div class="row shadow" style="border-radius: 15px;">
		<div class="col-md-8">
			<img src="../Image/p2.jpg" style="height: 550px; width: 100%; object-fit: cover; border-radius: 15px;" class="img_r">
		</div>
		<div class="col-md-4">
			<div class="container">
				<br><br><br><br>
				<h3>Log In</h3>
                 
                 <h6 class="text_p">Email Id</h6>
                 <input type="text" name="email" placeholder="Enter Email Id" class="form-control rounded-pill">

                 <h6 class="text_p">Password</h6>
                 <input type="password" name="pass" placeholder="Enter Password" class="form-control rounded-pill">

<br>
                 <input type="submit" name="submit" value="Log In" class="btn btn-dark rounded-pill w-100">
<br>
                 <h6 style="padding-top: 15px; font-size: 12px;">I Don't have account ? <a href="a_regi.php" style="text-decoration: none;">Registration</a></h6>
<br>
			</div>
		</div>
	</div>
</div>











<?php

$conn = mysqli_connect("localhost:8111","root","1234","estate");

if (isset($_POST['submit'])) 
{
	
	 $email = $_POST['email'];
	 $pass = $_POST['pass'];

	 $pass = md5($pass);

	 $sql = " select * from a_regi where email = '$email' and pass = '$pass' ";
     
     $run = mysqli_query($conn,$sql);

	 if (mysqli_num_rows($run)) 
	 {
	 	$_SESSION['email'] = $email;
	 	header("location:../index.php");
     }
     else
     {
     	echo "Not Done";
     }


}


?>

</form>
</body>
</html>