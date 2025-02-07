<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>

    <link rel="stylesheet" href="./livebook.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="./image/Logo/favicon-logo.png"/>
    <link rel="stylesheet" href="./navbarNorm.css">
    <link rel="stylesheet" href="./footer.css">
    <link rel="stylesheet" href="./analysis.css">
</head>
<?php
$mobile=$_GET['mobile'];
$Phone_Number=$_GET['mobile'];
include "connection.php";

$selectquery="select * from `cc_project`.`transactions` where Mobile='$mobile' ";


$query=mysqli_query($con,$selectquery);
$num=mysqli_num_rows($query);
$res=mysqli_fetch_array($query);




?>
<body>
    <header>
        <div class="navbar">
            <div class="alogin-navbar-logo">
                <img src="./image/Logo/OCNBG.png" alt="">
            </div>
        </div>
    </header>


    <div class="dashboard">
        <aside class="sidebar">
            <h2>Dashboard</h2>
            <ul>
            <li><a href="./alogin-index.php?mobile=<?php echo $Phone_Number;?>">Home</a></li>
              
                <li><a href="./userdashboard.php?mobile=<?php echo $Phone_Number;?>">Profile</a></li>
          
                <li><a href="./livebook.php?mobile=<?php echo $Phone_Number;?>">Live Booking</a></li>
                <li><a href="./pBook.php?mobile=<?php echo $Phone_Number;?>">Previous Booking</a></li>
                <li><a href="./index.php">Logout</a></li>
            </ul>
        </aside>
    </div>
        
    <div class="content">
    <?php 

         
           while($res=mysqli_fetch_array($query)){
         if(number_format($res['Queuecount']!=-1)){
            
           
               ?>
        <div class="shop-element">
            <div class="content-box">
            <div class="shop-detail">
                <div class="shop-image" style="background-image: url(./image/shop-image.jpg);"></div>
                <div class="shop-info">
                    <div class="shop-name">
                        <?php echo $res['VendorName'];?>
                    </div>
                    <div class="shop-location">
                       
                    </div>
                </div>
            </div>
            <div class="queue-detail">
                <div class="queue-length">
                    Your Live Position :
                    <div class="queue-length-digit">
                      <?php echo number_format($res['Queuecount'])+1;?>
                    </div>
                </div>
                <div class="expected-time">
                    Expected time:
                    <div class="expected-time-digit">
                    <?php echo (number_format($res['Queuecount'])+1)*25;?> minutes
                    </div>
                </div>
            </div>
            <div class="extra-option">
                <div class="book-date">
                    Date of Booking : 
                    <pre> </pre>
                    <div class="book-time-digit">
                        <?php echo $res['Times'];?>
                    </div>
                </div>
                
                <div class="transection-id">
                    Transaction ID:
                    <pre> </pre>
                    <div class="transection-id-digit">
                        
                    <?php echo $res['ID'];?>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <?php }} ?>
    </div>

    <script src="./content.js"></script>
    <script src="./analysis.js"></script>
    <script src="./navbarNorm.js"></script>
    <script src="./userdashboard.js"></script>
</body>
</html>
