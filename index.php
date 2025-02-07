<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trim AheAd</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="./image/Logo/favicon-logo.png"/>
    <link rel="stylesheet" href="./navbarNorm.css">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./footer.css">
    <link rel="stylesheet" href="./analysis.css">
</head>
<?php
    include 'connection.php';
   $selectquery="select * from `cc_project`.`owner`";
   $query=mysqli_query($con,$selectquery);
$num=mysqli_num_rows($query);
$res=mysqli_fetch_array($query);

 
 ?>
<body>

    <header>
        <div class="navbar">
            <div class="navbar-logo">
               <a href="index.php"><img src="./image/Logo/OCNBG.png" alt=""></a> 
            </div>
            <div class="search">
                <div class="search-icon">
                    <i class="fa-solid fa-magnifying-glass""></i>
                </div>
                <input type="text" placeholder="Enter Pincode" class="input-box">
            </div>
            <a href="login.php">
            <div class="login" >
                <div class="user-icon">
                    <i class="fa-regular fa-circle-user"></i>
                </div>
                Login
            </div>
            </a>
        </div>
    </header>

    <div class="content">
        <div class="brand-banner">
            <div class="image"></div>
        </div>

        <div class="top-shop">
            <div class="top-heading">
                Famous Shops in Your City
            </div>
            <?php 
            $i=0;
            while($res=mysqli_fetch_array($query)){
                if($i==3){
                    break;
                }
                $i++;
            
                ?>
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
                        Expected time:
                        <div class="expected-time-digit">
                        <?php $time= $res['Queue'];
                        $timeup=number_format($time) * 25;
                        echo $timeup . " minutes";
                        ?>
                        </div>
                    </div>
                </div>
                <input id="mobile" type="hidden" value="<?php echo $mobile;?>">
                <input id="serial_no" type="hidden" value="<?php echo $res['serial_no'];?>">
                <input id="vname" type="hidden" value="<?php echo $res['Shop_Name'];?>">
                <input id="customer" type="hidden" value="<?php echo $res1['Name'];?>">
                <input id="queue" type="hidden" value="<?php echo $res['Queue'];?>">
                <div class="extra-option">
                    <div class="book-button" onclick="login()">
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
             <?php }?>
            <!-- <div class="content-box">
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
                        Ecpected time :
                        <div class="expected-time-digit">
                            90 min
                        </div>
                    </div>
                </div>
                <div class="extra-option">
                    <div class="book-button" onclick="login()">
                        <button>BOOK</button>
                    </div>
                </div> -->
        </div>

        <div class="some-features">
            <div class="top-heading features-heading">
                Some Highlighted Features
            </div>
            <div class="some-features-box">
                <div class="some-features-content-box">
                    <div class="some-features-content-box-icon">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                    The brand "TRIMAHEAD" has built a strong reputation for reliability and innovation, earning the trust of its users through consistent quality and a focus on customer satisfaction. People value TRIMAHEAD for its dedication to delivering products and services that align with their needs, often exceeding expectations.
                </div>
                <div class="some-features-content-box">
                    <div class="some-features-content-box-icon">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    TRIMAHEAD has earned widespread trust for its exceptional support services, which prioritize customer satisfaction at every step. Users consistently commend the brand for its prompt, reliable, and solution-oriented approach to addressing concerns or inquiries.
                </div>
                <div class="some-features-content-box">
                    <div class="some-features-content-box-icon">
                        <i class="fa-solid fa-leaf"></i>
                    </div>
                    TRIMAHEAD has garnered trust and respect for its strong commitment to environmental sustainability and contribution to a greener future. The brand takes proactive steps to minimize its ecological footprint by adopting eco-friendly practices, utilizing sustainable materials, and investing in innovative solutions that support environmental preservation.
                </div>

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
                    <li><a href="">Cancellation Policy</a></li>
                    <li><a href="">FAQ</a></li>
                </ul>
            </div>
            <div class="footer-main-info-link-box">
                <div class="footer-main-info-link-box-title">
                    CONSUMER POLICY
                </div>
                <ul>
                    <li><a href="">Cancellation Policy</a></li>
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
    <script>window.PICKAXE=window.PICKAXE||{pickaxes:[],style:"kHsjoCQGgI0GWASmgIdIAxiDA6wgM6CMbgC4UgDDAXYEAvDIBoGEBgG4CAWQIGYBgwCqApdoEjggjIaCcCoCA9gVAaAnBYBkqgBkKBwWoARYgJhrAFwqAFQEAHkIAXAQAASgbCfAhqSAAAsDMAYEc+QJckgGXFAhUGBQ30DEcIGo0wBBdgS5VAcAaATm8A1GoCpYQJQmgEVYAcgDBA9kCAuIUAiEoAAFQGrsgCKKAGKAFxKAsAmAQjSADFiACCIASoAACIBA+oAAeoBI8IAfGoAiEYAoCYAsaYAAIYA0boA6QYBDP4CwJYBPVIAWQYB8QoB6EIArJ4AAg4ByaoA9OYBFQYCDf4AYCYBJPoCLhoBlj4Ajk4A3mIChd4CBfYCpUYBYVYCNsYBnY4Aza4Cfv4BJe4Avp4BMKoANqoAMSIBUFIDP4QDigDKKgGHEgCFxgIACgAAtgCBdgIRigEAxgEIQgAWBgBR5gERQQBCxYABwsAAFGAClJABDUgAABwCjiYAYhYAoIA0KEAcziAAhCAL2AMhBAJESgFCZwCFwYBD0MALASASjFALGwgGQRwAkPIBRJsAGVyACXIABuAGjlAEhUgCjYwDi8YBOi0APjSAekNABJ5gCUiQCYlgBoQCswIAwMEAiwOAHFLADgJgG1CwDks4ABKkAhVWAEotAEE3gAaBwAoDYALDkAt8iACieAKOAPF3ACzPgGCiACAgAfIQCJUQBwQBSJIAr6kAW++AOoNAChDgADQQDCQ4BhcEADomAIEHAKaxgCBpwB9BYAAGsAYJOAd1XAM/ngCYzwBgGIBr+MA3i6AUd3AFNLgAPowATT4AidkA+YiAIzdAIahgEJRQCq1IAy5MAwrCAKxJAMYMgCLHQBjVYBR4MAiMaAEChAGxMgBV2wA4KoATBsAQDCADQJAAhUgHE8QCNxYBbj8AfKuAZhzAM2NgF3OwAgE4ANNsAhDCAcjtAIQSgABMQCNYIBNYsAIriAHQNAEoSgBrfYANUqAMiYgBwrYAAhGAFiDgDRPoACC8AGSAGvwgC+yIAsgiAGcigBlnYAAZqAB4HgBMaYAABFAA="},window.PICKAXE.pickaxes.push({id:"TrimBuddy_0KNML",type:"fab"});const{id:_fid}=window.PICKAXE.pickaxes[0];fetch(`https://embed.pickaxeproject.com/axe/api/script/${_fid}`).then((e=>e.json())).then((({v:e})=>{const t=`https://cdn.jsdelivr.net/gh/pickaxeproject/cdn@${e}/dist`;if(!document.querySelector(`script[src="${t}/bundle.js"]`)){const e=document.createElement("script");e.src=t+"/bundle.js",e.defer=!0,document.head.appendChild(e)}}));</script>
    <!-- <script> window.chtlConfig = { chatbotId: "6358699567" } </script>
    <script async data-id="6358699567" id="chatling-embed-script" type="text/javascript" src="https://chatling.ai/js/embed.js"></script>
    <script src="./content.js"></script>
    <script src="./analysis.js"></script>
     -->
</body>
</html>
