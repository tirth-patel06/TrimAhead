<?php
include 'connection.php';
$id=$_GET['id'];
$shopid=$_GET['shopid'];
$code=$_GET['shop'];
$getqueue=$_GET['queue'];
$uq=number_format($getqueue)-1;
$delquery=" delete from `cc_project`.`queue` where Mobile=$id";
$query="update `cc_project`.`owner` set Queue='$uq' where serial_no=$code";
$query01="SELECT * FROM `cc_project`.`transactions` where VendorId='$shopid'";
$query10=mysqli_query($con,$query01);

$res1=mysqli_fetch_array($query10);
$gq=number_format($res1['Queuecount'])-1;
$query02="update `cc_project`.`transactions` set Queuecount='$gq' where VendorId='$shopid'";
$query022="update `cc_project`.`transactions` set Queuecount='-1' where Mobile='$id' and VendorId='$shopid'";


$res=mysqli_query($con,$delquery);
$res01=mysqli_query($con,$query);
$res02=mysqli_query($con,$query02);
$res04=mysqli_query($con,$query022);
if($res){
    ?>
    <script>
        alert('Data Deleted');
    </script>
    <?php
    header('location:vDashbord.php?id='.$shopid);
}else{
    ?>
    <script>
        alert('data not Deleted');
        
    </script>
    <?php
    header('location:vDashbord.php?id='.$shopid);
}


?>
