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
   <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
	<title></title>
<style type="text/css">
 .swiper-container {
        width: 100%;
        
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100px;
        object-fit: cover;
      }

    

      .swiper-container {
        width: 100%;
        height: 100px;
        margin-left: auto;
        margin-right: auto;
      }

      .swiper-slide {
        background-size: cover;
        background-position: center;
      }

      .mySwiper2 {
        height: 10%;
        width: 100%;
      }

      .mySwiper {
        height: 20%;
        box-sizing: border-box;
        padding: 10px 0;
      }

      .mySwiper .swiper-slide {
        width: 25%;
        height: 10%;
        opacity: 0.4;
      }

      .mySwiper .swiper-slide-thumb-active {
        opacity: 1;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 10%;
        object-fit: cover;
      }
      .fa-check-circle
      {
        color: green;
      }
      .fa-times-circle
      {
        color: red;
      }
</style>
</head>
<body>
<form method="post">
	
	<?php include 'navabar.php'; ?>


  <?php

include '../db_conn.php';

$email = $_SESSION['email'];

$sql = " select * from a_regi where email = '$email' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

$issd = $row['id'];

?>
<?php

$id = $_GET['id'];

include '../db_conn.php';

$sql = " select * from addproperty where id = '$id' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

?>


<div class="container_1">
  <div class="row">
    <div class="column2">
      <h3><?php echo $row['title'] ?></h3>
      <h6 style="color: black; font-size: 12px;"><?php echo $row['location']; ?></h6>
    </div>
    <div class="column3" style="text-align: right;">
      Sale
      <h3 style="text-align: right;" class="text-primary"><?php echo $row['price'] ?></h3>
    </div>
  </div>
</div>





