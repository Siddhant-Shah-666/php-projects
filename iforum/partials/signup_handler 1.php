<?php

$showAlert = false;
if (isset($_POST["submit"])) {
    include'dbconn.php';
    $name = $_POST['name'];
    $password= $_POST['password'];
    $cpassword= $_POST['cpassword'];

    $existsql = "select * from `users` where name = '$name'";
    $result1 = mysqli_query($conn,$existsql);
    $noRows =mysqli_num_rows($result1);
    if($noRows>0){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Alert..!</strong> Username is already used.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>';
    header("Location: /iforum/index.php?signup=false");
    } 
    else{

    if($password== $cpassword){
        // $hash = password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users` (`name`, `password`, `time`) VALUES ( '$name', '$password', current_timestamp());";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;
        if ($showAlert) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success..!</strong> Your Question has been added.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>';
     header("Location: /iforum/index.php?signup=true");
    
        }

    }
    else{
        $showAlert = true;
        if ($showAlert) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Alert..!</strong> Check your pasword.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>';
    header("Location: /iforum/index.php?signup=false");
    
        }

    }
    
}
}
?>