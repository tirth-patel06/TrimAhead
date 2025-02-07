
<?php
session_start();
?>

<?php
include 'connection.php';


$mobile = $_POST['mobile'] ?? $_GET['mobile'] ?? '';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($mobile)) {
    header("Location: userdashboard.php?mobile=" . urlencode($mobile));
    exit();
}







    $selectquery = "SELECT * FROM `cc_project`.`customer` WHERE Phone_Number = '$mobile'";
    $query = mysqli_query($con, $selectquery);

    if ($query) {
        $res = mysqli_fetch_array($query);

        if ($res) {
            $Name = $res['Name'];
            $Email = $res['Email'];
            $Phone_Number = $res['Phone_Number'];
            $Address = $res['Address'];
            $image = $res['user_image'];


    }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>

    <link rel="stylesheet" href="userdashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="./image/Logo/favicon-logo.png"/>
    <link rel="stylesheet" href="./navbarNorm.css">
    <link rel="stylesheet" href="./footer.css">
    <link rel="stylesheet" href="./analysis.css">
</head>
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
                <li><a href="./livebook.php?mobile=<?php echo $Phone_Number;?>">Live Booking</a></li>
                <li><a href="./pBook.php?mobile=<?php echo $Phone_Number;?>">Previous Booking</a></li>
                <li><a href="./index.php">Logout</a></li>
            </ul>
        </aside>

        <main class="content">
            <div class="greet">
                Welcome,
                <div class="greet-username">
                   <?php echo $Name;?>
                </div>
            </div>


            <div class="user-info">
                <form action=""  class="form-field" method="post">
                        <input type="hidden" name="mobile" value="<?php echo htmlspecialchars($mobile); ?>">

                    <div class="field">
                        <label for="name">Name</label>
                        <input type="text" name = "Name" value="<?php echo $Name;?>" disabled>
                        <div class="change">
                            <button name="change" id="name" >Edit</button>
                        </div>
                    </div>
                    <div class="field">
                        <label for="mail">E-Mail</label>
                        <input type="text" name = "Email " value="<?php echo $Email;?>" disabled>
                        <div class="change">
                            <button name="change" id="mail" >Edit</button>
                        </div>
                    </div>
                    <div class="field-phone">
                        <label for="phone">Phone Number</label>
                        <input type="text" name = "Phone_Number" value="<?php echo $Phone_Number;?>" disabled>
                    </div>
                    <div class="field addr">
                        <label for="addr">Address</label>
                        <textarea id="autoExpand" name = "Address" id="addr" disabled><?php echo $Address;?></textarea>
                        <script>
                        document.getElementById("autoExpand").addEventListener("input", function () {
                            this.style.height = "auto";
                            this.style.height = this.scrollHeight + "px";
                        });
                        </script>

                        <div class="change">
                            <button name="change" >Edit</button>
                        </div>
                    </div>
                    <button type="submit" name = "Submit"  class="submit-button" onclick = submit() >Submit</button>
                </form>
            </div>

        </main>
    </div>

    <script src="./content.js"></script>
    <script src="./analysis.js"></script>
    <script src="./navbarNorm.js"></script>
    <script src="./userdashboard.js"></script>
</body>
</html>
<?php
include 'connection.php';   
if(isset($_POST['Submit'])) {

    $Phoneupdate = $_POST['mobile'];
    $Name =  $_POST['Name'];
    $Address = $_POST['Address'];
    $Email =  $_POST['Email'];
    $Phone_Number =  $_POST['Phone_Number'];

    $updatequery = "UPDATE `cc_project`.`customer`
                    SET Phone_Number = '$Phone_Number', Name='$Name', Address='$Address', Email='$Email'
                    WHERE Phone_Number = '$Phoneupdate'";

    $resupdate = mysqli_query($con, $updatequery);

    if ($resupdate) {
        echo "<script>alert('Update successful!');</script>";
        header("Location: userdashboard.php?mobile=" . urlencode($Phone_Number));
        exit();
    } else {
        echo "<script>alert('Update failed: " . mysqli_error($con) . "');</script>";
    }
}
?>