<div class="container_column4">
  <div class="row">
    <div class="column5">
      <div class="container">
        
        <h6>Gallery</h6>


 <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper-container mySwiper2 container_column4">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="Image/<?php echo $row['img_1']; ?>" />
        </div>
        <div class="swiper-slide">
          <img src="Image/<?php echo $row['img_2']; ?>" />
        </div>
        <div class="swiper-slide">
          <img src="Image/<?php echo $row['img_3']; ?>" />
        </div>
        <div class="swiper-slide">
          <img src="Image/<?php echo $row['img_4']; ?>" />
        </div>
        <div class="swiper-slide">
          <img src="Image/<?php echo $row['img_5']; ?>" />
        </div>
        <div class="swiper-slide">
          <img src="Image/<?php echo $row['img_6']; ?>" />
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    <div thumbsSlider="" class="swiper-container mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="Image/<?php echo $row['img_1']; ?>" />
        </div>
        <div class="swiper-slide">
          <img src="Image/<?php echo $row['img_2']; ?>" />
        </div>
        <div class="swiper-slide">
          <img src="Image/<?php echo $row['img_3']; ?>" />
        </div>
        <div class="swiper-slide">
          <img src="Image/<?php echo $row['img_3']; ?>" />
        </div>
        <div class="swiper-slide">
          <img src="Image/<?php echo $row['img_4']; ?>" />
        </div>
        <div class="swiper-slide">
          <img src="Image/<?php echo $row['img_5']; ?>" />
        </div>
        <div class="swiper-slide">
          <img src="Image/<?php echo $row['img_6']; ?>" />
        </div>
      </div>
    </div>


      <br>
      <h4>Description</h4>
         
         <div class="row-desc">
           <div class="col-desc">
             Area - <?php echo $row['area']; ?>
           </div>
           <div class="col-desc">
             Beds - <?php echo $row['bedrooms']; ?>
           </div>
           <div class="col-desc">
             Bath - <?php echo $row['bathrooms']; ?>
           </div>
         </div>

         <div class="row amenities">
           <div class="col-desc">
             Floor - <?php echo $row['floors']; ?>
           </div>
           <div class="col-desc">
             Garages - <?php echo $row['garages']; ?>
           </div>
           <div class="col-desc">
             Parking Place - <?php echo $row['parking_place']; ?>
           </div>
         </div>

         <div class="row amenities">
           <div class="col-desc">
             Status - <?php echo $row['status']; ?>
           </div>
           <div class="col-desc">
             Type - <?php echo $row['type']; ?>
           </div>
           <div class="col-desc">
             Location - <?php echo $row['location']; ?>
           </div>
         </div>

       <h6 class="col-desc"><?php echo $row['description']; ?></h6>



        <br>
      <h4>Features</h4>


      <div class="row-desc">
        <div class="col-desc">

        
        <?php
                   
         if ($row['air_condi'] == 'Air conditioning') 
          {
            ?>
              
              <h6><i class="fa fa-check-circle" aria-hidden="true"></i> Air conditioning  </h6>


            <?php
          }
         else
          {
             ?>
              
               <h6><i class="fa fa-times-circle" aria-hidden="true"></i> Air conditioning  </h6>

             <?php
          }

     ?>

      <?php
                   
         if ($row['c_cooling'] == 'Center Coooling') 
          {
            ?>
              
              <h6 class="amenities"><i class="fa fa-check-circle" aria-hidden="true"></i> Center Coooling  </h6>


            <?php
          }
         else
          {
             ?>
              
               <h6 class="amenities"><i class="fa fa-times-circle" aria-hidden="true"></i> Center Coooling  </h6>

             <?php
          }

     ?>

     <?php
                   
         if ($row['barbeque'] == 'Barbeque') 
          {
            ?>
              
              <h6 class="amenities"><i class="fa fa-check-circle" aria-hidden="true"></i> Barbeque  </h6>


            <?php
          }
         else
          {
             ?>
              
               <h6 class="amenities"><i class="fa fa-times-circle" aria-hidden="true"></i> Barbeque  </h6>

             <?php
          }

     ?>

     <?php
                   
         if ($row['storage'] == 'Storage') 
          {
            ?>
              
              <h6 class="amenities"><i class="fa fa-check-circle" aria-hidden="true"></i> Storage  </h6>


            <?php
          }
         else
          {
             ?>
              
               <h6 class="amenities"><i class="fa fa-times-circle" aria-hidden="true"></i> Storage  </h6>

             <?php
          }

     ?>

     <?php
                   
         if ($row['dryer'] == 'Dryer') 
          {
            ?>
              
              <h6 class="amenities"><i class="fa fa-check-circle" aria-hidden="true"></i> Dryer  </h6>


            <?php
          }
         else
          {
             ?>
              
               <h6 class="amenities"><i class="fa fa-times-circle" aria-hidden="true"></i> Dryer  </h6>

             <?php
          }

     ?>

     <?php
                   
         if ($row['laundry'] == 'Laundry') 
          {
            ?>
              
              <h6 class="amenities"><i class="fa fa-check-circle" aria-hidden="true"></i> Laundry  </h6>


            <?php
          }
         else
          {
             ?>
              
               <h6 class="amenities"><i class="fa fa-times-circle" aria-hidden="true"></i> Laundry  </h6>

             <?php
          }

     ?>

     <?php
                   
         if ($row['elevator'] == 'Elevator') 
          {
            ?>
              
              <h6 class="amenities"><i class="fa fa-check-circle" aria-hidden="true"></i> Elevator  </h6>


            <?php
          }
         else
          {
             ?>
              
               <h6 class="amenities"><i class="fa fa-times-circle" aria-hidden="true"></i> Elevator  </h6>

             <?php
          }

     ?>

     <?php
                   
         if ($row['terrace'] == 'Terrace') 
          {
            ?>
              
              <h6 class="amenities"><i class="fa fa-check-circle" aria-hidden="true"></i> Terrace  </h6>


            <?php
          }
         else
          {
             ?>
              
               <h6 class="amenities"><i class="fa fa-times-circle" aria-hidden="true"></i> Terrace  </h6>

             <?php
          }

     ?>
 

          
        </div>
        <div class="col-desc">

                <?php
                   
                   if ($row['bed'] == 'Bedding') 
                   {
                     ?>
                       <h6><i class="fa fa-check-circle" aria-hidden="true"></i> Bedding </h6>
                     <?php
                   }
                   else
                   {
                     ?>
                       <h6><i class="fa fa-times-circle" aria-hidden="true"></i> Bedding </h6>
                     <?php
                   }


                 ?>

                 <?php
                   
                   if ($row['balcony'] == 'Balcony') 
                   {
                     ?>
                       <h6 class="amenities"><i class="fa fa-check-circle" aria-hidden="true"></i> Balcony </h6>
                     <?php
                   }
                   else
                   {
                     ?>
                       <h6 class="amenities"><i class="fa fa-times-circle" aria-hidden="true"></i> Balcony </h6>
                     <?php
                   }


                 ?>

                 <?php
                   
                   if ($row['f_alarm'] == 'Fire Alarm') 
                   {
                     ?>
                       <h6 class="amenities"><i class="fa fa-check-circle" aria-hidden="true"></i> Fire Alarm </h6>
                     <?php
                   }
                   else
                   {
                     ?>
                       <h6 class="amenities"><i class="fa fa-times-circle" aria-hidden="true"></i> Fire Alarm </h6>
                     <?php
                   }


                 ?>

                 <?php
                   
                   if ($row['microwave'] == 'Microwave') 
                   {
                     ?>
                       <h6 class="amenities"><i class="fa fa-check-circle" aria-hidden="true"></i> Microwave </h6>
                     <?php
                   }
                   else
                   {
                     ?>
                       <h6 class="amenities"><i class="fa fa-times-circle" aria-hidden="true"></i> Microwave </h6>
                     <?php
                   }


                 ?>

                  <?php
                   
                   if ($row['heating'] == 'Heating') 
                   {
                     ?>
                       <h6 class="amenities"><i class="fa fa-check-circle" aria-hidden="true"></i> Heating </h6>
                     <?php
                   }
                   else
                   {
                     ?>
                       <h6 class="amenities"><i class="fa fa-times-circle" aria-hidden="true"></i> Heating </h6>
                     <?php
                   }


                 ?>

                 <?php
                   
                   if ($row['sauna'] == 'Sauna') 
                   {
                     ?>
                       <h6 class="amenities"><i class="fa fa-check-circle" aria-hidden="true"></i> Sauna </h6>
                     <?php
                   }
                   else
                   {
                     ?>
                       <h6 class="amenities"><i class="fa fa-times-circle" aria-hidden="true"></i> Sauna </h6>
                     <?php
                   }


                 ?>

               <?php
                   
                   if ($row['d_washer'] == 'Dish Washer') 
                   {
                     ?>
                       <h6 class="amenities"><i class="fa fa-check-circle" aria-hidden="true"></i> Dish Washer </h6>
                     <?php
                   }
                   else
                   {
                     ?>
                       <h6 class="amenities"><i class="fa fa-times-circle" aria-hidden="true"></i> Dish Washer </h6>
                     <?php
                   }


                 ?>

                 <?php
                   
                   if ($row['e_exit'] == 'Dish Washer') 
                   {
                     ?>
                       <h6 class="amenities"><i class="fa fa-check-circle" aria-hidden="true"></i> Emergency Exit </h6>
                     <?php
                   }
                   else
                   {
                     ?>
                       <h6 class="amenities"><i class="fa fa-times-circle" aria-hidden="true"></i> Emergency Exit </h6>
                     <?php
                   }


                 ?>




          
        </div>
        <div class="col-desc">


                  <?php
                   
                   if ($row['coffe_pot'] == 'Coffee pot') 
                   {
                     ?>
                       <h6><i class="fa fa-check-circle" aria-hidden="true"></i> Coffee pot </h6>
                     <?php
                   }
                   else
                   {
                     ?>
                       <h6><i class="fa fa-times-circle" aria-hidden="true"></i> Coffee pot </h6>
                     <?php
                   }


                 ?>

                 <?php
                   
                   if ($row['p_friendly'] == 'Pet Friendly') 
                   {
                     ?>
                       <h6 class="amenities"><i class="fa fa-check-circle" aria-hidden="true"></i> Pet Friendly </h6>
                     <?php
                   }
                   else
                   {
                     ?>
                       <h6 class="amenities"><i class="fa fa-times-circle" aria-hidden="true"></i> Pet Friendly </h6>
                     <?php
                   }


                 ?>

                 <?php
                   
                   if ($row['m_kitchen'] == 'Modern Kitchen') 
                   {
                     ?>
                       <h6 class="amenities"><i class="fa fa-check-circle" aria-hidden="true"></i> Modern Kitchen </h6>
                     <?php
                   }
                   else
                   {
                     ?>
                       <h6 class="amenities"><i class="fa fa-times-circle" aria-hidden="true"></i> Modern Kitchen </h6>
                     <?php
                   }


                 ?>

                 <?php
                   
                   if ($row['o_kitchen'] == 'Outdoor Kitchen') 
                   {
                     ?>
                       <h6 class="amenities"><i class="fa fa-check-circle" aria-hidden="true"></i> Outdoor Kitchen </h6>
                     <?php
                   }
                   else
                   {
                     ?>
                       <h6 class="amenities"><i class="fa fa-times-circle" aria-hidden="true"></i> Outdoor Kitchen </h6>
                     <?php
                   }


                 ?>

                 <?php
                   
                   if ($row['pool'] == 'Pool') 
                   {
                     ?>
                       <h6 class="amenities"><i class="fa fa-check-circle" aria-hidden="true"></i> Pool </h6>
                     <?php
                   }
                   else
                   {
                     ?>
                       <h6 class="amenities"><i class="fa fa-times-circle" aria-hidden="true"></i> Pool </h6>
                     <?php
                   }


                 ?>

                 <?php
                   
                   if ($row['gym'] == 'GYM') 
                   {
                     ?>
                       <h6 class="amenities"><i class="fa fa-check-circle" aria-hidden="true"></i> GYM </h6>
                     <?php
                   }
                   else
                   {
                     ?>
                       <h6 class="amenities"><i class="fa fa-times-circle" aria-hidden="true"></i> GYM </h6>
                     <?php
                   }


                 ?>

                 <?php
                   
                   if ($row['r_terrace'] == 'Roof terrace') 
                   {
                     ?>
                       <h6 class="amenities"><i class="fa fa-check-circle" aria-hidden="true"></i> Roof terrace </h6>
                     <?php
                   }
                   else
                   {
                     ?>
                       <h6 class="amenities"><i class="fa fa-times-circle" aria-hidden="true"></i> Roof terrace </h6>
                     <?php
                   }


                 ?>



          
        </div>
      </div>




        <br>
      <h4>Location</h4>


     <div class="row amenities">
       <div class="col-desc">
       <h6>Address - <?php echo $row['address']; ?></h6>
       </div>
       <div class="col-desc">
       <h6>City - <?php echo $row['city']; ?></h6>
       </div>
       <div class="col-desc">
       <h6>Country - <?php echo $row['country']; ?></h6>
        </div>
     </div>
     <div class="row mt-2">
       <div class="col-desc">
       <h6>Pin Code -  <?php echo $row['pin']; ?></h6>
       </div>
       <div class="col-desc">
       <h6>State - <?php echo $row['state']; ?></h6>
       </div>
       <div class="col-desc">
       <h6>Neighbour - <?php echo $row['neighb']; ?></h6>
        </div>
     </div>


