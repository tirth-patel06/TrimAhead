<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop List</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="./image/Logo/favicon-logo.png"/>
    <link rel="stylesheet" href="./navbarNorm.css">
    <link rel="stylesheet" href="./alogin_userPage.css">
    <link rel="stylesheet" href="./footer.css">
    <link rel="stylesheet" href="./analysis.css">
</head>
<?php
$id=$_GET['id'];
$mobile=$_GET['mobile'];
    include 'connection.php';
   $selectquery="select * from `cc_project`.`owner` where Pincode='$id'";
   $selectquery1="select * from `cc_project`.`customer` where Phone_Number='$mobile'";
   $query=mysqli_query($con,$selectquery);
$num=mysqli_num_rows($query);
$res=mysqli_fetch_array($query);
$query1=mysqli_query($con,$selectquery1);
$num=mysqli_num_rows($query);
$res1=mysqli_fetch_array($query1);
if($num==0){
    header('Location: ./noShop.html');
}
?>

<body>

    <header>
        <div class="navbar">
            <div class="alogin-navbar-logo">
            <a href="alogin_userPage.php?id=<?php echo $id?>&mobile=<?php echo $mobile?>"><img src="./image/Logo/OCNBG.png" alt=""></a> 
            </div>
            <div class="search">
                <div class="search-icon">
                    <i class="fa-solid fa-magnifying-glass""></i>
                </div>
                <input type="text" placeholder="Enter Pincode" class="alogin-input-box">
                <input id="id" type="hidden" value="<?php echo $mobile?>">
            </div>
            <details>
                <summary>
                    <div class="user-name">
                        <div class="alogin-user-icon">
                            <i class="fa-regular fa-circle-user"></i>
                        </div>
                       <?php echo $res1['Name'];?>
                    </div>
                </summary>
                <ul>
                    <li id="userProfile">Profile</li>
                    <li id="oldBooking">Previous Booking</li>
                    <li id="signOut">Sign Out</li>
                </ul>
            </details>
        </div>
    </header>

    <div class="content">
    <?php 
           $i=0;
           while($res=mysqli_fetch_array($query)){

            $i=number_format($res['Queue'])*25;
             
           
               ?>
        <div class="shop-element">
            <div class="content-box">
                <div class="shop-detail">
                    <div class="shop-image" style="background-image: url(./image/shop-image.jpg);"></div>
                    <div class="shop-info">
                        <div class="shop-name">
                        <?php echo $res['Shop_Name'];?>
                        </div>
                        <div class="shop-location">
                        <?php echo $res['Address'];?>
                        </div>
                    </div>
                </div>
                <div class="queue-detail">
                    <div class="queue-length">
                        Length of Queue :
                        <div class="queue-length-digit">
                        <?php echo $res['Queue'];?>
                        </div>
                    </div>
                    <div class="expected-time">
                        Expected time :
                        <div class="expected-time-digit">
                        <?php echo $i;?>minute
                        </div>
                    </div>
                </div>
                <div class="extra-option">
                <!-- onclick="book()" -->
                    <div class="book-button" onclick="book()">
                 <button >BOOK
                 <input id="mobile" type="hidden" value="<?php echo $mobile;?>">
                 <input id="serial_no" type="hidden" value="<?php echo $res['serial_no'];?>">
                 <input id="vname" type="hidden" value="<?php echo $res['Shop_Name'];?>">
                 <input id="customer" type="hidden" value="<?php echo $res1['Name'];?>">
                 <input id="queue" type="hidden" value="<?php echo $res['Queue'];?>">
                 </button>
                    </div>
                   
                    <div class="analysis">
                        <div class="main">
                        <br>
                            <a href="graph.php" class="link">Check Shop Analysis</a><br>
                            </div>
                            
                            <div class="popup"><iframe class="popupiframe"></iframe></div>
                            <div class="popupdarkbg"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="shop-element">
            <div class="content-box">
                <div class="shop-detail">
                    <div class="shop-image" style="background-image: url(./image/shop-image.jpg);"></div>
                    <div class="shop-info">
                        <div class="shop-name">
                            Royal Razor
                        </div>
                        <div class="shop-location">
                            46A/1B Near Santosh Sweets, Behind SBI Bank, Teliarganj, Prayagraj, Uttar Pradesh 211002
                        </div>
                    </div>
                </div>
                <div class="queue-detail">
                    <div class="queue-length">
                        Length of Queue :
                        <div class="queue-length-digit">
                            5
                        </div>
                    </div>
                    <div class="expected-time">
                        Expected time :
                        <div class="expected-time-digit">
                            90 min
                        </div>
                    </div>
                </div>
                <div class="extra-option">
                    <div class="book-button" onclick="book()">
                        <button>BOOK</button>
                    </div>
                    <div class="analysis">
                        <div class="main">
                            <a href="" class="link">Check Shop Analysis</a><br>
                            </div>
                            
                            <div class="popup"><iframe class="popupiframe"></iframe></div>
                            <div class="popupdarkbg"></div>
                    </div>
                </div>
            </div>
        </div> -->
        <?php }?>

    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-main-info-link-box">
                <div class="footer-main-info-link-box-title">
                    ABOUT
                </div>
                <ul>
                    <li><a href="">Contect Us</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Careers</a></li>
                    <li><a href="">Press</a></li>
                    <li><a href="">Corporate Information</a></li>
                </ul>
            </div>
            <div class="footer-main-info-link-box">
                <div class="footer-main-info-link-box-title">
                    ABOUT
                </div>
                <ul>
                    <li><a href="">Payment</a></li>
                    <li><a href="">Booking</a></li>
                    <li><a href="">Cancellation & Return</a></li>
                    <li><a href="">FAQ</a></li>
                </ul>
            </div>
            <div class="footer-main-info-link-box">
                <div class="footer-main-info-link-box-title">
                    CONSUMER POLICY
                </div>
                <ul>
                    <li><a href="">Cancellation & Return</a></li>
                    <li><a href="">Terms Of Use</a></li>
                    <li><a href="">Security</a></li>
                    <li><a href="">Privacy</a></li>
                    <li><a href="">Sitemap</a></li>
                    <li><a href="">Grievance Redressal</a></li>
                    <li><a href="">EPR Compliance</a></li>
                </ul>
            </div>
            
            <div class="footer-main-info-box">
                <div class="info1">
                    <div class="footer-main-info-box-title">
                        Mail Us:
                    </div>
                        <pre>
TrimAhead Internet Private Limited,
Swami Vivekananda Boys Hostel,
Motilal Nehru National Institute of Technology 
Campus, Prayagraj,
211004, Uttar Pradesh, India
                        </pre>

                    <div class="footer-main-info-box-title">
                        Social:
                    </div>

                    <div class="footer-info-social-media-icon">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-x-twitter"></i>
                        <i class="fa-brands fa-youtube"></i>
                    </div>
                </div>
            </div>

            <div class="footer-brand-logo">
                <img src="./image/Logo/WCNBG.png" alt="">
            </div>
        </div>
    </footer>

    <script src="./navbarNorm.js"></script>
    <script src="./content.js"></script>
    <script src="./analysis.js"></script>
    
</body>
</html>

