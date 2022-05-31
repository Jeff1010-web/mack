
<!DOCTYPE html>
<html>
<head>
	<title>Property</title>
</head>
<body>
<form method="post">
	<?php include 'navbar_un.php'; ?>

<center><h1 class="title-con">search your prefered property</h1></center>


<div class="container-title-con">
	<div class="row">
		<div class="column-search">
			<input type="text" name="city" placeholder="Enter City" class="form-control rounded-pill">
		</div>
		<div class="column-search">
			<select name="type" class="form-control rounded-pill">
				<option>Property Type</option>
				<option value="Building">Building</option>
				<option value="Office">Office</option>
			</select>
		</div>
		<div class="column-search">
			<select name="status" class="form-control rounded-pill">
				<option>Select Status</option>
				<option value="Sale">Sale</option>
				<option value="Rent">Rent</option>
			</select>
		</div>
		<div class="column-search">
			<input type="submit" name="submit" value="Search" class="btn btn-dark rounded-pill w-100">
		</div>
	</div>
</div>


<div class="container">
	
<div class="row">
<?php

include 'db_conn.php';

if (isset($_POST['submit'])) 
{

  $city = $_POST['city'];
  $type = $_POST['type'];
  $status = $_POST['status'];
  $sql = " select * from addproperty where city = '$city' or type = '$type' or status = '$status' ";

  $run = mysqli_query($conn,$sql); 
  

  while ($row = mysqli_fetch_array($run)) 
  {
  	?>

 

   
   	 <div class="column6">
   	 	 
   	 	 <div class="row title-con">
   	 	 	<div class="column6">
   	 	 		<img src="Image/<?php echo $row['img_1']; ?>" style="width: 100%; height: 200px; border-radius: 10px;">
   	 	 	</div>
   	 	 	<div class="column6">
   	 	 		<a style="text-decoration: none;" href="view_property.php?id=<?php echo $row['id']; ?>"><h6 style="white-space: nowrap; width: 100%; font-size: 18px; margin-top: 15px; color: #111; overflow: hidden; text-overflow: ellipsis;"><?php echo $row['title'] ?></h6></a>
   	 	 		<span style="font-size: 15px; color: #000;"><?php echo $row['city'] ?></span> <span style="font-size: 15px; color: #000;"><?php echo $row['state']; ?></span> <span style="font-size: 15px; color: #000;"><?php echo $row['country']; ?></span>
   	 	 		<h5 class="text-primary">Ksh;<?php echo $row['price'] ?></h5>
                
                <hr>

                <span><i class="fa fa-square-o" aria-hidden="true"></i> <?php echo $row['area']; ?></span> &nbsp&nbsp <span> <i class="fa fa-bed" aria-hidden="true"></i><?php echo $row['bedrooms']; ?></span> &nbsp&nbsp <span><i class="fa fa-bath" aria-hidden="true"></i> <?php echo $row['bathrooms']; ?></span>


   	 	 	</div>
   	 	 </div>

   	 </div>
  
  

 

  	<?php
  }


 }
 else
 {

?>
  


<div class="float-end">
	
<button type="submit" name="submit_list" class="btn float-end"><i class="fa fa-th" aria-hidden="true"></i></button>
<button type="submit" name="submit_grid" class="btn float-end"><i class="fa fa-list" aria-hidden="true"></i></button>

</div>


<?php

if (isset($_POST['submit_list'])) 
{
	?>

<div class="container">
  	<div class="row">
  	



  		<?php

   include 'db_conn.php';

  $sql = " select * from addproperty ";

  $run = mysqli_query($conn,$sql); 
  

  while ($row = mysqli_fetch_array($run)) 
  {
  	?>


 <div class="column7">
   	 	 
   	 	 <div class="row7">
   	 	 	<div class="column8">
   	 	 		<img src="Image/<?php echo $row['img_1']; ?>" style="width: 100%; height: 200px; border-radius: 10px; object-fit: cover;">
   	 	 		<a style="text-decoration: none;" href="view_property.php?id=<?php echo $row['id']; ?>"><h6 style="white-space: nowrap; width: 100%; font-size: 18px; margin-top: 15px; color: #111; overflow: hidden; text-overflow: ellipsis;"><?php echo $row['title'] ?></h6></a>
   	 	 		<span style="font-size: 15px; color: #000;"><?php echo $row['city'] ?></span> <span style="font-size: 15px; color: #000;"><?php echo $row['state']; ?></span> <span style="font-size: 15px; color: #000;"><?php echo $row['country']; ?></span>
   	 	 		<h5 class="amenities">Ksh;<?php echo $row['price'] ?></h5>
                
                <hr>

                <span><i class="fa fa-square-o" aria-hidden="true"></i> <?php echo $row['area']; ?></span> &nbsp&nbsp <span> <i class="fa fa-bed" aria-hidden="true"></i><?php echo $row['bedrooms']; ?></span> &nbsp&nbsp <span><i class="fa fa-bath" aria-hidden="true"></i> <?php echo $row['bathrooms']; ?></span>
   	 	 	</div>
   	 	 </div>

   	 </div>





 <?php } ?>
        


</div>
</div>




	<?php
}
elseif (isset($_POST['submit_grid'])) 
{
?>



 <div class="container">
  	<div class="row">
  	



  		<?php

   include 'db_conn.php';

  $sql = " select * from addproperty ";

  $run = mysqli_query($conn,$sql); 
  

  while ($row = mysqli_fetch_array($run)) 
  {
  	?>

 

   
   	 <div class="column6">
   	 	 
   	 	 <div class="row6">
   	 	 	<div class="column6">
   	 	 		<img src="Image/<?php echo $row['img_1']; ?>" style="width: 100%; height: 200px; border-radius: 10px;">
   	 	 	</div>
   	 	 	<div class="column6">
   	 	 		<a style="text-decoration: none;" href="view_property.php?id=<?php echo $row['id']; ?>"><h6 style="white-space: nowrap; width: 100%; font-size: 18px; margin-top: 15px; color: #111; overflow: hidden; text-overflow: ellipsis;"><?php echo $row['title'] ?></h6></a>
   	 	 		<span style="font-size: 15px; color: #000;"><?php echo $row['city'] ?></span> <span style="font-size: 15px; color: #000;"><?php echo $row['state']; ?></span> <span style="font-size: 15px; color: #000;"><?php echo $row['country']; ?></span>
   	 	 		<h5 class="text-primary">ksh;<?php echo $row['price'] ?></h5>
                
                <hr>

                <span><i class="fa fa-square-o" aria-hidden="true"></i> <?php echo $row['area']; ?></span> &nbsp&nbsp <span> <i class="fa fa-bed" aria-hidden="true"></i><?php echo $row['bedrooms']; ?></span> &nbsp&nbsp <span><i class="fa fa-bath" aria-hidden="true"></i> <?php echo $row['bathrooms']; ?></span>


   	 	 	</div>
   	 	 </div>

   	 </div>



<?php
 } 
?>

</div>
  </div>





<?php
}
else
{


?>



  <div class="container">
  	<div class="row">
  	



  		<?php

   include 'db_conn.php';

  $sql = " select * from addproperty ";

  $run = mysqli_query($conn,$sql); 
  

  while ($row = mysqli_fetch_array($run)) 
  {
  	?>

 

   
   	 <div class="column6">
   	 	 
   	 	 <div class="row6">
   	 	 	<div class="column6">
   	 	 		<img src="Image/<?php echo $row['img_1']; ?>" style="width: 100%; height: 200px; border-radius: 10px;">
   	 	 	</div>
   	 	 	<div class="column6">
   	 	 		<a style="text-decoration: none;" href="view_property.php?id=<?php echo $row['id']; ?>"><h6 style="white-space: nowrap; width: 100%; font-size: 18px; margin-top: 15px; color: #111; overflow: hidden; text-overflow: ellipsis;"><?php echo $row['title'] ?></h6></a>
   	 	 		<span style="font-size: 15px; color: #000;"><?php echo $row['city'] ?></span> <span style="font-size: 15px; color: #000;"><?php echo $row['state']; ?></span> <span style="font-size: 15px; color: #000;"><?php echo $row['country']; ?></span>
   	 	 		<h5 class="text-primary">ksh;<?php echo $row['price'] ?></h5>
                
                <hr>

                <span><i class="fa fa-square-o" aria-hidden="true"></i> <?php echo $row['area']; ?></span> &nbsp&nbsp <span> <i class="fa fa-bed" aria-hidden="true"></i><?php echo $row['bedrooms']; ?></span> &nbsp&nbsp <span><i class="fa fa-bath" aria-hidden="true"></i> <?php echo $row['bathrooms']; ?></span>


   	 	 	</div>
   	 	 </div>

   	 </div>



<?php
 } } }
?>

</div>
  </div>

 </div>
</div>













<br><br>


<?php include 'footer_un.php'; ?>
</form>
</body>
</html>