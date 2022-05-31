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
	<title>Request Property</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
	

<?php include 'navabar.php' ?>



<div class="container mt-2">
  <h3>Request Property</h3>
</div>










<br>





<?php

include 'db_conn.php';

$email = $_SESSION['email'];

$sql = " select * from a_regi where email = '$email' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

$id = $row['id'];

?>


<center>
	<div class="table-responsive">
	<table class="table">
		<tr>
			<td>Image</td>
			<td>Property Name</td>
			<td>User Name</td>
			<td>Email Id</td>
			<td>Contact</td>
			<td>Action</td>
		</tr>

<?php

include 'db_conn.php';

$sql = " select * from request where user_id = '$id' ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
	$property_id = $row['property_id'];
?>

<?php

include 'db_conn.php';

$sqll = " select * from addproperty where id = '$property_id' ";

$raua = mysqli_query($conn,$sqll);

while ($raaow = mysqli_fetch_array($raua)) 
{

?>



		<tr>
			<td><img src="../Image/<?php echo $raaow['img_1'] ?>" height="100" width="100"></td>
			<td><?php echo $raaow['title'] ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['phone']; ?></td>
			<td><a href="req_detail.php?id=<?php echo $row['id']; ?>"><input type="button" name="" value="View Detail" class="btn btn-dark rounded-pill"></a></td>
		</tr>

	<?php } } ?>
	</table>
	</div>
</center>





</form>
</body>
</html>