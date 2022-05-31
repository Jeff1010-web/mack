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
	<title>Request Detail</title>
</head>
<body>

<?php include 'navabar.php' ?>

<form method="post">



<div class="container mt-2">
  <h3>Request Detail</h3>
</div>



 <div class="container">
         	<div class="row">
         		<div class="col-md-8 m-auto">
         			<div class="row">


<?php

$id = $_GET['id'];

include '../db_conn.php';

$sql = " select * from request where id = '$id' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

$property_id = $row['property_id'];

?>

<?php

include '../db_conn.php';

$sqll = " select * from addproperty where id = '$property_id' ";

$raua = mysqli_query($conn,$sqll);

$raaow = mysqli_fetch_array($raua);

?>







	<div class="col-md-5 mt-3">
         					<img src="../Image/<?php echo $raaow['img_1']; ?>" style="height: 220px; width: 100%; border-radius: 10px;">
         				</div>
         				<div class="col-md-7 mt-3">
         					
         					<a style="text-decoration: none;" href="view_property.php?id=<?php echo $raaow['id']; ?>"><h6 style="white-space: nowrap; width: 100%; font-size: 18px; margin-top: 15px; color: #111; overflow: hidden; text-overflow: ellipsis;"><?php echo $raaow['title'] ?></h6></a>

         					<span style="font-size: 11px; color: #0008;"><?php echo $raaow['city'] ?></span> <span style="font-size: 11px; color: #0008;"><?php echo $raaow['state']; ?></span> <span style="font-size: 11px; color: #0008;"><?php echo $raaow['country']; ?></span>
   	 	 		<h5 class="text-primary mt-2">ksh;<?php echo $raaow['price'] ?></h5>

   	 	 		 <hr>

                <span><i class="fa fa-square-o" aria-hidden="true"></i> <?php echo $raaow['area']; ?></span> &nbsp&nbsp <span> <i class="fa fa-bed" aria-hidden="true"></i><?php echo $raaow['bedrooms']; ?></span> &nbsp&nbsp <span><i class="fa fa-bath" aria-hidden="true"></i> <?php echo $raaow['bathrooms']; ?></span>





         				</div>
         
         			</div>
         		</div>
         	</div>
         </div>


  
 <div class="container mt-5">
 	<div class="row">
 	 <div class="col-md-8 m-auto">
  	   <h4>User Detail</h4>
       
       <div class="row mt-3">
       	<div class="col-md-2">
       		<center>
       			 <?php $content = $row['name']; ?> <h3 style="background: #0001; border-radius: 50px; text-align: center; line-height: 50px; width: 52px; height: 50px;"><?php echo $a = $content[0]; ?></h3>
       		</center>
       	</div>
       	<div class="col-md-10">
       		<h6><?php echo $row['name']; ?></h6>
       		<h6 style="font-size: 12px; color: gray; line-height: 2px;"><?php echo $row['email']; ?></h6>
       		<h6 style="font-size: 12px; color: gray;"><?php echo $row['phone']; ?></h6>
       	</div>
       </div>

       <div class="row mt-3">
       	<div class="col-md-2">
       		<center>Message</center>
       	</div>
       	<div class="col-md-10">
       		<?php echo $row['message']; ?> &nbsp&nbsp&nbsp <span style="font-size: 11px; color: gray;"><?php echo $row['date_e']; ?></span>
       	</div>
       </div>


     </div>
    </div>
 </div>


  <?php

     if ($row['remark'] == '') 
     {
     	?>


<div class="container mt-4">
	<div class="row">
		<div class="col-md-8 m-auto">
			<h4>Write Remark</h4>
           
           <h6 class="text_p">Remark</h6>
<textarea name="remark" rows="10" placeholder="Enter Remark" cols="50" class="form-control"></textarea>
<input type="submit" name="submit" value="submit" class="btn btn-dark rounded-pill mt-3" style="width: 150px;">


		</div>
	</div>
</div>




     	<?php
     }
     else
     {
     	?>
          
          <h2>Remark Sended</h2>

     	<?php
     }


     ?>

<br>


 






<?php

$id = $_GET['id'];

$datae = date("m/d/y G.i:s");

include '../db_conn.php';

if (isset($_POST['submit'])) 
{

	$remark = $_POST['remark'];


	$sql = " update request set remark = '$remark' , datea = '$datae' where id = '$id' ";


	if (mysqli_query($conn,$sql)) 
	{
		echo "Done";
	}
	else
	{
		echo "Not Done";
	}
  

}


?>
<br>
<?php include 'footer.php'; ?>


	</form>

</center>




</body>
</html>