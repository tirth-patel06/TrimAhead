<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./navbarNorm.css">
    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="./image/Logo/favicon-logo.png"/>
    <link rel="stylesheet" href="./footer.css">
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
        <div class="login-content">
            <div class="login-heading">
                Login
            </div>
            <div class="login-form">
                <form action="" method="POST">
                    <div class="input-box">
                        <label for="email" >Email :</label>
                        <input type="email" id="email" name = "Email" placeholder="Enter Registered Email">
                    </div>
                    <div class="input-box">
                        <label for="password" >Password :</label>
                        <input type="password" id="password" name = "Password" placeholder="Enter Your Password" required>
                    </div>
                    <div class="login-button">
                        <button type="submit" name = "Submit">Login</button>
                    </div>
                </form>
            </div>
            <div class="signup-ask">
                New User ?
                <a href="./signUp_ask.html">Create new account</a>
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
</body>
</html>

<?php

include "connection.php";
if(isset($_POST['Submit'])){
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $emailo_search = "select * from `cc_project`.`owner` where Email = '$Email'";
    $emailc_search = "select * from `cc_project`.`customer` where Email = '$Email' ";
    $queryo = mysqli_query($con,$emailo_search);
    $queryc = mysqli_query($con,$emailc_search);

    $emailo_count = mysqli_num_rows($queryo);
    $emailc_count = mysqli_num_rows($queryc);             //for searching in rows

    if($emailo_count){                                  //agar email mil bhi gya toh bhi chlegi
       $emailo_pass = mysqli_fetch_assoc($queryo);

        $db_pass = $emailo_pass['Password'];                          //fetch the password corresponding to the email
        $pass_decode = password_verify($Password, $db_pass);               //predefined function h jo encrypted password ko verify krvata h user inputted password se

         if($pass_decode){
             $vid=$emailo_pass['serial_no'];
             $res=mysqli_fetch_array($queryo);
          ?>
         echo "<script>
                                alert('Login Successful');

                                     window.location.href='vDashbord.php?id=' + <?php echo $vid;?>;
                                    </script>";
                                exit();
                                <?php

         }else {
             ?>
             <script>
                    alert("Incorrect Password");
             </script>
             <?php
         }
    }
    else{
        if($emailc_count){                                  //agar email mil bhi gya toh bhi chlegi
       $emailc_pass = mysqli_fetch_assoc($queryc);

        $db_pass = $emailc_pass['Password'];                          //fetch the password corresponding to the email
        $pass_decode = password_verify($Password, $db_pass);               //predefined function h jo encrypted password ko verify krvata h user inputted password se

         if($pass_decode){
             $mob=$emailc_pass['Phone_Number'];
             ?>
         echo "<script>
                                alert('Login Successful');

                                     window.location.href='alogin-index.php?mobile=' + <?php echo $mob;?>;
                                    </script>";
                                exit();
                                <?php


         }else {
             ?>
             <script>
                    alert("Incorrect Password");
             </script>
             <?php
         }
    }


}
}
?>
