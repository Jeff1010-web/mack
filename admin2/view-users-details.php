<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['remsaid']==0)) {
  header('location:logout.php');
  } else{



  ?>

<!doctype html>
<html lang="en">

 
<head>
    
    <title>Real Estate Management System || View Details</title>
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
                            <h2 class="pageheader-title">View Details </h2>
                            
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                                       
                                        <li class="breadcrumb-item active" aria-current="page">View Details</li>
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
                                <h5 class="card-header">View Details</h5>
                                <div class="card-body">
                                    <form class="form-horizontal" method="post">
                            <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  <?php
  $uid=$_GET['id'];

$ret=mysqli_query($con,"select * from a_regi where id='$uid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                
                                <table border="1" class="table table-striped table-bordered first" >
                                <tr>
                                    <th >First Name </th>
                                    <td style="padding-left: 10px"><?php  echo $row['f_name'];?></td>
                                </tr>
                                <tr>
                                    <th>Mobile Number </th>
                                    <td style="padding-left: 10px"><?php  echo $row['phone'];?></td>
                                </tr>
                                <tr>
                                    <th>Email </th>
                                    <td style="padding-left: 10px"><?php  echo $row['email'];?></td>
                                </tr>
                                <tr>
                                    <th>About Me </th>
                                    <td style="padding-left: 10px"><?php  echo $row['Aboutme'];?></td>
                                </tr>
                                </table>
                                
                            
                        
                        </div>
                    </div>
 <?php } ?>
    
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
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <script>
    $('#form').parsley();
    </script>
    <script>
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