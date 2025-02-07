<?php
function generateTransactionID() {
    return uniqid('TXN_'); // Generates a unique transaction ID
}
$transaction_id = generateTransactionID();
$cust_name=$_GET['cust_name'];
$mobile=$_GET['mobile'];
$getqueue=$_GET['queue'];
$vendorid=$_GET['shopid'];

$vendorname=$_GET['vendorname'];
$uq=number_format($getqueue)+1;
$time=date("Y-m-d ");

include "connection.php";
$sql_query="INSERT INTO `cc_project`.`queue` (`Vendor`, `Customer`, `Mobile`, `Times`, `VendorId`) VALUES ('test', 'test', 'test', 'test', '$vendorid')";
$sql_query="INSERT INTO `cc_project`.`queue` (`Vendor`, `Customer`, `Mobile`, `Times`, `VendorId`) VALUES ('$vendorname', '$cust_name', '$mobile', '$time', '$vendorid')";
// $delquery=" delete from `cc_project`.`queue` where Mobile=$id";
$query="update `cc_project`.`owner` set Queue='$uq' where serial_no='$vendorid'";
$res0=mysqli_query($con,$sql_query);
//$res03=mysqli_query($con,$query02);
$res01=mysqli_query($con,$query);

$insertquery = "insert into `cc_project`.`transactions`(ID,Customer,Mobile,VendorId,VendorName,Times,Queuecount) values('$transaction_id','$cust_name','$mobile','$vendorid','$vendorname','$time','$uq')";
$res = mysqli_query($con,$insertquery);
echo "<script>
alert('Payment done successfully!');
     
     window.location.href='livebook.php?mobile=$mobile';
    </script>";
exit();



?>