<?php

if (isset($_POST['submit'])) {
    session_start();
    require 'db.inc.php';
    include_once 'functions.inc.php';
    

    $category = e($_POST['category']);
    $headline = e($_POST['headline']);
    $firstp = e($_POST['firstp']);
    $directanswer = e($_POST['directanswer']);
    $author = $_SESSION['usersname'];
    $uniqId = md5(uniqid(rand(), true));

   

    // ddddddd

    
     

    if (emptyInputLogin($category, $headline, $firstp, $directanswer) !== false) {
        header("location: ../dashboard.php?error=emptyinput");
        exit();
    }

    $queryCreate = "INSERT INTO article(uniqid,category,headline,author,firstp,directanswer) VALUES('$uniqId','$category','$headline','$author','$firstp','$directanswer')";
    $sqlTrigger = mysqli_query($conn, $queryCreate) or die(mysqli_error($conn));

    if ($sqlTrigger) {

        $queryReadArticle = "SELECT * FROM article WHERE uniqid = '$uniqId'";
        $resultArticle = mysqli_query($conn, $queryReadArticle);

        
        if (mysqli_num_rows($resultArticle) > 0) {
            while ($fetchArticle = mysqli_fetch_assoc($resultArticle)) {
                $articleId = $fetchArticle['id'];
                
                imglinks($articleId);
                // fileName('fileheadline', $articleId, 'headline');
                
                for ($i=1; $i <= 8; $i++) { 
                    ${"headline" . $i} = e($_POST['headline'.$i]);
                    ${"pheadline" . $i} = e($_POST['pheadline'.$i]);
                    ${"productsubname" . $i} = e($_POST['productsubname'.$i]);
                    ${"productsuburl" . $i} = e($_POST['productsuburl'.$i]);
                }

                if (emptyInputSub($headline1, $pheadline1) === false) {
                    
                    $sqlSub = "INSERT INTO subheadline(
                        articleId
                        
                        ,headline1,headline2,headline3,headline4,headline5,headline6,headline7,headline8,  
                        
                        pheadline1,pheadline2,pheadline3,pheadline4,pheadline5,pheadline6,pheadline7,pheadline8,  
                        
                        productsubname1,productsubname2,productsubname3,productsubname4,productsubname5,productsubname6,productsubname7,productsubname8,  
                        
                        productsuburl1,productsuburl2,productsuburl3,productsuburl4,productsuburl5,productsuburl6,productsuburl7,productsuburl8
                        
                        ) VALUES(
                            
                        '$articleId'

                        ,'$headline1','$headline2','$headline3','$headline4','$headline5','$headline6','$headline7','$headline8',

                        '$pheadline1','$pheadline2','$pheadline3','$pheadline4','$pheadline5','$pheadline6','$pheadline7','$pheadline8',

                        '$productsubname1','$productsubname2','$productsubname3','$productsubname4','$productsubname5','$productsubname6','$productsubname7','$productsubname8',
                        
                        '$productsuburl1','$productsuburl2','$productsuburl3','$productsuburl4','$productsuburl5','$productsuburl6','$productsuburl7','$productsuburl8'
                        
                        )";

                        mysqli_query($conn, $sqlSub) or die(mysqli_error($conn));
                        
                        
                }
    
                for ($i=1; $i <= 8; $i++) { 
                    ${"productname" . $i} = e($_POST['productname'.$i]);
                    ${"producturl" . $i} = e($_POST['producturl'.$i]);
                }

                        
                if (emptyInputPro($productname1, $producturl1) === false) {

                
                    $sqlBelow = "INSERT INTO productbelow(
                        articleId
                        
                        ,productname1,productname2,productname3,productname4,productname5,productname6,productname7,productname8,  
                        
                        producturl1,producturl2,producturl3,producturl4,producturl5,producturl6,producturl7,producturl8
                        
                        ) VALUES(
                            
                        '$articleId'

                        ,'$productname1','$productname2','$productname3','$productname4','$productname5','$productname6','$productname7','$productname8',
                        
                        '$producturl1','$producturl2','$producturl3','$producturl4','$producturl5','$producturl6','$producturl7','$producturl8'
                        
                        )";
                        $neww = mysqli_query($conn, $sqlBelow) or die(mysqli_error($conn));
                        if ($neww) {
                            header("location: ../posts.php");
                            exit();
                        }
                } else {
                    header("location: ../posts.php");
                    exit();
                }




            }
        }
    }
   

} 

?>