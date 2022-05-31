 <div class="dashboard-header">
 <link rel="stylesheet" href="style.css">
            <nav class="navbarfixed">
                <a class="brand" href="dashboard.php">NGARA HOMES</a>
               
                <div class="collapse" id="navbarSupportedContent">
                    <ul class="navbar-top">
                      
                     
                        <li class="nav-user">
                            <a class="nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/images.png" alt="" class="user-avatar"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <?php
$aid=$_SESSION['remsaid'];
$ret=mysqli_query($con,"select AdminName from tbladmin where ID='$aid'");
$row=mysqli_fetch_array($ret);
$name=$row['AdminName'];

?>
                                    <h5 class="text-white"><?php echo $name; ?> </h5>
                                    <span class="status"></span><span class="mar">Available</span>
                                </div>
                                <a class="dropdown-item" href="admin-profile.php"><i class="mar"></i>Account</a>
                                <a class="dropdown-item" href="change-password.php"><i class="mar"></i>Setting</a>
                                <a class="dropdown-item" href="logout.php"><i class="mar"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>