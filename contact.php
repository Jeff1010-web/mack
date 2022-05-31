

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
  <link rel="stylesheet" href="style.css">
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
	
	<?php include 'navbar_un.php' ?>




  <div class="container-contact">
    <div class="row">
      <div class="column-contact">
        <div style="background: #fff; border-radius: 10px;" class="shadow">
          <div class="container">
            <div class="row">
              <div class="column4">
                <div class="container"><br>
                  <h2 class="cont">Contact Us</h2>
                 
                  <h6 class="text_p">Name</h6>
                  <input type="text" name="name" placeholder="Enter Name" class="form-control rounded-pill">

                  <h6 class="text_p">Email Id</h6>
                  <input type="text" name="email" placeholder="Enter Email Id" class="form-control rounded-pill">

                  <h6 class="text_p">Phone Number</h6>
                  <input type="text" name="phone" placeholder="Enter Phone Number" class="form-control rounded-pill">

                  <h6 class="text_p">Your Message</h6>
                  <textarea name="mess" rows="5" placeholder="Enter Your Messager" class="form-control"></textarea>


                 <input type="submit" name="submit" value="submit" class="btn btn-primary rounded-pill" style="width: 150px;">
                 


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php

include 'db_conn.php';

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

  <?php include 'footer_un.php' ?>
</form>
</body>
</html>