<?php

$id = $_GET['id'];

include '../db_conn.php';

$sql = " select * from review where property_id = '$id' ";

$run = mysqli_query($conn,$sql);

$tota_revi = mysqli_num_rows($run);

?>

        <br>
      <h4><span style="font-size: 20spx;"><?php echo $tota_revi; ?></span> Reviews</h4>
    <div class="amenities">
      
    </div>
<?php

$id = $_GET['id'];

include '../db_conn.php';

$sql = " select * from review where property_id = '$id' ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run))
{

  $user_id = $row['user_id'];

  $arar = " select * from a_regi where id = '$user_id' ";

  $runaa = mysqli_query($conn,$arar);

  while ($usra = mysqli_fetch_array($runaa)) 
  {

?>

      <div class="row">
        <div class="column-info">
          <?php $content = $usra['f_name']; ?> <h3 style="background: #0001; border-radius: 50px; text-align: center; line-height: 50px; width: 52px; height: 50px;"><?php echo $a = $content[0]; ?></h3>
        </div>
        <div class="col-md-10">
         <?php echo $usra['f_name']; ?> <?php echo $usra['l_name']; ?> &nbsp&nbsp <span style="font-size: 11px; color: gray;"><?php echo $row['datee']; ?></span>
       
       <h6 style="font-size: 12px; color: gray; line-height: 30px;"><?php echo $row['reviewa']; ?></h6>

        </div>
      </div>

<?php } } ?>
<br>
<h4>Request A Showing</h4>
<label for="start">visit date</label>

