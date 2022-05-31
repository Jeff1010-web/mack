<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['remsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {

$cmsaid=$_SESSION['remsaid'];
 $countryid=$_POST['country'];
 $stateid=$_POST['state'];
 $cityname=$_POST['cityname'];


 $query=mysqli_query($con,"insert into tblcity(CountryID,StateID,CityName) value('$countryid','$stateid','$cityname')");

    if ($query) {
    echo '<script>alert("City has been added.")</script>';
echo "<script>window.location.href ='add-city.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}

?>

<!doctype html>
<html lang="en">

 
<head>
    
    <title>Real Estate Management System || Add City</title>
    <link rel="stylesheet" href="style.css">
    <script>
function getsate(val) {
  $.ajax({

type:"POST",
url:"get-sate.php",
data:'$countryid='+val,
success:function(data){
$("#state").html(data);
}

  });
}
</script>
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
                    <div class="column">
                        <div class="page-header">
                            <h2 class="pageheader-title">Add City </h2>
                            
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                                        
                                        <li class="breadcrumb-item active" aria-current="page">Add City</li>
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
                        <div class="column">
                            <div class="card">
                                <h5 class="card-header">Add City</h5>
                                <div class="card-body">
                                    <form  method="post">
                                        <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                                        <div class="form-group row">
                                            <label class="right">Country Name</label>
                                            <div class="column-1">
                                                <select type="text" name="country" id="country" required="true" onChange="getsate(this.value)" class="form-control">
                                                    <option value="">Select Country</option>
              <?php $query=mysqli_query($con,"select * from tblcountry");
              while($row=mysqli_fetch_array($query))
              {
              ?>      
                  <option value="<?php echo $row['ID'];?>"><?php echo $row['CountryName'];?></option>
                  <?php } ?>
                                                </select>

                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="column-2">State Name</label>
                                            <div class="column-3">
                                                <input type="text" name="state" id="state" required="true" class="form-control">
                                                    <option value="">Select State</option>
        
                                                </select>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="column-2">City Name</label>
                                            <div class="column-3">
                                                <input type="text" name="cityname" id="cityname" required="true" placeholder="City Name" class="form-control">
                                            </div>
                                        </div>
                                    
                                        <div class="form-group row text-right">
                                            <div class="column4">
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
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
    
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
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