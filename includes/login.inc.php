<?php


if (isset($_POST['submit'])) {

    include_once 'db.inc.php';
   
    $username = mysqli_real_escape_string($conn,$_POST['userName']);
    $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

    include_once 'functions.inc.php';

    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);
} 

else {
    header("location: ../login.php");
    exit();
}