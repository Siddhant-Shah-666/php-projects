<?php

$server = "localhost";
$user = "root";
$database = "hinata";

$dbconn = mysqli_connect($server,$user,"",$database);
if($dbconn){
    // echo"Database Connected";
}
else{
    echo"Database  not Connected";
}
?>