<?php

session_start();

if ($_SESSION['email'] == true) 
{
	 $_SESSION['email'];
}
else
{
	header("location:Regi/log.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<style type="text/css">
		.text_p
    {
      font-size: 12px;
      padding-top: 15px;
    }
	</style>
</head>
<body>
	<form method="post">

<?php include 'navabar.php' ?>



<?php

include '../db_conn.php';

$email = $_SESSION['email'];

$sql = " select * from a_regi where email = '$email' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

$id = $row['id'];

?>

<?php

include '../db_conn.php';

$sql = " select * from a_regi where id = '$id' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

?>


<div class="container mt-4">
	<div class="row">
		<div class="col-md-12">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<img src="https://mir-s3-cdn-cf.behance.net/project_modules/2800_opt_1/902a15100681251.5f0e1a9f8ca0b.jpg" style="width: 100%; height: 500px; border-radius: 10px; object-fit: cover;">
					</div>
					<div class="col-md-4">
						<div class="container">
							<br>
							<h2>Profile</h2>

                             <h6 class="text_p">Fisrt Name</h6>
                             <input type="text" name="f_name" value="<?php echo $row['f_name']; ?>" class="form-control rounded-pill">

                             <h6 class="text_p">Last Name</h6>
                             <input type="text" name="l_name" value="<?php echo $row['l_name']; ?>" class="form-control rounded-pill">

                             <h6 class="text_p">Email Id</h6>
                             <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control rounded-pill">

                             <h6 class="text_p">Phone Number</h6>
                             <input type="text" name="phone" value="<?php echo $row['phone']; ?>" class="form-control rounded-pill">
                              <br>
                              <input type="submit" name="submit" value="Submit" class="btn btn-dark w-50 rounded-pill">


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>











<?php

include '../db_conn.php';

$email = $_SESSION['email'];

$sql = " select * from a_regi where email = '$email' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

$id = $row['id'];

?>

<?php

include '../db_conn.php';

if (isset($_POST['submit'])) 
{
	$f_name = $_POST['f_name'];
	$l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = " update a_regi set f_name = '$f_name' , l_name = '$l_name' , email = '$email' , phone = '$phone' where id = '$id' ";

    if (mysqli_query($conn,$sql)) 
    {
     echo '<meta http-equiv="refresh" content="0">';
    }
    else
    {
     echo "Not Done";
    }


}



?>
<br><br>

<?php include 'footer.php'; ?>

</form>

</body>
</html>