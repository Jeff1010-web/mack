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
	<title>Home Page</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
	.bg
	{
       background: url("Image/s2.jpg");
       height: 600px; width: 100%; 
	object-fit: cover;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
	
	}
	.big_text
	{
		color: #fff;
		font-size: 60px;
		margin-top: 185px;
	}
	.bg_search
	{
		background: rgba( 255, 255, 255, 0.10 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 11.5px );
-webkit-backdrop-filter: blur( 11.5px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
	}
	.text_p
	{
			font-size: 12px;
			padding-top: 15px;
			color: #fff;
	}
	.bg_two
	{
		 background: url("https://mir-s3-cdn-cf.behance.net/project_modules/fs/3067eb113434651.6027b0617583a.jpg");
       height: 500px; width: 100%; 
	object-fit: cover;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
	}
	footer
	{
		background: #001;
		color: #fff;
	}
	.icona
	{
		padding:8px;

	}
	</style>
</head>
<body>


	<?php include 'navabar.php' ?>
	



<div class="bg">
	

      <div class="container">
      	<div class="row">
      		<div class="col-md-6">
      			<div class="container mt-5">
      				<div class="row">
      					<div class="col-md-8">
      						<div class="bg_search">
      				            <div class="container">
      				            	<br>
      				            	<h2 style="color: #fff;">Search for properties:</h2>
                                    <form action="search.php" method="post">
                                    	
                                    
                                    <h6 class="text_p">Keyword</h6>
                                    <input type="text" name="key" placeholder="Any" class="form-control rounded-pill">

                                    <h6 class="text_p">Property status</h6>
                                    <select name="p_status" class="form-control rounded-pill">
                                    	<option>Any</option>
                                    	<option>Rent</option>
                                    	<option>Sale</option>
                                    </select>

                                    <h6 class="text_p">Property type</h6>
                                    <select name="p_type" class="form-control rounded-pill">
                                    	<option>Any</option>
                                    	<option>Building</option>
                                    	<option>Office</option>
                                    </select>

                                     <h6 class="text_p">Location</h6>
                                   <input type="text" name="location" placeholder="Enter Location" class="form-control rounded-pill">

                                   <br>

                                    

                                   <input type="submit" name="submit" value="Search" class="btn btn-primary rounded-pill w-100">
                                   
                                  </form>
<br><br>
      				            </div>
      			            </div>
      					</div>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<h1 class="big_text">The best way to find your home</h1>
      		</div>
      	</div>
      </div>


</div>





<form method="post">





<div class="container mt-5">
	<div class="row">
		<?php

include '../db_conn.php';

$sql = " select * from addproperty limit 2 ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
	
?>

		<div class="col-md-6">
			<img src="../Image/<?php echo $row['img_1']; ?>" style="width: 100%; height: 400px; border-radius: 10px 10px 0px 0px;">
			<div class="card" style="border-radius: 0px 0px 10px 10px;">
				<div class="card-body">
					<a style="text-decoration: none;" href="view_property.php?id=<?php echo $row['id']; ?>"><h2 style="white-space: nowrap; width: 100%; color: #111; overflow: hidden; text-overflow: ellipsis;"><?php echo $row['title'] ?></h2></a>
					<h3 class="text-primary">ksh;<?php echo $row['price'] ?></h3>
					<a href="view_property.php?id=<?php echo $row['id']; ?>"><input type="button" name="" value="Read More" class="btn btn-dark rounded-pill " style="width: 150px;"></a>
				</div>
			</div>
		</div>
		
	<?php } ?> 
	</div>
</div>





<div class="container mt-5">
	<div class="row">
		<?php

include '../db_conn.php';

$sql = " select * from addproperty ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
	
?>

		<div class="col-md-4 mt-4">
			<img src="../Image/<?php echo $row['img_1']; ?>" style="width: 100%; height: 300px; border-radius: 10px 10px 0px 0px; object-fit: cover;">
			<div class="card" style="border-radius: 0px 0px 10px 10px;">
				<div class="card-body">
					<a style="text-decoration: none;" href="view_property.php?id=<?php echo $row['id']; ?>"><h4 style="white-space: nowrap; text-decoration: none; color: #111; width: 100%; overflow: hidden; text-overflow: ellipsis;"><?php echo $row['title'] ?></h4></a>
					<h5 class="text-primary">ksh;<?php echo $row['price'] ?></h5>
					<a href="view_property.php?id=<?php echo $row['id']; ?>"><input type="button" name="" value="Read More" class="btn btn-dark rounded-pill " style="width: 150px;"></a>
				</div>
			</div>
		</div>
		
	<?php } ?> 
	</div>
</div>



<br>
<div class="bg_two">
	<div class="container">
		<div class="row">
			<div class="col-md-6"><br><br><br>
				<h1 style="font-size: 51px; color: #fff;">We tirelessly search.</h1>
				<h3 style="color: #fff;">For as a diverse range of properties as possible
                So you can have an optimal range of choice!</h3>
			</div>
		</div>
	</div>
</div>





<?php include 'footer.php'; ?>




</form>



</body>
</html>