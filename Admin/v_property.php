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
	<title>View Property</title>
</head>
<body>



<?php include 'navabar.php' ?>




<div class="container mt-2">
  <h3>Your Property</h3>
</div>


<div class="container mt-3">
	<div class="row">

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

     $sql = " select * from addproperty where user_id = '$id' ";
   
     $run = mysqli_query($conn,$sql);
    

    while ($row = mysqli_fetch_array($run)) 
    {
    	

    ?>


		<div class="col-md-6 mt-3">
			<div class="row">
				<div class="col-md-6">
					<img src="../Image/<?php echo $row['img_1']; ?>" style="width: 100%; height: 210px; border-radius: 10px;">
				</div>
				<div class="col-md-6">
					<a style="text-decoration: none;" href="view_property.php?id=<?php echo $row['id']; ?>"><h6 style="white-space: nowrap; width: 100%; font-size: 18px; margin-top: 15px; color: #111; overflow: hidden; text-overflow: ellipsis;"><?php echo $row['title'] ?></h6></a>

					<span style="font-size: 11px; color: #0008;"><?php echo $row['city'] ?></span> <span style="font-size: 11px; color: #0008;"><?php echo $row['state']; ?></span> <span style="font-size: 11px; color: #0008;"><?php echo $row['country']; ?></span>
   	 	 		<h5 class="text-primary mt-2">ksh;<?php echo $row['price'] ?></h5>

   	 	 		 <hr>

                <span><i class="fa fa-square-o" aria-hidden="true"></i> <?php echo $row['area']; ?></span> &nbsp&nbsp <span> <i class="fa fa-bed" aria-hidden="true"></i><?php echo $row['bedrooms']; ?></span> &nbsp&nbsp <span><i class="fa fa-bath" aria-hidden="true"></i> <?php echo $row['bathrooms']; ?></span>

                <a href="edit_property.php?id=<?php echo $row['id']; ?>"><input type="button" name="" value="Edit Info" class="btn btn-dark rounded-pill mt-2 w-50"></a>


				</div>
			</div>
		</div>

<?php }  ?>

	</div>
</div>









<br><br>



<?php include 'footer.php'; ?>







</body>
</html>