<?php
$host       = "localhost";
$database   = "sr_system";
$user       = "root";
$password   = "";
$db = mysqli_connect($host, $user, $password, $database)
or die("Error: " . mysqli_connect_error());

// $con = mysqli_connect('loaclhost','root','','sr_system');
// if(!$con)
// {
//      echo 'Conncetion Error';
// }  
?> 