<?php 

$serverName = "localhost";
$UserName = "root";
$serverPwd = "";
$dbName = "blogdata";

$conn = mysqli_connect($serverName, $UserName, $serverPwd, $dbName);

// if ($conn) {
//     echo "it is working";
// } else {
//     echo "its not working";
// }