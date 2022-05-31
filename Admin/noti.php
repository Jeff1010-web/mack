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
<form method="post">

	<?php include 'navabar.php' ?>




<div class="container mt-2">
  <h3>Notification</h3>
</div>
    	

<?php

$email = $_SESSION['email'];

include '../db_conn.php';

$sql = " select * from request where email = '$email' ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{

 $sender_id = $row['user_id'];

?>
  
  <?php

   include '../db_conn.php';
  
   $asas = " select * from a_regi where id = '$sender_id' ";

   $tat = mysqli_query($conn,$asas);
   
   while ($roo = mysqli_fetch_array($tat)) 
   {
 

  ?>

          
          <div class="container mt-4">
            <div class="row">
              <div class="col-md-6 m-auto">
                <div class="row">
                  <div class="col-md-2">
                  <center>
                    <?php $content = $roo['f_name']; ?> <h3 style="background: #0001; border-radius: 50px; text-align: center; line-height: 50px; width: 52px; height: 50px;"><?php echo $a = $content[0]; ?></h3>
                  </center>
                </div>
                <div class="col-md-10">
                  <h6>By - <?php echo $roo['f_name']; ?> <?php echo $roo['l_name']; ?></h6>
                  <h6 style="font-size: 12px; color: gray;"><?php echo $row['remark']; ?></h6>
                </div>
                </div>
              </div>
            </div>
          </div>



    	<?php } } ?>
    	</table>
    </center>


</form>
</body>
</html>