<input type="date" id="start" name="trip-start"
       value="2022-05-22"
       max="2030-12-31">
<h6 class="mt-4">Your Name</h6>
<input type="text" name="name" placeholder="Enter Your Name" class="form-control">

<h6 class="mt-2">Email Id</h6>
<input type="text" name="email" placeholder="Enter Email Id" class="form-control">

<h6 class="mt-2">Phone Number</h6>
<input type="text" name="phone" placeholder="Enter Phone Number" class="form-control">

<h6 class="mt-2">Message</h6>
<textarea name="message" placeholder="Enter Message" rows="5" class="form-control"></textarea>
<input type="submit" name="submit" value="Send Request" class="btn btn-primary rounded-pill mt-2">


 <br>
      <h4>Leave a Review</h4>
       
      <h6 class="amenities">Review</h6>
      <textarea name="revieaw" cols="50" rows="8" placeholder="Enter Your Review" class="form-control"></textarea>
      <input type="submit" name="submit" value="Review" class="btn btn-primary rounded-pill amenities" style="width: 150px;">




      <?php

include '../db_conn.php';

$email = $_SESSION['email'];

$sql = " select * from a_regi where email = '$email' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

$user_id = $row['id'];

?>
<?php


$datae = date("m/d/y G.i:s");

  include '../db_conn.php';


