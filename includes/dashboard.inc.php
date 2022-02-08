<?php
require 'db.inc.php';

if (isset($_POST['submit'])) {
    session_start();
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
    $sqlTrigger = mysqli_query($conn, $queryCreate);

    if ($sqlTrigger) {

        $queryReadArticle = "SELECT * FROM article WHERE uniqid = '$uniqId'";
        $resultArticle = mysqli_query($conn, $queryReadArticle);

        
        if (mysqli_num_rows($resultArticle) > 0) {
            while ($fetchArticle = mysqli_fetch_assoc($resultArticle)) {
                $articleId = $fetchArticle['id'];
                
                imglinks($articleId);
                // fileName('fileheadline', $articleId, 'headline');

                $headline1 = e($_POST['headline1']);
                $headline2 = e($_POST['headline2']);
                $headline3 = e($_POST['headline3']);
                $headline4 = e($_POST['headline4']);
                $headline5 = e($_POST['headline5']);
                $headline6 = e($_POST['headline6']);
                $headline7 = e($_POST['headline7']);
                $headline8 = e($_POST['headline8']);
            
            
                $pheadline1 = e($_POST['pheadline1']);
                $pheadline2 = e($_POST['pheadline2']);
                $pheadline3 = e($_POST['pheadline3']);
                $pheadline4 = e($_POST['pheadline4']);
                $pheadline5 = e($_POST['pheadline5']);
                $pheadline6 = e($_POST['pheadline6']);
                $pheadline7 = e($_POST['pheadline7']);
                $pheadline8 = e($_POST['pheadline8']);
            
                $productsubname1 = e($_POST['productsubname1']);
                $productsubname2 = e($_POST['productsubname2']);
                $productsubname3 = e($_POST['productsubname3']);
                $productsubname4 = e($_POST['productsubname4']);
                $productsubname5 = e($_POST['productsubname5']);
                $productsubname6 = e($_POST['productsubname6']);
                $productsubname7 = e($_POST['productsubname7']);
                $productsubname8 = e($_POST['productsubname8']);
            
                $productsuburl1 = e($_POST['productsuburl1']);
                $productsuburl2 = e($_POST['productsuburl2']);
                $productsuburl3 = e($_POST['productsuburl3']);
                $productsuburl4 = e($_POST['productsuburl4']);
                $productsuburl5 = e($_POST['productsuburl5']);
                $productsuburl6 = e($_POST['productsuburl6']);
                $productsuburl7 = e($_POST['productsuburl7']);
                $productsuburl8 = e($_POST['productsuburl8']);


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

                        mysqli_query($conn, $sqlSub);
                        
                        
                }
    
                        $productname1 = e($_POST['productname1']);
                        $productname2 = e($_POST['productname2']);
                        $productname3 = e($_POST['productname3']);
                        $productname4 = e($_POST['productname4']);
                        $productname5 = e($_POST['productname5']);
                        $productname6 = e($_POST['productname6']);
                        $productname7 = e($_POST['productname7']);
                        $productname8 = e($_POST['productname8']);
                    
                        $producturl1 = e($_POST['producturl1']);
                        $producturl2 = e($_POST['producturl2']);
                        $producturl3 = e($_POST['producturl3']);
                        $producturl4 = e($_POST['producturl4']);
                        $producturl5 = e($_POST['producturl5']);
                        $producturl6 = e($_POST['producturl6']);
                        $producturl7 = e($_POST['producturl7']);
                        $producturl8 = e($_POST['producturl8']);

                        
                if (emptyInputPro($productname1, $producturl1) === false) {

                
                    $sqlBelow = "INSERT INTO productbelow(
                        articleId
                        
                        ,imgproduct1,imgproduct2,imgproduct3,imgproduct4,imgproduct5,imgproduct6,imgproduct7,imgproduct8,  
                        
                        productname1,productname2,productname3,productname4,productname5,productname6,productname7,productname8,  
                        
                        producturl1,producturl2,producturl3,producturl4,producturl5,producturl6,producturl7,producturl8
                        
                        ) VALUES(
                            
                        '$articleId'

                        ,'$imgproduct1','$imgproduct2','$imgproduct3','$imgproduct4','$imgproduct5','$imgproduct6','$imgproduct7','$imgproduct8',

                        '$productname1','$productname2','$productname3','$productname4','$productname5','$productname6','$productname7','$productname8',
                        
                        '$producturl1','$producturl2','$producturl3','$producturl4','$producturl5','$producturl6','$producturl7','$producturl8'
                        
                        )";
                        
                        if (mysqli_query($conn, $sqlBelow)) {
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
   

} else {
    // header("location: ../dashboard.php");
}

?>