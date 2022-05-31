<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['remsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
    $adminid=$_SESSION['remsaid'];
    $aname=$_POST['adminname'];
  $mobno=$_POST['contactnumber'];
  
     $query=mysqli_query($con, "update tbladmin set AdminName ='$aname', MobileNumber='$mobno' where ID='$adminid'");
    if ($query) {
    $msg="Admin profile has been updated.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again.";
    }
  }

?>
<!doctype html>
<html lang="en">

 
<head>
    
    <title>Real Estate Management System || Admin Profile</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
       
         <?php include_once('includes/header.php');?>
       
       <?php include_once('includes/sidebar.php');?>
       
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="formm">
                        <div class="page-header">
                            <h2 class="pageheader-title">Admin Profile </h2>
                            
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                                        
                                        <li class="breadcrumb-item active" aria-current="page">Admin Profile</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- valifation types -->
                        <!-- ============================================================== -->
                        <div class="formm">
                            <div class="card">
                                <h5 class="card-header">Admin Profile</h5>
                                <div class="card-body">
                                    <form  method="post">
                                        <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  <?php
  $adminid=$_SESSION['remsaid'];
$ret=mysqli_query($con,"select * from tbladmin where ID='$adminid'");


while ($row=mysqli_fetch_array($ret)) {

?>
   <div class="form-group row">
                                            <label class="formm">Admin Name</label>
                                            <div class="fom1">
                                                 <input type="text" name="adminname" id="adminname" required="true" value="<?php echo $row['AdminName'];?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="formm">User Name</label>
                                            <div class="fom1">
                                                 <input type="text" name="username" id="username" required="true" value="<?php echo $row['UserName'];?>" class="form-control" readonly="true">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="formm">Contact Number</label>
                                            <div class="fom1">
                                                <input type="text" name="contactnumber" id="contactnumber" required="true" value="<?php echo $row['MobileNumber'];?>" maxlength='10' patter='[0-9]+' class="form-control">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="formm">Email address</label>
                                            <div class="fom1">
                                                <input type="email" id="email" name="email" class="form-control" value="<?php  echo $row['Email'];?>" readonly='true'>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="formm">Admin Registration Date</label>
                                            <div class="fom1">
                                                <input type="rdate" id="rdate" name="rdate" class="form-control" value="<?php  echo $row['AdminRegdate'];?>" readonly='true'>
                                            </div>
                                        </div>
                                    <?php }?>
                                        <div class="form-group row text-right">
                                            <div class="form2">
                                               <p style="text-align: center;"> <button type="submit" class="btn btn-space btn-primary" name="submit">Submit</button></p>
                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end valifation types -->
                        <!-- ============================================================== -->
                    </div>
           
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
             <?php include_once('includes/footer.php');?>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <script>
    $('#form').parsley();
    </script>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
</body>
 
</html>
<?php }  ?>