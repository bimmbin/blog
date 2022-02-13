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
        if(!empty($fileNameNew)) {
            return $fileNameNew;
        } 
    }
}

function imglinks($artId){
    global $conn;
  $headline = fileName('fileheadline', $artId); 

  for ($i=1; $i <= 8; $i++) { 
    ${"subhead" . $i} = fileName('filesubproduct'.$i, $artId); 
    ${"below" . $i} = fileName('imgproduct'.$i, $artId);
}

    
    $queryImg = "INSERT INTO imglinks (
        
        articleId,headline,subhead1,subhead2,subhead3,subhead4,subhead5,subhead6,subhead7,subhead8,below1,below2,below3,below4,below5,below6,below7,below8
        
        ) VALUES (
            
        '$artId','$headline','$subhead1','$subhead2','$subhead3','$subhead4','$subhead5','$subhead6','$subhead7','$subhead8','$below1','$below2','$below3','$below4','$below5','$below6','$below7','$below8'
        
        )";
    mysqli_query($conn, $queryImg);
}

function getEmpBool($tableName, $colEmp, $colTarget, $artId) {
    global $conn;
    $queryline = "SELECT $colEmp FROM $tableName WHERE $colTarget = $artId AND (NOT $colEmp = ' ' AND $colEmp IS NOT NULL)";  
    $resultline = mysqli_query($conn, $queryline) or die(mysqli_error($conn));
    $line = mysqli_fetch_assoc($resultline);
    
    if ($line == NULL) {
        $keylast = false;
    } else if (array_key_exists($colEmp, $line)){
        $keylast = true;
    }
    return  $keylast;
}

function checkEmp($var, $colName, $artIds){
    global $conn;
    if (!empty($var)) {
        $imgDel = fetch('imglinks', 'articleId', $artIds);
        $path = "../uploads/".$imgDel[$colName];
        unlink($path);

        $query = "UPDATE imglinks SET $colName = '$var' WHERE articleId = '$artIds'";
        mysqli_query($conn, $query);
    }
    
}

function updateArt($tableName, $colEmp, $colVal, $colTarget, $artId, $chkId){
    global $conn;
    $result;
    $chk = getEmpBool($tableName, $colEmp, $colTarget, $artId);
    if ($chk) {
        $query = "UPDATE $tableName SET $colEmp = '$colVal' WHERE $colTarget = '$artId'";
        mysqli_query($conn, $query);

        // $result = 'it has value but needed to update';
    } else if ($chk === false){
        $chk1 = getEmpBool($tableName, $chkId, $chkId, $artId);
        if ($chk1) {
            $query1 = "UPDATE $tableName SET $colEmp = '$colVal' WHERE $colTarget = '$artId'";
            mysqli_query($conn, $query1);
            // $result = 'it has value but kulang';
        } else {
            $queryCreatee = "INSERT INTO $tableName(articleId,$colEmp) VALUES('$artId','$colVal')";
            mysqli_query($conn, $queryCreatee);
            // $result = 'no value at all';
        }
    }
}

function deleteImg($tableName, $colEmp, $colTarget, $artId){
    global $conn;
    $result;
    $chk = getEmpBool($tableName, $colEmp, $colTarget, $artId);
    if ($chk) {
        $imgDel = fetch($tableName, $colTarget, $artId);
        $path = "../uploads/".$imgDel[$colEmp];
        unlink($path);
    } 
}

function imglinksUpdate($artIds){
    global $conn;

    $headline = fileName('headline', $artIds); 
    for ($i=1; $i <= 8; $i++) { 
        ${"subhead" . $i} = fileName('subproduct'.$i, $artIds); 
        ${"below" . $i} = fileName('imgproduct'.$i, $artIds);
    }

    checkEmp($headline, 'headline', $artIds);
    for ($i=1; $i <= 8; $i++) { 
        checkEmp(${"subhead" . $i}, 'subhead'.$i, $artIds);
        checkEmp(${"below" . $i}, 'below'.$i, $artIds);
    }

  
}


function fetch($tableName, $colTarget, $artId){
    global $conn;
    $query = "SELECT * FROM $tableName WHERE $colTarget = '$artId'";

    $result = mysqli_query($conn, $query);

    $resultsql = mysqli_fetch_assoc($result);
    return $resultsql;
}
function fetchAll($table, $Target, $Id){
    global $conn;
    $sqli = "SELECT * FROM $table WHERE $Target = '$Id'";

    $resultsqli = mysqli_query($conn, $sqli);

    $resultsqli = mysqli_fetch_all($resultsqli, MYSQLI_ASSOC);
    return $resultsqli;
}
function fetchNotnull($tableName, $colTarget, $artId, $tgt1){
    global $conn;
    $query = "SELECT $tgt1, $tgt2  FROM $tableName WHERE $colTarget = '$artId' AND NOT $tgt1 = ' '";
    $result = mysqli_query($conn, $query);
    $resultsql = mysqli_fetch_assoc($result);
    return $resultsql;
}
function fetch3($tableName, $colTarget, $artId, $tgt1, $tgt2){
    global $conn;
    $query = "SELECT $tgt1, $tgt2  FROM $tableName WHERE $colTarget = '$artId' AND (NOT $tgt1 = ' ' AND NOT $tgt2 = ' ')";

    $result = mysqli_query($conn, $query);

    $resultsql = mysqli_fetch_assoc($result);
    return $resultsql;
}
function fetchsub($artId, $num){
    return fetch3('subheadline', 'articleId', $artId, 'headline'.$num, 'pheadline'.$num);
}
function fetchsubpro($artId, $num){
    return fetch3('subheadline', 'articleId', $artId, 'productsubname'.$num, 'productsuburl'.$num);
}
function fetchbelowpro($artId, $num){
    return fetch3('productbelow', 'articleId', $artId, 'productname'.$num, 'producturl'.$num);
}

function emp($arr){
    
    if(!empty($arr)) {
        echo $arr;
    } 

}







