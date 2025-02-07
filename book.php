<?php
include 'connection.php';
$mobid=$_GET['id'];
$code=$_GET['shop'];
$getqueue=$_GET['queue'];
$uq=number_format($getqueue)+1;
$vendor=$_GET['name'];
$cust=$_GET['Customer'];
$time=date("h:s:i");
$query02="SELECT * FROM 'cc_project'.'customer' where Phone_Number='$mobid'";

$sql_query="INSERT INTO `cc_project`.`queue` (`Vendor`, `Customer`, `Mobile`, `Times`, `VendorId`) VALUES ('$vendor', '$cust', '$mobid', '$time', '$code')";
// $delquery=" delete from `cc_project`.`queue` where Mobile=$id";
$query="update `cc_project`.`owner` set Queue='$uq' where serial_no='$code'";
$res=mysqli_query($con,$sql_query);
//$res03=mysqli_query($con,$query02);
$res01=mysqli_query($con,$query);
//$res04=mysqli_fetch_array($res03);
if($res && $res01){
    ?>
    <script>
        alert('Appointment booked');
    </script>
    <?php
    $pincode= $res04['Pincode'];
    header("location:alogin-index.php?id=".$mobid);
}else{
    ?>
    <script>
        alert('data not Deleted');
        
    </script>
    <?php
    header("location:alogin_userPage.php?id=".$pincode."&mobile=".$mobid);
}


?>
