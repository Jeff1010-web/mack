
<?php

session_start();

if ($_SESSION['email'] == true) 
{
   $_SESSION['email'];
}
else
{
  header("location:Regi/log.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
  <style type="text/css">

      .text_p
  {
      font-size: 12px;
      padding-top: 15px;
      color: gray;
  }
     .labela{
    padding: 7px;
    background: #001; 
    display: table;
    color: #fff;
    width: 180px;
    text-align: center;
    border-radius: 50px;
    cursor: pointer;
     }
     input[type="file"] {
    display: none;
}
  </style>
</head>
<body>
<form method="post" enctype="multipart/form-data">
	
<?php include 'navabar.php'; ?>





<div class="container mt-3">
  <h2>Edit Property</h2>
</div>

<?php

$id = $_GET['id'];

include '../db_conn.php';

$sql = " select * from addproperty where id = '$id' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

?>


<div class="container mt-3">
  <div class="row">
    <div class="col-md-4">
      <img src="../Image/<?php echo $row['img_1']; ?>" style="width: 100%; height: 250px; border-radius: 10px; object-fit: cover;">
    </div>
    <div class="col-md-8">
     <div class="container">
       
        <h6 class="text_p">Title</h6>
        <input type="text" name="title" value="<?php echo $row['title']; ?>" class="form-control">

         <h6 class="text_p">Description</h6>
         <textarea name="description" class="form-control" rows="8"><?php echo $row['description']; ?></textarea>

         <div class="row">
           <div class="col-md-4">
             <h6 class="text_p">Price</h6>
             <input type="text" name="price" value="<?php echo $row['price']; ?>" class="form-control">
           </div>
           <div class="col-md-4">
             <h6 class="text_p">Status</h6>
              <select name="status" class="form-control">
          <option><?php echo $row['status'] ?></option>
                    <option value="Rent">Rent</option>
                    <option value="Sale">Sale</option>
        </select>
           </div>
           <div class="col-md-4">
             <h6 class="text_p">Type</h6>
             <select name="type" class="form-control">
          <option><?php echo $row['type'] ?></option>
                    <option value="Building">Building</option>
                    <option value="Office">Office</option>
        </select>
           </div>
         </div>


         <div class="row">
           <div class="col-md-4">
             <h6 class="text_p">Location</h6>
             <input type="text" name="location" value="<?php echo $row['location'] ?>" class="form-control">
           </div>
           <div class="col-md-4">
              <h6 class="text_p">Bedrooms</h6>
             <input type="text" name="bedrooms" value="<?php echo $row['bedrooms'] ?>" class="form-control">
           </div>
           <div class="col-md-4">
             <h6 class="text_p">Bathrooms</h6>
             <input type="text" name="bathrooms" value="<?php echo $row['bathrooms'] ?>" class="form-control">
           </div>
         </div>

          <div class="row">
           <div class="col-md-4">
             <h6 class="text_p">Floors</h6>
             <input type="text" name="floors" value="<?php echo $row['floors'] ?>" class="form-control">
           </div>
           <div class="col-md-4">
              <h6 class="text_p">Garages</h6>
             <input type="text" name="garages" value="<?php echo $row['garages'] ?>" class="form-control">
           </div>
           <div class="col-md-4">
             <h6 class="text_p">Parking place</h6>
             <input type="text" name="parking_place" value="<?php echo $row['parking_place'] ?>" class="form-control">
           </div>
         </div>

         <div class="row">
           <div class="col-md-4">
             <h6 class="text_p">Area</h6>
             <input type="text" name="area" value="<?php echo $row['area'] ?>" class="form-control">
           </div>
           <div class="col-md-4">
              <h6 class="text_p">Size</h6>
             <input type="text" name="size" value="<?php echo $row['size'] ?>" class="form-control">
           </div>
           <div class="col-md-4">
             <h6 class="text_p">Sale Or Rent Price</h6>
             <input type="text" name="s_r_price" value="<?php echo $row['s_r_price'] ?>" class="form-control">
           </div>
         </div>


         <div class="row">
           <div class="col-md-4">
             <h6 class="text_p">Property Features</h6>
           </div>
         </div>

         <div class="row">
           <div class="col-md-3">
             <?php
                   
                   if ($row['air_condi'] == 'Air conditioning') 
                   {
                    ?>
                   <input type="checkbox" name="air_condi" value="Air conditioning" checked> <label>Air conditioning</label>
                    <?php
                   }
                   else
                   {
                    ?>
                   <input type="checkbox" name="air_condi" value="Air conditioning"> <label>Air conditioning</label>
                    <?php 
                   }


                 ?>
           </div>
           <div class="col-md-3">
             <?php
                   
                   if ($row['bed'] == 'Bedding') 
                   {
                    ?>
                   <input type="checkbox" name="bed" value="Bedding" checked> <label>Bedding</label>
                    <?php
                   }
                   else
                   {
                    ?>
                   <input type="checkbox" name="bed" value="Bedding"> <label>Bedding</label>
                    <?php 
                   }


                 ?>
           </div>
           <div class="col-md-3">
             <?php
                   
                   if ($row['coffe_pot'] == 'Coffee pot') 
                   {
                    ?>
                   <input type="checkbox" name="coffe_pot" value="Coffee pot" checked> <label>Coffee pot</label>
                    <?php
                   }
                   else
                   {
                    ?>
                   <input type="checkbox" name="coffe_pot" value="Coffee pot"> <label>Coffee pot</label>
                    <?php 
                   }


                 ?>
           </div>
           <div class="col-md-3">
             <?php
                   
                   if ($row['c_cooling'] == 'Center Coooling') 
                   {
                    ?>
                   <input type="checkbox" name="c_cooling" value="Center Coooling" checked> <label>Center Coooling</label>
                    <?php
                   }
                   else
                   {
                    ?>
                   <input type="checkbox" name="c_cooling" value="Center Coooling"> <label>Center Coooling</label>
                    <?php 
                   }


                 ?>
           </div>
         </div>


         <div class="row mt-3">
           <div class="col-md-3">
              <?php
                   
                   if ($row['balcony'] == 'Balcony') 
                   {
                    ?>
                   <input type="checkbox" name="balcony" value="Balcony" checked> <label>Balcony</label>
                    <?php
                   }
                   else
                   {
                    ?>
                   <input type="checkbox" name="balcony" value="Balcony"> <label>Balcony</label>
                    <?php 
                   }


                 ?>
           </div>
           <div class="col-md-3">
              <?php
                   
                   if ($row['p_friendly'] == 'Pet Friendly') 
                   {
                    ?>
                   <input type="checkbox" name="p_friendly" value="Pet Friendly" checked> <label>Pet Friendly</label>
                    <?php
                   }
                   else
                   {
                    ?>
                   <input type="checkbox" name="p_friendly" value="Pet Friendly"> <label>Pet Friendly</label>
                    <?php 
                   }


                 ?>
           </div>
           <div class="col-md-3">
             <?php
                   
                   if ($row['barbeque'] == 'Barbeque') 
                   {
                    ?>
                   <input type="checkbox" name="barbeque" value="Barbeque" checked> <label>Barbeque</label>
                    <?php
                   }
                   else
                   {
                    ?>
                   <input type="checkbox" name="barbeque" value="Barbeque"> <label>Barbeque</label>
                    <?php 
                   }


                 ?>
           </div>
           <div class="col-md-3">
             <?php
                   
                   if ($row['f_alarm'] == 'Fire Alarm') 
                   {
                    ?>
                   <input type="checkbox" name="f_alarm" value="Fire Alarm" checked> <label>Fire Alarm</label>
                    <?php
                   }
                   else
                   {
                    ?>
                   <input type="checkbox" name="f_alarm" value="Fire Alarm"> <label>Fire Alarm</label>
                    <?php 
                   }


                 ?>
           </div>
         </div>


            <div class="row mt-3">
              <div class="col-md-3">
                 <?php
                   
                   if ($row['m_kitchen'] == 'Modern Kitchen') 
                   {
                    ?>
                   <input type="checkbox" name="m_kitchen" value="Modern Kitchen" checked> <label>Modern Kitchen</label>
                    <?php
                   }
                   else
                   {
                    ?>
                   <input type="checkbox" name="m_kitchen" value="Modern Kitchen"> <label>Modern Kitchen</label>
                    <?php 
                   }


                 ?>
              </div>
              <div class="col-md-3">
                 <?php
                   
                   if ($row['storage'] == 'Storage') 
                   {
                    ?>
                   <input type="checkbox" name="storage" value="Storage" checked> <label>Storage</label>
                    <?php
                   }
                   else
                   {
                    ?>
                   <input type="checkbox" name="storage" value="Storage"> <label>Storage</label>
                    <?php 
                   }


                 ?>
              </div>
              <div class="col-md-3">
                <?php
                   
                   if ($row['microwave'] == 'Microwave') 
                   {
                    ?>
                   <input type="checkbox" name="microwave" value="Microwave" checked> <label>Microwave</label>
                    <?php
                   }
                   else
                   {
                    ?>
                   <input type="checkbox" name="microwave" value="Microwave"> <label>Microwave</label>
                    <?php 
                   }


                 ?>
              </div>
              <div class="col-md-3">
                 <?php
                   
                   if ($row['o_kitchen'] == 'Outdoor Kitchen') 
                   {
                    ?>
                   <input type="checkbox" name="o_kitchen" value="Outdoor Kitchen" checked> <label>Outdoor Kitchen</label>
                    <?php
                   }
                   else
                   {
                    ?>
                   <input type="checkbox" name="o_kitchen" value="Outdoor Kitchen"> <label>Outdoor Kitchen</label>
                    <?php 
                   }


                 ?>
              </div>
            </div>


            <div class="row mt-3">
              <div class="col-md-3">
                <?php
                   
                   if ($row['dryer'] == 'Dryer') 
                   {
                    ?>
                   <input type="checkbox" name="dryer" value="Outdoor Kitchen" checked> <label>Dryer</label>
                    <?php
                   }
                   else
                   {
                    ?>
                   <input type="checkbox" name="dryer" value="Outdoor Kitchen"> <label>Dryer</label>
                    <?php 
                   }


                 ?>

              </div>
              <div class="col-md-3">
                 <?php
                   
                   if ($row['heating'] == 'Dryer') 
                   {
                    ?>
                   <input type="checkbox" name="heating" value="Heating" checked> <label>Heating</label>
                    <?php
                   }
                   else
                   {
                    ?>
                   <input type="checkbox" name="heating" value="Heating"> <label>Heating</label>
                    <?php 
                   }


                 ?>
              </div>
              <div class="col-md-3">
                 <?php
                   
                   if ($row['pool'] == 'Pool') 
                   {
                    ?>
                   <input type="checkbox" name="pool" value="Pool" checked> <label>Pool</label>
                    <?php
                   }
                   else
                   {
                    ?>
                   <input type="checkbox" name="pool" value="Pool"> <label>Pool</label>
                    <?php 
                   }


                 ?>
              </div>
              <div class="col-md-3">
                 <?php
                   
                   if ($row['laundry'] == 'Laundry') 
                   {
                    ?>
                   <input type="checkbox" name="laundry" value="Laundry" checked> <label>Laundry</label>
                    <?php
                   }
                   else
                   {
                    ?>
                   <input type="checkbox" name="laundry" value="Laundry"> <label>Laundry</label>
                    <?php 
                   }


                 ?>
              </div>
            </div>


            <div class="row mt-3">
              <div class="col-md-3">
                <?php
                   
                   if ($row['sauna'] == 'Sauna') 
                   {
                    ?>
                   <input type="checkbox" name="sauna" value="Sauna" checked> <label>Sauna</label>
                    <?php
                   }
                   else
                   {
                    ?>
                   <input type="checkbox" name="sauna" value="Sauna"> <label>Sauna</label>
                    <?php 
                   }


                 ?>
              </div>
              <div class="col-md-3">
                <?php
                   
                   if ($row['gym'] == 'GYM') 
                   {
                    ?>
                   <input type="checkbox" name="gym" value="GYM" checked> <label>GYM</label>
                    <?php
                   }
                   else
                   {
                    ?>
                   <input type="checkbox" name="gym" value="GYM"> <label>GYM</label>
                    <?php 
                   }


                 ?>
              </div>
              <div class="col-md-3">
                 <?php
                   
                   if ($row['elevator'] == 'Elevator') 
                   {
                    ?>
                   <input type="checkbox" name="elevator" value="Elevator" checked> <label>Elevator</label>
                    <?php
                   }
                   else
                   {
                    ?>
                   <input type="checkbox" name="elevator" value="Elevator"> <label>Elevator</label>
                    <?php 
                   }


                 ?>
              </div>
              <div class="col-md-3">
                <?php
                   
                   if ($row['d_washer'] == 'Dish Washer') 
                   {
                    ?>
                   <input type="checkbox" name="d_washer" value="Dish Washer" checked> <label>Dish Washer</label>
                    <?php
                   }
                   else
                   {
                    ?>
                   <input type="checkbox" name="d_washer" value="Dish Washer"> <label>Dish Washer</label>
                    <?php 
                   }


                 ?>
              </div>
            </div>


            <div class="row mt-3">
              <div class="col-md-3">
                 <?php
                   
                   if ($row['r_terrace'] == 'Roof terrace') 
                   {
                    ?>
                   <input type="checkbox" name="r_terrace" value="Roof terrace" checked> <label>Roof terrace</label>
                    <?php
                   }
                   else
                   {
                    ?>
                   <input type="checkbox" name="r_terrace" value="Roof terrace"> <label>Roof terrace</label>
                    <?php 
                   }


                 ?>
              </div>
              <div class="col-md-3">
                 <?php
                   
                   if ($row['terrace'] == 'Terrace') 
                   {
                    ?>
                   <input type="checkbox" name="terrace" value="Terracee" checked> <label>Terrace</label>
                    <?php
                   }
                   else
                   {
                    ?>
                   <input type="checkbox" name="terrace" value="Terrace"> <label>Terrace</label>
                    <?php 
                   }


                 ?>
              </div>
              <div class="col-md-3">
                <?php
                   
                   if ($row['e_exit'] == 'Emergency Exit') 
                   {
                    ?>
                   <input type="checkbox" name="e_exit" value="Emergency Exit" checked> <label>Emergency Exit</label>
                    <?php
                   }
                   else
                   {
                    ?>
                   <input type="checkbox" name="e_exit" value="Emergency Exit"> <label>Emergency Exit</label>
                    <?php 
                   }


                 ?>
              </div>
              <div class="col-md-3">
                
              </div>
            </div>



             <div class="row">
           <div class="col-md-4">
             <h6 class="text_p">Property Gallary</h6>
           </div>
         </div>

          
          <div class="row">
            <div class="col-md-3">
              <img src="../Image/<?php echo $row['img_1']; ?>" style="width: 100%; height: 130px; object-fit: contain;">
            </div>
            <div class="col-md-7">
              <label class="labela"> Select Image <input type="file" size="60" name="img_1"></label> 
              <input type="Submit" name="img1_u" value="Upload Image 1" class="btn btn-primary rounded-pill mt-2" style="width: 180px;">
              <?php
    
    $id = $_GET['id'];

    include '../db_conn.php';
   
    if (isset($_POST['img1_u'])) 
    {
      $img_1 = $_FILES['img_1'] ['name'];

    $image_tmp_name = $_FILES['img_1']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$img_1");

    $sql = " update addproperty set img_1 = '$img_1' where id = '$id' ";

    if (mysqli_query($conn,$sql)) 
    {
     echo '<meta http-equiv="refresh" content="0">';
    }
    else
    {
      echo "Not Done";
    }
    }
 

      ?>
            </div>
          </div>

           <div class="row">
            <div class="col-md-3">
              <img src="../Image/<?php echo $row['img_2']; ?>" style="width: 100%; height: 130px; object-fit: contain;">
            </div>
            <div class="col-md-7">
               <label class="labela"> Select Image <input type="file" size="60" name="img_2"></label> 
              <input type="Submit" name="img2_u" value="Upload Image 2" class="btn btn-primary rounded-pill mt-2" style="width: 180px;">
              <?php
    
    $id = $_GET['id'];

    include '../db_conn.php';
   
    if (isset($_POST['img2_u'])) 
    {
      $img_2 = $_FILES['img_2'] ['name'];

    $image_tmp_name = $_FILES['img_2']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$img_2");

    $sql = " update addproperty set img_2 = '$img_2' where id = '$id' ";

    if (mysqli_query($conn,$sql)) 
    {
     echo '<meta http-equiv="refresh" content="0">';
    }
    else
    {
      echo "Not Done";
    }
    }
 

      ?>
            </div>
          </div>

           <div class="row">
            <div class="col-md-3">
              <img src="../Image/<?php echo $row['img_3']; ?>" style="width: 100%; height: 130px; object-fit: contain;">
            </div>
            <div class="col-md-7">
               <label class="labela"> Select Image <input type="file" size="60" name="img_3"></label> 
              <input type="Submit" name="img3_u" value="Upload Image 3" class="btn btn-primary rounded-pill mt-2" style="width: 180px;">
              <?php
    
    $id = $_GET['id'];

    include '../db_conn.php';
   
    if (isset($_POST['img3_u'])) 
    {
      $img_3 = $_FILES['img_3'] ['name'];

    $image_tmp_name = $_FILES['img_3']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$img_3");

    $sql = " update addproperty set img_3 = '$img_3' where id = '$id' ";

    if (mysqli_query($conn,$sql)) 
    {
     echo '<meta http-equiv="refresh" content="0">';
    }
    else
    {
      echo "Not Done";
    }
    }
 

      ?>
            </div>
          </div>


          <div class="row">
            <div class="col-md-3">
              <img src="../Image/<?php echo $row['img_4']; ?>" style="width: 100%; height: 130px; object-fit: contain;">
            </div>
            <div class="col-md-7">
               <label class="labela"> Select Image <input type="file" size="60" name="img_4"></label> 
              <input type="Submit" name="img4_u" value="Upload Image 4" class="btn btn-primary rounded-pill mt-2" style="width: 180px;">
              <?php
    
    $id = $_GET['id'];

    include '../db_conn.php';
   
    if (isset($_POST['img4_u'])) 
    {
      $img_4 = $_FILES['img_4'] ['name'];

    $image_tmp_name = $_FILES['img_4']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$img_4");

    $sql = " update addproperty set img_4 = '$img_4' where id = '$id' ";

    if (mysqli_query($conn,$sql)) 
    {
     echo '<meta http-equiv="refresh" content="0">';
    }
    else
    {
      echo "Not Done";
    }
    }
 

      ?>
            </div>
          </div>



          <div class="row">
            <div class="col-md-3">
              <img src="../Image/<?php echo $row['img_5']; ?>" style="width: 100%; height: 130px; object-fit: contain;">
            </div>
            <div class="col-md-7">
               <label class="labela"> Select Image <input type="file" size="60" name="img_5"></label> 
              <input type="Submit" name="img5_u" value="Upload Image 5" class="btn btn-primary rounded-pill mt-2" style="width: 180px;">
              <?php
    
    $id = $_GET['id'];

    include '../db_conn.php';
   
    if (isset($_POST['img5_u'])) 
    {
      $img_5 = $_FILES['img_5'] ['name'];

    $image_tmp_name = $_FILES['img_5']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$img_5");

    $sql = " update addproperty set img_5 = '$img_5' where id = '$id' ";

    if (mysqli_query($conn,$sql)) 
    {
     echo '<meta http-equiv="refresh" content="0">';
    }
    else
    {
      echo "Not Done";
    }
    }
 

      ?>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <img src="../Image/<?php echo $row['img_6']; ?>" style="width: 100%; height: 130px; object-fit: contain;">
            </div>
            <div class="col-md-7">
               <label class="labela"> Select Image <input type="file" size="60" name="img_6"></label> 
              <input type="Submit" name="img6_u" value="Upload Image 6" class="btn btn-primary rounded-pill mt-2" style="width: 180px;">
              <?php
    
    $id = $_GET['id'];

    include '../db_conn.php';
   
    if (isset($_POST['img6_u'])) 
    {
      $img_6 = $_FILES['img_6'] ['name'];

    $image_tmp_name = $_FILES['img_6']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$img_6");

    $sql = " update addproperty set img_6 = '$img_6' where id = '$id' ";

    if (mysqli_query($conn,$sql)) 
    {
     echo '<meta http-equiv="refresh" content="0">';
    }
    else
    {
      echo "Not Done";
    }
    }
 

      ?>
            </div>
          </div>


          
            <div class="row">
              <div class="col-md-4">
                <h6 class="text_p">Address</h6>
                <input type="text" name="address" value="<?php echo $row['address']; ?>" class="form-control">
              </div>
               <div class="col-md-4">
                <h6 class="text_p">Country</h6>
                <input type="text" name="country" value="<?php echo $row['country']; ?>" class="form-control">
              </div>
              <div class="col-md-4">
                <h6 class="text_p">State</h6>
                <input type="text" name="state" value="<?php echo $row['state']; ?>" class="form-control">
              </div>
            </div>

             <div class="row">
              <div class="col-md-4">
                <h6 class="text_p">City</h6>
                <input type="text" name="city" value="<?php echo $row['city']; ?>" class="form-control">
              </div>
               <div class="col-md-4">
                <h6 class="text_p">Zip/Postel Code</h6>
                <input type="text" name="pin" value="<?php echo $row['pin']; ?>" class="form-control">
              </div>
              <div class="col-md-4">
                <h6 class="text_p">Neighbourhood</h6>
                <input type="text" name="neighb" value="<?php echo $row['neighb']; ?>" class="form-control">
              </div>
            </div>

<br>

           <center>
              <a href="v_property.php"><input type="button" name="" value="Cancel" class="btn btn-primary rounded-pill" style="width: 110px;"></a>
        <input type="submit" name="submit" value="Save" class="btn btn-dark rounded-pill" style="width: 110px;">
           </center>
          

















     </div>
    </div>
  </div>
</div>






<br><br>



<?php

error_reporting(0);

$id = $_GET['id'];

include '../db_conn.php';

if (isset($_POST['submit'])) 
{
	
	 $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    $type = $_POST['type'];
    $location = $_POST['location'];
    $bedrooms = $_POST['bedrooms'];
    $bathrooms = $_POST['bathrooms'];
    $floors = $_POST['floors'];
    $garages = $_POST['garages'];
    $parking_place = $_POST['parking_place'];
    $area = $_POST['area'];
    $size = $_POST['size'];
    $s_r_price = $_POST['s_r_price'];
    $air_condi = $_POST['air_condi'];
    $bed = $_POST['bed'];
    $coffe_pot = $_POST['coffe_pot'];
    $c_cooling = $_POST['c_cooling'];
    $balcony = $_POST['balcony'];
    $p_friendly = $_POST['p_friendly'];
    $barbeque = $_POST['barbeque'];
    $f_alarm = $_POST['f_alarm'];
    $m_kitchen = $_POST['m_kitchen'];
    $storage = $_POST['storage'];
    $microwave = $_POST['microwave'];
    $o_kitchen = $_POST['o_kitchen'];
    $dryer = $_POST['dryer'];
    $heating = $_POST['heating'];
    $pool= $_POST['pool'];
    $laundry = $_POST['laundry'];
    $sauna = $_POST['sauna'];
    $gym = $_POST['gym'];
    $elevator = $_POST['elevator'];
    $d_washer = $_POST['d_washer'];
    $r_terrace = $_POST['r_terrace'];
    $terrace = $_POST['terrace'];
    $e_exit = $_POST['e_exit'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $pin = $_POST['pin'];
    $neighb = $_POST['neighb'];

     
    $sql = " update addproperty set title = '$title' , description = '$description' , price = '$price' , status = '$status' , type = '$type' , location = '$location' , bedrooms = '$bedrooms' , bathrooms = '$bathrooms' , floors = '$floors' , garages = '$garages' , parking_place = '$parking_place' , area = '$area' , size = '$size' , s_r_price = '$s_r_price' , air_condi = '$air_condi' , bed = '$bed' , coffe_pot = '$coffe_pot' , c_cooling = '$c_cooling' , balcony = '$balcony' , p_friendly = '$p_friendly' , barbeque = '$barbeque' , f_alarm = '$f_alarm' , m_kitchen = '$m_kitchen' , storage = '$storage' , microwave = '$microwave' , o_kitchen = '$o_kitchen' , dryer = '$dryer' , heating = '$heating' , pool = '$pool' , laundry = '$laundry' , sauna = '$sauna' , gym = '$gym' , elevator = '$elevator' , d_washer = '$d_washer' , r_terrace = '$r_terrace' , terrace = '$terrace' , e_exit = '$e_exit' , address = '$address' , country = '$country' , state = '$state' , city = '$city' , pin = '$pin' , neighb = '$neighb' where id = '$id' ";
 
    if (mysqli_query($conn,$sql)) 
    {
      ?>

      <script type="text/javascript">
        location.href = "v_property.php";
      </script>

      <?php
    }
    else 
    {
      echo "Not Done";
    }



}


?>




</form>
</body>
</html>