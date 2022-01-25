<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdrepeat) {
    $result;
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdrepeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdrepeat) {
    $result;
    if ($pwd !== $pwdrepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM user WHERE usersUname = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }

    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close();
}

function createUser($conn, $name, $email, $username, $pwd) {
    $sql = "INSERT INTO user (usersName, usersEmail, usersUname, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtFailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);



    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../signup.php?error=none");
    exit();
}


//log IN function


function emptyInputLogin($username, $pwd) {
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function emptyInputDash($username, $pwd) {
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists === false)  {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION['usersid'] = $uidExists['usersId'];
        $_SESSION['usersuname'] = $uidExists['usersUname']; 
        $_SESSION['usersname'] = $uidExists['usersName']; 
        header("location: ../index.php");
        exit();
    }
}

function emptyInputSub($headline1,$pheadline1) {
    $result;
    if (empty($headline1) || empty($pheadline1)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function emptyInputPro($productname1, $producturl1) {
    $result;
    if (empty($productname1) || empty($producturl1)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

                

function e($string)
{
    global $conn;
    return mysqli_real_escape_string($conn, $string);
}

function fileName($filename, $artId) {

    include 'db.inc.php';
    
    $file = $_FILES[$filename];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));


  
    $fileNameNew = $artId.$filename.".".$fileActualExt;
    $fileDestination = '../uploads/'.$fileNameNew;


    if (move_uploaded_file($fileTmpName, $fileDestination)) {
        return $fileNameNew;
    }
}

function imglinks($artId){
    global $conn;
  $headline = fileName('fileheadline', $artId); 
  $subhead1 = fileName('filesubproduct1', $artId);
  $subhead2 = fileName('filesubproduct2', $artId);
  $subhead3 = fileName('filesubproduct3', $artId);
  $subhead4 = fileName('filesubproduct4', $artId);
  $subhead5 = fileName('filesubproduct5', $artId);
  $subhead6 = fileName('filesubproduct6', $artId);
  $subhead7 = fileName('filesubproduct7', $artId);
  $subhead8 = fileName('filesubproduct8', $artId);
    
    $queryImg = "INSERT INTO imglinks (articleId,headline,subhead1,subhead2,subhead3,subhead4,subhead5,subhead6,subhead7,subhead8) VALUES ('$artId','$headline','$subhead1','$subhead2','$subhead3','$subhead4','$subhead5','$subhead6','$subhead7','$subhead8')";
    mysqli_query($conn, $queryImg);
}

function fetch($tableName, $colTarget, $artId){
    global $conn;
    $query = "SELECT * FROM $tableName WHERE $colTarget = '$artId'";

    $result = mysqli_query($conn, $query);

    $resultsql = mysqli_fetch_assoc($result);
    return $resultsql;
}