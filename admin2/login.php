<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $adminuser=$_POST['username'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tbladmin where  UserName='$adminuser' && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['remsaid']=$ret['ID'];
     header('location:dashboard.php');
    }
    else{
    $msg="Invalid Details.";
    }
  }
  ?>
<!doctype html>
<html lang="en">
 
<head>
   
    <title>Real Estate Management System || Login</title>
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
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><h2 style="color: blue">Ngara Homes</h2><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
              <form action="" method="post" name="login">
                        <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                    <div class="form-group">
                        <input class="control" id="username" type="text" placeholder="Username" required="true" name="username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="control" id="password" type="password" placeholder="Password" name="password" required="true">
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="login">Sign in</button>
                </form>
            </div>
            <div class="card-footer footer">
                
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="forgot-password.php" class="footer-link">Forgot Password</a>

                </div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="../index.php" class="footer-link">Back to Home</a>

                </div>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    
</body>
 
</html>