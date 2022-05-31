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
	<title>Add Property</title>
	<style type="text/css">
		.text_p
    {
      font-size: 12px;
      padding-top: 15px;
    }
    .labela{
    padding: 7px;
    background: #1266F1; 
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
	

<?php include 'navabar.php' ?>

	




<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="container">
				<br>
				<h3>Add Property</h3>
          
                <div class="row">
                	<div class="col-md-3">
                		 <h6 class="text_p">Title</h6>
                         <input type="text" name="title" placeholder="Enter Title" class="form-control rounded-pill">
                	</div>
                	<div class="col-md-3">
                		 <h6 class="text_p">Price</h6>
                         <input type="text" name="price" placeholder="Enter Price" class="form-control rounded-pill">
                	</div>
                	<div class="col-md-3">
                		 <h6 class="text_p">Status</h6>
                         <select name="status" class="form-control rounded-pill">
					       <option>Select</option>
                            <option value="Rent">Rent</option>
                           <option value="Sale">Sale</option>
				        </select>
                	</div>
                	<div class="col-md-3">
                		 <h6 class="text_p">Type</h6>
                         <select name="type" class="form-control rounded-pill">
					<option>Select</option>
                    <option value="Building">Building</option>
                    <option value="Office">Office</option>
				</select>
                	</div>
                </div>

                  

                <div class="row">
                	<div class="col-md-3">
                		 <h6 class="text_p">Location</h6>
                         <input type="text" name="location" placeholder="Enter Location" class="form-control rounded-pill">
                	</div>
                	<div class="col-md-3">
                		 <h6 class="text_p">Bedrooms</h6>
                         <input type="text" name="bedrooms" placeholder="Enter number of Bedrooms" class="form-control rounded-pill">
                	</div>
                	<div class="col-md-3">
                		 <h6 class="text_p">Bathrooms</h6>
                        <input type="text" name="bathrooms" placeholder="Enter number of Bathrooms" class="form-control rounded-pill">
                	</div>
                	<div class="col-md-3">
                		 <h6 class="text_p">Floors</h6>
                         <input type="text" name="floors" placeholder="Enter number of Floors" class="form-control rounded-pill">
                	</div>
                </div>


                 <div class="row">
                	<div class="col-md-3">
                		 <h6 class="text_p">Garages</h6>
                         <input type="text" name="garages" placeholder="Enter number of Garages" class="form-control rounded-pill">
                	</div>
                	<div class="col-md-3">
                		 <h6 class="text_p">Parking place</h6>
                         <input type="text" name="parking_place" placeholder="Enter number of Parking place" class="form-control rounded-pill">
                	</div>
                	<div class="col-md-3">
                		 <h6 class="text_p">Area</h6>
                        <input type="text" name="area" placeholder="Enter Area Size" class="form-control rounded-pill">
                	</div>
                	<div class="col-md-3">
                		 <h6 class="text_p">Size</h6>
                         <input type="text" name="size" placeholder="Enter Area Size" class="form-control rounded-pill">
                	</div>
                </div>

                <div class="row">
                	<div class="col-md-3">
                		 <h6 class="text_p">Sale Or Rent Price</h6>
                         <input type="text" name="s_r_price" placeholder="Enter Sale Or Rent Price" class="form-control rounded-pill">
                	</div>
                </div>

                <div class="row">
                	<div class="col-md-12">
                		<h6 class="text_p">Description</h6>
                		<textarea name="description" rows="8" class="form-control"></textarea>
                	</div>
                </div>





               <h4 class="mt-4">Property Features</h4>


               <div class="row mt-3">
               	 <div class="col-md-3">
               		<input type="checkbox" class="form-check-input" name="air_condi" value="Air conditioning"> &nbsp <label>Air conditioning</label>
               	 </div>
               	  <div class="col-md-3">
               		<input type="checkbox" class="form-check-input" name="bed" value="Bedding"> &nbsp <label>Bedding</label>
               	 </div>
               	  <div class="col-md-3">
               		<input type="checkbox" class="form-check-input" name="coffe_pot" value="Coffee pot"> &nbsp <label>Coffee pot</label>
               	 </div>
               	  <div class="col-md-3">
               		<input type="checkbox" class="form-check-input" name="c_cooling" value="Center Coooling"> &nbsp <label>Center Coooling</label>
               	 </div>
               </div>


               <div class="row mt-2">
               	<div class="col-md-3">
               		<input type="checkbox" class="form-check-input" name="balcony" value="Balcony"> &nbsp <label>Balcony</label>
               	</div>
               	<div class="col-md-3">
               		<input type="checkbox" class="form-check-input" name="p_friendly" value="Pet Friendly"> &nbsp <label>Pet Friendly</label>
               	</div>
               	<div class="col-md-3">
               		<input type="checkbox" class="form-check-input" name="barbeque" value="Barbeque"> &nbsp <label>Barbeque</label>
               	</div>
               	<div class="col-md-3">
               		<input type="checkbox" class="form-check-input" name="f_alarm" value="Fire Alarm"> &nbsp <label>Fire Alarm </label>
               	</div>
               </div>



               <div class="row mt-2">
               	<div class="col-md-3">
               		<input type="checkbox" class="form-check-input" name="m_kitchen" value="Modern Kitchen"> &nbsp <label>Modern Kitchen</label>
               	</div>
               	<div class="col-md-3">
               		<input type="checkbox" class="form-check-input" name="storage" value="Storage"> &nbsp <label>Storage</label>
               	</div>
               	<div class="col-md-3">
               		<input type="checkbox" class="form-check-input" name="microwave" value="Microwave"> &nbsp <label>Microwave</label>
               	</div>
               	<div class="col-md-3">
               		<input type="checkbox" class="form-check-input" name="o_kitchen" value="Outdoor Kitchen"> &nbsp <label>Outdoor Kitchen</label>
               	</div>
               </div>




               <div class="row mt-2">
               	<div class="col-md-3">
               		<input type="checkbox" class="form-check-input" name="dryer" value="Dryer"> &nbsp <label>Dryer</label>
               	</div>
               	<div class="col-md-3">
               		<input type="checkbox" class="form-check-input" name="heating" value="Heating"> &nbsp <label>Heating</label>
               	</div> 
               	<div class="col-md-3">
               		<input type="checkbox" class="form-check-input" name="pool" value="Pool"> &nbsp <label>Pool</label>
               	</div>
               	<div class="col-md-3">
               		<input type="checkbox" class="form-check-input" name="laundry" value="Laundry"> &nbsp <label>Laundry</label>
               	</div>
               </div>



               <div class="row mt-2">
               	<div class="col-md-3">
               		<input type="checkbox" class="form-check-input" name="sauna" value="Sauna"> &nbsp <label>Sauna</label>
               	</div>
               	<div class="col-md-3">
               		<input type="checkbox" class="form-check-input" name="gym" value="GYM"> &nbsp <label>GYM</label>
               	</div>
               	<div class="col-md-3">
               		<input type="checkbox" class="form-check-input" name="elevator" value="Elevator"> &nbsp <label>Elevator</label>
               	</div>
               	<div class="col-md-3">
               		<input type="checkbox" class="form-check-input" name="d_washer" value="Dish Washer"> &nbsp <label>Dish Washer</label>
               	</div>
               </div>



               <div class="row mt-2">
               	<div class="col-md-3">
               		<input type="checkbox" class="form-check-input" name="r_terrace" value="Roof terrace"> &nbsp <label>Roof terrace</label>
               	</div>
               	<div class="col-md-3">
               		<input type="checkbox" class="form-check-input" name="terrace" value="Terrace"> &nbsp <label>Terrace</label>
               	</div>
               	<div class="col-md-3">
               		<input type="checkbox" class="form-check-input" name="e_exit" value="Emergency Exit"> &nbsp <label>Emergency Exit</label>
               	</div>
               	<div class="col-md-3">
               		
               	</div>
               </div>



          <h4 class="mt-4">Property Gallary</h4>



          <div class="row mt-3">
          	<div class="col-md-4">  
          		<h6 class="text_p">Gallary 1</h6><label class="labela"> Select Image <input type="file" size="60" name="img_1"></label> 
          	</div>
          	<div class="col-md-4">  
          		<h6 class="text_p">Gallary 2</h6><label class="labela"> Select Image <input type="file" size="60" name="img_2"></label> 
          	</div>
          	<div class="col-md-4">  
          		<h6 class="text_p">Gallary 3</h6><label class="labela"> Select Image <input type="file" size="60" name="img_3"></label> 
          	</div>
          </div>

          <div class="row mt-3">
          	<div class="col-md-4">  
          		<h6 class="text_p">Gallary 4</h6><label class="labela"> Select Image <input type="file" size="60" name="img_4"></label> 
          	</div>
          	<div class="col-md-4">  
          		<h6 class="text_p">Gallary 5</h6><label class="labela"> Select Image <input type="file" size="60" name="img_5"></label> 
          	</div>
          	<div class="col-md-4">  
          		<h6 class="text_p">Gallary 6</h6><label class="labela"> Select Image <input type="file" size="60" name="img_6"></label> 
          	</div>
          </div>



         <h4 class="mt-4">Property Location</h4>



         <div class="row mt-3">
         	<div class="col-md-4">
         		<h6 class="text_p">Address</h6>
         		<input type="text" name="address" placeholder="Enter Address" class="form-control rounded-pill">
         	</div>
         	<div class="col-md-4">
         		<h6 class="text_p">Country</h6>
         		<input type="text" name="country" placeholder="Enter Country" class="form-control rounded-pill">
         	</div>
         	<div class="col-md-4">
         		<h6 class="text_p">State</h6>
         		<input type="text" name="state" placeholder="Enter State" class="form-control rounded-pill">
         	</div>
         </div>

         <div class="row mt-3">
         	<div class="col-md-4">
         		<h6 class="text_p">City</h6>
         		<input type="text" name="city" placeholder="Enter Address" class="form-control rounded-pill">
         	</div>
         	<div class="col-md-4">
         		<h6 class="text_p">Zip/Postel Code</h6>
         		<input type="text" name="pin" placeholder="Enter Country" class="form-control rounded-pill">
         	</div>
         	<div class="col-md-4">
         		<h6 class="text_p">Neighbourhood</h6>
         		<input type="text" name="neighb" placeholder="Enter State" class="form-control rounded-pill">
         	</div>
         </div>


<br><br>
  <center><input type="submit" name="submit" value="Add Property" class="btn btn-dark rounded-pill" style="width: 180px;"></center>




			</div>
		</div>
	</div>
</div>




<?php

include '../db_conn.php';

$email = $_SESSION['email'];

$sql = " select * from a_regi where email = '$email' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

$user_id = $row['id'];

?>


<?php

error_reporting(0);

$conn = mysqli_connect("localhost:8111","root","1234","estate");


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

     $img_1 = $_FILES['img_1'] ['name'];

    $image_tmp_name = $_FILES['img_1']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$img_1");

    $img_2 = $_FILES['img_2'] ['name'];

    $image_tmp_name = $_FILES['img_2']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$img_2");

    $img_3 = $_FILES['img_3'] ['name'];

    $image_tmp_name = $_FILES['img_3']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$img_3");

    $img_4 = $_FILES['img_4'] ['name'];

    $image_tmp_name = $_FILES['img_4']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$img_4");

    $img_5 = $_FILES['img_5'] ['name'];

    $image_tmp_name = $_FILES['img_5']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$img_5");

    $img_6 = $_FILES['img_6'] ['name'];

    $image_tmp_name = $_FILES['img_6']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$img_6");

    $address = $_POST['address'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $pin = $_POST['pin'];
    $neighb = $_POST['neighb'];





    

   $sql = " insert into addproperty (title,description,price,status,type,location,bedrooms,bathrooms,floors,garages,parking_place,area,size,s_r_price,air_condi,bed,coffe_pot,c_cooling,balcony,p_friendly,barbeque,f_alarm,m_kitchen,storage,microwave,o_kitchen,dryer,heating,pool,laundry,sauna,gym,elevator,d_washer,r_terrace,terrace,e_exit,img_1,img_2,img_3,img_4,img_5,img_6,address,country,state,city,pin,neighb,user_id) values ('$title','$description','$price','$status','$type','$location','$bedrooms','$bathrooms','$floors','$garages','$parking_place','$area','$size','$s_r_price','$air_condi','$bed','$coffe_pot','$c_cooling','$balcony','$p_friendly','$barbeque','$f_alarm','$m_kitchen','$storage','$microwave','$o_kitchen','$dryer','$heating','$pool','$laundry','$sauna','$gym','$elevator','$d_washer','$r_terrace','$terrace','$e_exit','$img_1','$img_2','$img_3','$img_4','$img_5','$img_6','$address','$country','$state','$city','$pin','$neighb','$user_id') ";

   if (mysqli_query($conn,$sql)) 
   {
   	
   }
   else
   {
   	echo "Not Done";
   }


}

?>
<br><br>


<?php include 'footer.php'; ?>


</form>
</body>
</html>