if (isset($_POST['submit'])) 
{
  
  $reviewa = $_POST['revieaw'];
  $user_id = $row['id'];
  $property_id = $_GET['id'];
  

  $sql = " insert into review (reviewa,user_id,property_id,datee) values ('$reviewa','$user_id','$property_id','$datae') ";

  if (mysqli_query($conn,$sql)) 
  {
    echo "Done";
  }
  else
  {
    echo "Not Done";
  }
  

}

?>


      </div>
    </div>
    <div class="col-desc">

        
    <div class="container">
  
        <div style="float: right;">
          <button type="submit" name="submit" value="Add To Favourite" class="btn-col-desc"><i class="fa fa-heart" aria-hidden="true"></i> &nbsp Add To Favourite </button>
        </div>
   

     


        <?php

include '../db_conn.php';

$email = $_SESSION['email'];

$saasql = " select * from a_regi where email = '$email' ";

$rsaasun = mysqli_query($conn,$saasql);

$rodsdsw = mysqli_fetch_array($rsaasun);

$id = $rodsdsw['id'];

?>
<?php

$id = $_GET['id'];

include '../db_conn.php'; 

if (isset($_POST['submit'])) 
{
 
  $property_id = $_GET['id'];
  $user_id = $rodsdsw['id'];
   
  $sql = " insert into favourite (property_id,user_id) values ('$property_id','$user_id') ";

  if (mysqli_query($conn,$sql)) 
  {
    echo '<meta http-equiv="refresh" content="0">';
  }
  else
  {
    echo "Not DOne";
  }

}


