<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['remsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
$eid=$_GET['editid'];
$cmsaid=$_SESSION['remsaid'];
 $countryid=$_POST['country'];
 $statename=$_POST['statename'];


 $query=mysqli_query($con,"update tblstate set CountryID='$countryid', StateName='$statename'  where  ID='$eid'");

   if ($query) {
    $msg="State has been update.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }
  
}

?>

<!doctype html>
<html lang="en">

 
<head>
    
    <title>Real Estate Management System || Update State</title>
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
                            <h2 class="pageheader-title">Update State </h2>
                            
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                                        
                                        <li class="breadcrumb-item active" aria-current="page">Update State</li>
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
                                <h5 class="card-header">Update State</h5>
                                <div class="card-body">
                                    <form  method="post">
                                        <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  <?php
  $eid=$_GET['editid'];
$ret=mysqli_query($con,"select tblcountry.CountryName,tblcountry.ID,tblstate.StateName as sname from  tblstate  join tblcountry on tblcountry.ID=tblstate.CountryID where tblstate.ID='$eid'");

while ($row=mysqli_fetch_array($ret)) {

?>
                                        <div class="form-group row">
                                            <label class="form2">Country Name</label>
                                            <div class="fom1">
                                                <select type="text" name="country" id="country" required="true" class="form-control">
                                                    <option value="<?php echo $row['ID'];?>"><?php echo $row['CountryName'];?></option>
              <?php $query1=mysqli_query($con,"select * from tblcountry");
              while($row1=mysqli_fetch_array($query1))
              {
              ?>      
                  <option value="<?php echo $row1['ID'];?>"><?php echo $row1['CountryName'];?></option>
                  <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="fom1">State Name</label>
                                            <div class="fom1">
                                                <input type="text" name="statename" id="statename" required="true" value="<?php echo $row['sname'];?>" class="form-control">
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