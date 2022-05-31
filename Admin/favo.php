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
	<title>Favourite</title>
</head>
<body>
<form method="post">
	
	<?php include 'navabar.php' ?>



<div class="container mt-2">
  <h3>My Favourites</h3>
</div>


         
         <div class="container">
         	<div class="row">
         		<div class="col-md-8 m-auto">
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

$sql = " select * from favourite where user_id = '$id' ";

$dssdsd = mysqli_query($conn,$sql);

while ($rar = mysqli_fetch_array($dssdsd)) 
{

  $property_id = $rar['property_id'];

?>


			<?php

include '../db_conn.php';

$sql = " select * from addproperty where id = '$property_id' ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
	
?>

         				<div class="col-md-5 mt-3">
         					<img src="../Image/<?php echo $row['img_1']; ?>" style="height: 220px; width: 100%; border-radius: 10px;">
         				</div>
         				<div class="col-md-7 mt-3">
         					
         					<a style="text-decoration: none;" href="view_property.php?id=<?php echo $row['id']; ?>"><h6 style="white-space: nowrap; width: 100%; font-size: 18px; margin-top: 15px; color: #111; overflow: hidden; text-overflow: ellipsis;"><?php echo $row['title'] ?></h6></a>

         					<span style="font-size: 11px; color: #0008;"><?php echo $row['city'] ?></span> <span style="font-size: 11px; color: #0008;"><?php echo $row['state']; ?></span> <span style="font-size: 11px; color: #0008;"><?php echo $row['country']; ?></span>
   	 	 		<h5 class="text-primary mt-2">ksh;<?php echo $row['price'] ?></h5>

   	 	 		 <hr>

                <span><i class="fa fa-square-o" aria-hidden="true"></i> <?php echo $row['area']; ?></span> &nbsp&nbsp <span> <i class="fa fa-bed" aria-hidden="true"></i><?php echo $row['bedrooms']; ?></span> &nbsp&nbsp <span><i class="fa fa-bath" aria-hidden="true"></i> <?php echo $row['bathrooms']; ?></span>





         				</div>
         		<?php } } ?>
         			</div>
         		</div>
         	</div>
         </div>
 







<br><br>

<?php include 'footer.php'; ?>	



</form>
</body>
</html>