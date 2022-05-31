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
	<title>Contact Us</title>
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




  <div class="container mt-4">
    <div class="row">
      <div class="col-md-12">
        <div style="background: #fff; border-radius: 10px;" class="shadow">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/0f135891948979.5e3ed579b5cb5.png" style="height: 600px; width: 100%; object-fit: cover; border-radius: 10px;">
              </div>
              <div class="col-md-4">
                <div class="container"><br>
                  <h2 class="mt-3">Contact Us</h2>
                 
                  <h6 class="text_p">Name</h6>
                  <input type="text" name="name" placeholder="Enter Name" class="form-control rounded-pill">

                  <h6 class="text_p">Email Id</h6>
                  <input type="text" name="email" placeholder="Enter Email Id" class="form-control rounded-pill">

                  <h6 class="text_p">Phone Number</h6>
                  <input type="text" name="phone" placeholder="Enter Phone Number" class="form-control rounded-pill">

                  <h6 class="text_p">Your Message</h6>
                  <textarea name="mess" rows="5" placeholder="Enter Your Messager" class="form-control"></textarea>


                 <input type="submit" name="submit" value="submit" class="btn btn-primary rounded-pill mt-3" style="width: 150px;">
                 


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php

include '../db_conn.php';

if (isset($_POST['submit'])) 
{
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$mess = $_POST['mess'];


   $sql = " insert into contact (name,email,phone,mess) values ('$name','$email','$phone','$mess') ";

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
<br><br>

  <?php include 'footer.php' ?>
</form>
</body>
</html>