?>


<br><br><br><br><br>
<h4>Posted By Owner </h4>




<?php

include '../db_conn.php';

$email = $_SESSION['email'];

$sql = " select * from a_regi where email = '$email' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

$issd = $row['id'];

?>
<?php

$id = $_GET['id'];

include '../db_conn.php';

$sql = " select * from addproperty where id = '$id' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

?>



<?php
  
  $ia = $row['user_id'];

 include '../db_conn.php';

 $sqal = " select * from a_regi where id = '$ia' ";

 $raun = mysqli_query($conn,$sqal);
 
 $row_u = mysqli_fetch_array($raun);
 
 ?>



<div class="row amenities">
  <div class="column-info">
    <?php $content = $row_u['f_name']; ?> <h3 style="background: #0001; border-radius: 50px; text-align: center; line-height: 50px; width: 52px; height: 50px;"><?php echo $a = $content[0]; ?></h3>
  </div>
</div>

<div class="row amenities">
  <div class="column-style" style="text-align: right;">
    <i class="fa fa-user-o" aria-hidden="true"></i>
  </div>
  <div class="col-10">
    <?php echo $row_u['f_name']; ?> <?php echo $row_u['l_name']; ?>
  </div>
</div>
<div class="row mt-2">
  <div class="column-style" style="text-align: right;">
   <i class="fa fa-phone" aria-hidden="true"></i>
  </div>
  <div class="col-10">
   <a href="tel:<?php echo $row_u['phone']; ?>" style="text-decoration: none; color: #001;"><?php echo $row_u['phone']; ?></a>
  </div>
</div>
<div class="row mt-2">
  <div class="column-style" style="text-align: right;">
   <i class="fa fa-envelope-o" aria-hidden="true"></i>
  </div>
  <div class="col-10">
   <a href="mailto:<?php echo $row_u['email']; ?>" style="text-decoration: none; color: #001;"><?php echo $row_u['email']; ?></a>
  </div>
</div>





<?php

$datae = date("m/d/y G.i:s");

include '../db_conn.php';

if (isset($_POST['submit'])) 
{

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $user_id = $row['user_id'];
  $property_id = $_GET['id'];
  $trip = $_POST['trip-start'];


  
  $sql = " insert into request (name,email,phone,message,user_id,property_id,date_e,v_date) values ('$name','$email','$phone','$message','$user_id','$property_id','$datae','$trip') ";

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
  </div>
</div>


<div class="container_column4">
  <h4>Related Property</h4>
</div>

<div class="container mt-2">
  <div class="row">
    <?php

$id = $_GET['id'];

include '../db_conn.php';

$sql = " select * from addproperty where id != '$id' ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
  
?>

    <div class="col-desc mt-4">
      <img src="Image/<?php echo $row['img_1']; ?>" style="width: 100%; height: 300px; border-radius: 10px 10px 0px 0px; object-fit: cover;">
      <div class="card" style="border-radius: 0px 0px 10px 10px;">
        <div class="card-body">
          <a style="text-decoration: none;" href="view_property.php?id=<?php echo $row['id']; ?>"><h4 style="white-space: nowrap; text-decoration: none; color: #111; width: 100%; overflow: hidden; text-overflow: ellipsis;"><?php echo $row['title'] ?></h4></a>
          <h5 class="text-primary">ksh;<?php echo $row['price'] ?></h5>
          <a href="view_property.php?id=<?php echo $row['id']; ?>"><input type="button" name="" value="Read More" class="btn btn-dark rounded-pill " style="width: 150px;"></a>
        </div>
      </div>
    </div>
    
  <?php } ?> 
  </div>
</div>





<br><br>


<?php include 'footer_un.php'; ?>








<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
      });
      var swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        spaceBetween: 10,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiper,
        },
      });
    </script>

</form>
</body>
</html>