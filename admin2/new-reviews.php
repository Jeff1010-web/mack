<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['remsaid']==0)) {
  header('location:logout.php');
  } else{

//code for uprove the review
 if(isset($_GET['rid']))
 {   
$rvid=intval($_GET['rid']);
$query=mysqli_query($con,"update tblfeedback set Is_Publish='1' where id='$rvid'");
 echo '<script>alert("Review successfully approved.")</script>';
echo "<script>window.location.href='new-reviews.php'</script>";
}

//Delete the review
if (isset($_GET['delrid'])) {
$rid=intval($_GET['delrid']);
$query=mysqli_query($con,"delete from tblfeedback where id='$rvid'");
 echo '<script>alert("Review deleted.")</script>';
echo "<script>window.location.href='new-reviews.php'</script>";
}
 ?>
<!doctype html>
<html lang="en">
 
<head>
   
    <title>Real Estate Managment System || Manage City</title>
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
                            <h2 class="pageheader-title">Reviews</h2>
                           
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="manage-city.php" class="breadcrumb-link"> Reviews</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">New Reviews</li>
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
                            <h5 class="card-header">Reviews</h5>
                            <div class="card-body">
                                <div class="table-responsive">
<table class="table table-striped table-bordered first">
                                        <thead>
                                        <tr>
                                            <tr>
                  <th>S.NO</th>
            
                  <th>User name</th>
                    <th>Property </th> 
                    <th>Review</th>    
                     <th>Review Date</th>   
                   <th>Action</th>
                </tr>
                                        </tr>
                                        </thead>
                                        <tbody>
                                    
<?php $pid=intval($_GET['proid']);
$qry=mysqli_query($con,"select tblfeedback.id as rid,tblfeedback.UserRemark,tblfeedback.PostingDate,tbluser.FullName,tblproperty.PropertyTitle,tblproperty.ID as pid,tbluser.ID as uid from tblfeedback join tbluser on tbluser.ID=tblfeedback.UserId join tblproperty on tblproperty.ID=tblfeedback.PropertyId where tblfeedback.Is_Publish is null"); 
$cnt=1;
while ($row=mysqli_fetch_array($qry)) {

?>
              
                <tr>
                  <td><?php echo $cnt;?></td>
            
                  <td>
<a href="view-users-details.php?viewid=<?php  echo $row['uid'];?>"><?php  echo $row['FullName'];?></a></td>
<td><a href="view-property-details.php?viewid=<?php  echo $row['pid'];?>"><?php  echo $row['PropertyTitle'];?></a></td>
                   <td><?php  echo $row['UserRemark'];?></td>
                   <td><?php  echo $row['PostingDate'];?></td>
<td><a href="new-reviews.php?rid=<?php echo $row['rid'];?>" onclick="return confirm('Do you really want to Approve this review ?')">Approve</a> | 
    <a href="new-reviews.php?delrid=<?php echo $row['rid'];?>" onclick="return confirm('Do you really want to delete ?')>">Delete</a></td>
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