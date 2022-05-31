<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['remsaid']==0)) {
  header('location:logout.php');
  } 
     ?>
<!doctype html>
<html lang="en">

<head>
   
<link rel="stylesheet" href="style.css">
    <title>Real Estate Management System || Dashboard</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
       
     <?php include_once('includes/header.php');?>
       
      <?php include_once('includes/sidebar.php');?>
       
        <div class="dashboard-wrapper">
            <div class="dashboard-finance">
                <div class="container-fluid dashboard-content">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="formm">
                            <div class="page-header">
                                <h3 class="das">Dashboard </h3>
                                
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Admin Dashboard</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                   
                    <div class="row">
                        <div class="fom1">
                            <div class="card">
                                <?php $query=mysqli_query($con,"Select * from tblpropertytype");
$totalprptype=mysqli_num_rows($query);
?>
                                <h5 class="card-header">Total Property Type</h5>
                                <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                        <h1 class="leo"><?php echo $totalprptype;?></h1>
                                    </div>
                                    
                                </div>
                                
                                <div class="kesho">
                                    <a href="manage-propertytype.php" class="card-link">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="fom1">
                            <div class="card">
                                <?php $query1=mysqli_query($con,"Select * from tblcountry");
$totalcountry=mysqli_num_rows($query1);
?>
                                <h5 class="card-header">Total Country</h5>
                                <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                        <h1 class="leo"><?php echo $totalcountry;?></h1>
                                    </div>
                                  
                                </div>
                                
                                <div class="kesho">
                                    <a href="manage-country.php" class="card-link">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="fom1">
                            <div class="card">
                                 <?php $query2=mysqli_query($con,"Select * from tblstate");
$totalstate=mysqli_num_rows($query2);
?>
                                <h5 class="card-header">Total State</h5>
                                <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                        <h1 class="leo"><?php echo $totalstate;?></h1>
                                    </div>
                                   
                                </div>
                               
                                <div class="kesho">
                                    <a href="manage-state.php" class="card-link">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="fom1">
                            <div class="card">
                                <?php $query3=mysqli_query($con,"Select * from tblcity");
$totalcity=mysqli_num_rows($query3);
?>
                                <h5 class="card-header">Total City</h5>
                                <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                        <h1 class="leo"><?php echo $totalcity;?></h1>
                                    </div>
                                    
                                </div>
                                
                                <div class="kesho">
                                    <a href="manage-city.php" class="card-link">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   
           <div class="row">
                        <div class="fom1">
                            <div class="card">
                                <?php $query4=mysqli_query($con,"Select * from tbluser where UserType='1'");
$totalagents=mysqli_num_rows($query4);
?>
                                <h5 class="card-header">Total Agents Listed</h5>
                                <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                        <h1 class="leo"><?php echo $totalagents;?></h1>
                                    </div>
                                    
                                </div>
                                
                                <div class="kesho">
                                    <a href="manage-agents.php" class="card-link">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="fom1">
                            <div class="card">
                                <?php $query5=mysqli_query($con,"Select * from tbluser where UserType='2'");
$totalowners=mysqli_num_rows($query5);
?>
                                <h5 class="card-header">Total Owners Listed</h5>
                                <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                        <h1 class="leo"><?php echo $totalowners;?></h1>
                                    </div>
                                  
                                </div>
                                
                                <div class="kesho">
                                    <a href="manage-owners.php" class="card-link">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="fom1">
                            <div class="card">
                                 <?php $query6=mysqli_query($con,"Select * from a_regi");
$totalusers=mysqli_num_rows($query6);
?>
                                <h5 class="card-header">Total Users</h5>
                                <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                        <h1 class="leo"><?php echo $totalusers;?></h1>
                                    </div>
                                   
                                </div>
                               
                                <div class="kesho">
                                    <a href="manage-users.php" class="card-link">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="fom1">
                            <div class="card">
                                <?php $query7=mysqli_query($con,"Select * from addproperty");
$totalpropertylisted=mysqli_num_rows($query7);
?>
                                <h5 class="card-header">Total Property Listed</h5>
                                <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                        <h1 class="leo"><?php echo $totalpropertylisted;?></h1>
                                    </div>
                                    
                                </div>
                                
                                <div class="kesho">
                                    <a href="listed-properties.php" class="card-link">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <?php include_once('includes/footer.php');?>
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->

    <script>
    $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });
    });
    </script>
</body>
</html>
