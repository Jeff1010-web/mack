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
	<title></title>
</head>
<body>

<?php

include 'navabar.php';

?>


<form method="post" action="search.php">
	






 <div class="container">
         	<div class="row">
         		<div class="col-md-8 m-auto">
         			<div class="row">

<?php

error_reporting(0);

include '../db_conn.php';


	$key = $_POST['key'];
	$p_status = $_POST['p_status'];
	$p_type = $_POST['p_type'];
	$location = $_POST['location'];

    $sql = " select * from addproperty where status = '$p_status' or type = '$p_type' or location = '$location' or title Like '%$key%' ";

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
         		<?php }  ?>
         			</div>
         		</div>
         	</div>
         </div>
 





















<br><br>

<?php include 'footer.php'; ?> 





</form>
</body>
</html>