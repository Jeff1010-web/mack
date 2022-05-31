<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);

if(isset($_POST['submit']))
  {
    $contactno=$_SESSION['contactno'];
    $email=$_SESSION['email'];
    $password=md5($_POST['newpassword']);

        $query=mysqli_query($con,"update tbladmin set Password='$password'  where  Email='$email' && MobileNumber='$contactno' ");
   if($query)
   {
echo "<script>alert('Password successfully changed');</script>";
session_destroy();
   }
  
  }
  ?>
<!doctype html>
<html lang="en">
 
<head>
    
    <title>Real Estate Management System || Reset Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
    <script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
} 

</script>
</head>

<body>
    <!-- ============================================================== -->
    <!-- forgot password  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card">
            <div class="card-header text-center"><h2 style="color: blue">NGARA HOMES</h2><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form role="form" method="post" action="" name="changepassword" onsubmit="return checkpass();">
                    <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                    <div class="form-group">
                        <input type="password" name="newpassword" class="control" placeholder="New Password" required="true">

                    </div>
                     <div class="form-group">
                        <input type="password" name="confirmpassword" class="control" placeholder="Confirm Password" required="true">
                        
                    </div>
                    <div class="form-group"><button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Reset</button></div>
                </form>
            </div>
            <div class="card-footer text-center">
                <span><a href="login.php">Sign In</a></span>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end forgot password  -->
    <!-- ============================================================== -->
    
</body>

 
</html>