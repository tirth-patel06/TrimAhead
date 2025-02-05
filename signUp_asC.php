<?php
session_start();
?>
<a href="login.php"></a>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up Page</title>
    <link rel="stylesheet" href="./navbarNorm.css">
    <link rel="stylesheet" href="./signUp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="./image/Logo/favicon-logo.png"/>
    <link rel="stylesheet" href="./footer.css">
</head>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="navbar-logo">
                <img src="./image/Logo/OCNBG.png" alt="">
            </div>
            <div class="search">
                <div class="search-icon">
                    <i class="fa-solid fa-magnifying-glass""></i>
                </div>
                <input type="text" placeholder="Enter Pincode" class="input-box">
            </div>
            <div class="login">
                <div class="user-icon">
                    <i class="fa-regular fa-circle-user"></i>
                </div>
                Login
            </div>
        </div>
    </header>

    <div class="content">
        <div class="signUp-content">
            <div class="signUp-heading">
                Sign-Up
            </div>
            <div class="signUp-form">
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                    <div class="input-box">
                        <label for="fname" >Full Name</label>
                        <input type="text" id="fname" name="Name" placeholder="Enter Your Full Name" required>
                    </div>
                    <div class="input-box">
                        <label for="age" >Age</label>
                        <input type="text" id="age" name = "Age" placeholder="Enter Your Age" required>
                    </div>
                    <div class="input-box">
                        <label for="adder" >Address</label>
                        <input type="text" id="addr" name="Address" placeholder="Enter Your Address" required>
                    </div>
                    <div class="input-box">
                        <label for="pincode" >Pincode</label>
                        <input type="number" id="pincode" name = "Pincode" placeholder="Enter Pincode" required>
                    </div>
                    <div class="input-box">
                        <label for="email" >E-mail</label>
                        <input type="email" id="email" name = "Email" placeholder="Enter E-mail" required>
                    </div>
                    <div class="input-box">
                        <label for="phone" >Phone Number</label>
                        <input type="number" id="phone" name = "Phone_Number" placeholder="10 Digit Number" required>
                    </div>
                    <div class="input-box">
                        <label for="password" >Password :</label>
                        <input type="password" id="password" name = "Password" placeholder="Enter Password" required>
                    </div>
                    <div class="input-box">
                        <label for="cpassword" >Confirm Password :</label>
                        <input type="password" id="cpassword" name = "Confirm_Password" placeholder="Re-Enter Password" required>
                    </div>
                    <div class="signUp-button">
                        <button  type="submit" name="Submit" href="signUp_asC.php" >Sign Up</button>
                    </div>
                </form>
            </div>
            <div class="login-ask">
                Old User ? 
                <a href="./login.html">Login</a>
            </div>
        </div>
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
    <script src="./signUp.js"></script>
</body>
</html>

<?php
include 'connection.php';

if(isset($_POST['Submit'])){
            $Name = $_POST['Name'];
            $Age = $_POST['Age'];
            $Address = $_POST['Address'];
            $Pincode = $_POST['Pincode'];
            $Email = $_POST['Email'];
            $Phone_Number = $_POST['Phone_Number'];
            $Password = $_POST['Password'];
            $Confirm_Password = $_POST['Confirm_Password'];

            $pass = password_hash($Password,PASSWORD_BCRYPT);
            $cpass = password_hash($Confirm_Password, PASSWORD_BCRYPT);

            $emailquery = "select * from `cc_project`.`customer` where Email = '$Email' " ;
            $query = mysqli_query($con,$emailquery);

            $emailcount = mysqli_num_rows($query);

            if($emailcount>0){
                 ?>
                <script>
                    alert("email already exists");
                </script>
                <?php

            }else{
                if($Password === $Confirm_Password){
                     $insertquery = "insert into `cc_project`.`customer`(Name,Age,Address,Pincode,Email,Phone_Number,Password,Confirm_Password) values('$Name','$Age','$Address','$Pincode','$Email','$Phone_Number','$pass','$cpass')";
                     $res = mysqli_query($con,$insertquery);

                        if($res){
                            ?>
                               echo "<script>
                                alert('Sign Up Successful');
                                     window.location.href='index.php';
                                    </script>";
                                exit();

                                <?php
                        }
                        else{
                        ?>
                        <script>
                               alert("Sign Up Failed");
                        </script>
                        <?php

                        }

                }else{
                     ?>
                        <script>
                               alert("Passwords does not match");
                        </script>
                        <?php

                }
            }






}
?>
