<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = "practice";

$con = mysqli_connect($server,$username,$password,$db);
   if($con){
       echo "connection ok";
   }else{
       echo "connection nhi hua" ;
   }


?>