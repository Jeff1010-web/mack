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
   
    <title>Real Estate Managment System || Sales Properties</title>
    <link rel="stylesheet" href="style.css">

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
         <?php include_once('includes/header.php');?>
        
        <?php include_once('includes/sidebar.php');?>
       
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="formm">
                        <div class="page-header">
                            <h2 class="pageheader-title">Sales Properties</h2>
                           
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                                       
                                        <li class="breadcrumb-item active" aria-current="page">Sales Properties</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="formm">
                        <div class="card">
                            <h5 class="card-header">Sales Properties</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                        <tr>
                                            <tr>
                  <th data-breakpoints="xs">S.NO</th>
            <th>Property ID</th>
            <th>Property Title</th>
            <th>Price</th>
            <th>User Id</th>
            <th>Type</th>
            <th>Location</th>
            <th>Address</th>
            <th>Country</th>
            <th>State</th>
            <th>City</th>
                </tr>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
  $uid=$_GET['viewid'];

$ret=mysqli_query($con,"select * from addproperty where id='$uid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              
                <tr>
                  <td><?php echo $cnt;?></td>
              <td><?php  echo $row['id'];?></td>
              <td><?php  echo $row['title'];?></td>
                  <td><?php  echo $row['price'];?></td>
                  <td><?php  echo $row['user_id'];?></td>
                  <td><?php  echo $row['type'];?></td>
                  <td><?php  echo $row['location'];?></td>
                  <td><?php  echo $row['address'];?></td>
                  <td><?php  echo $row['country'];?></td>
                  <td><?php  echo $row['state'];?></td>
                  <td><?php  echo $row['city'];?></td>
                 
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
                                        </tbody>
                                     
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
               
               
                
                
            </div>
            <!-- ============================================================== -->
            <?php include_once('includes/footer.php');?>
        </div>
    </div>
   
    
</body>
 
</html>
<?php }  ?> 