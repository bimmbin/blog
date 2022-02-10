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
  $subhead1 = fileName('filesubproduct1', $artId);
  $subhead2 = fileName('filesubproduct2', $artId);
  $subhead3 = fileName('filesubproduct3', $artId);
  $subhead4 = fileName('filesubproduct4', $artId);
  $subhead5 = fileName('filesubproduct5', $artId);
  $subhead6 = fileName('filesubproduct6', $artId);
  $subhead7 = fileName('filesubproduct7', $artId);
  $subhead8 = fileName('filesubproduct8', $artId);

  $below1 = fileName('imgproduct1', $artId);
  $below2 = fileName('imgproduct2', $artId);
  $below3 = fileName('imgproduct3', $artId);
  $below4 = fileName('imgproduct4', $artId);
  $below5 = fileName('imgproduct5', $artId);
  $below6 = fileName('imgproduct6', $artId);
  $below7 = fileName('imgproduct7', $artId);
  $below8 = fileName('imgproduct8', $artId);
    
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
    $resultline = mysqli_query($conn, $queryline); 
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

function imglinksUpdate($artIds){
    global $conn;
  $headline = fileName('fileheadline', $artIds); 
  $subhead1 = fileName('filesubproduct1', $artIds);
  $subhead2 = fileName('filesubproduct2', $artIds);
  $subhead3 = fileName('filesubproduct3', $artIds);
  $subhead4 = fileName('filesubproduct4', $artIds);
  $subhead5 = fileName('filesubproduct5', $artIds);
  $subhead6 = fileName('filesubproduct6', $artIds);
  $subhead7 = fileName('filesubproduct7', $artIds);
  $subhead8 = fileName('filesubproduct8', $artIds);

  $below1 = fileName('imgproduct1', $artIds);
  $below2 = fileName('imgproduct2', $artIds);
  $below3 = fileName('imgproduct3', $artIds);
  $below4 = fileName('imgproduct4', $artIds);
  $below5 = fileName('imgproduct5', $artIds);
  $below6 = fileName('imgproduct6', $artIds);
  $below7 = fileName('imgproduct7', $artIds);
  $below8 = fileName('imgproduct8', $artIds);
    
  checkEmp($headline, 'headline', $artIds);
  checkEmp($subhead1, 'subhead1', $artIds);
  checkEmp($subhead2, 'subhead2', $artIds);
  checkEmp($subhead3, 'subhead3', $artIds);
  checkEmp($subhead4, 'subhead4', $artIds);
  checkEmp($subhead5, 'subhead5', $artIds);
  checkEmp($subhead6, 'subhead6', $artIds);
  checkEmp($subhead7, 'subhead7', $artIds);
  checkEmp($subhead8, 'subhead8', $artIds);

  checkEmp($below1, 'below1', $artIds);
  checkEmp($below2, 'below2', $artIds);
  checkEmp($below3, 'below3', $artIds);
  checkEmp($below4, 'below4', $artIds);
  checkEmp($below5, 'below5', $artIds);
  checkEmp($below6, 'below6', $artIds);
  checkEmp($below7, 'below7', $artIds);
  checkEmp($below8, 'below8', $artIds);
  
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







