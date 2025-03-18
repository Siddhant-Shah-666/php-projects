<?php
$server = "localhost";
$user = "root";
$database = "code dining";

$conn = mysqli_connect($server,$user,"",$database);
if($conn){
    // echo"Database Connected";
}
else{
    echo"Database  not Connected";
}
?>