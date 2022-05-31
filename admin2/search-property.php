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
   
    <title>Real Estate Managment System || Search Properties</title>
    <link rel="stylesheet" href="style.css">
</head>

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
                            <h2 class="pageheader-title">Search Properties</h2>
                           
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                                       
                                        <li class="breadcrumb-item active" aria-current="page">Search Properties</li>
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
                            <h5 class="card-header">Search Properties</h5>
                            <form  method="post" method="post"  enctype="multipart/form-data">
                                        <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                                        <div class="form-group row">
                                            <label class="formm">Search by Property ID/Name/Mobile No.:</label>
                                            <div class="fom1">
                                                <input type="text" name="searchdata" id="searchdata" class="form-control" value="" required='true'>
                                            </div>
                                        </div>
                                    
                                        <div class="form-group row text-right">
                                            <div class="fom1">
                                               <p style="text-align: center;"> <button type="submit" class="btn btn-space btn-primary" name="search">Search</button></p>
                                                
                                            </div>
                                        </div>
                                    </form>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchdata'];
  ?>
                                    <table class="table table-striped table-bordered first">
                                        <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4>
                                        <thead>
                                        <tr>
                                            <tr>
                  <th data-breakpoints="xs">S.NO</th>
            <th>Property ID</th>
            <th>Property Title</th>
            <th>Full Name</th>
   <th>Mobile Number</th>
            
            <th>Listing Date</th>
            <th data-breakpoints="xs">Action</th>
                </tr>
                                        </tr>
                                        </thead>
                                        <tbody>
                                          <?php
$ret=mysqli_query($con,"select * from tblproperty join tbluser on tbluser.ID=tblproperty.UserID where tblproperty.PropertyID like '$sdata%' || tbluser.FullName like '$sdata%' || tbluser.MobileNumber like '$sdata%' ");
$num=mysqli_num_rows($ret);
if($num>0){
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              
                <tr>
                  <td><?php echo $cnt;?></td>
              <td><?php  echo $row['PropertyID'];?></td>
              <td><?php  echo $row['PropertyTitle'];?></td>
                  <td><?php  echo $row['FullName'];?></td>
                 <td><?php  echo $row['MobileNumber'];?></td>
                  <td><?php  echo $row['ListingDate'];?></td>
                  <td><a href="view-property-details.php?viewid=<?php echo $row['ID'];?>">View</a></td>
                </tr>
                <?php 
$cnt=$cnt+1;
} } else { ?>
  <tr>
    <td colspan="8"> No record found against this search</td>

  </tr>
   
<?php } }?>
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
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    
</body>
 
</html>
<?php }  ?> 