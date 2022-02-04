<?php
require 'db.inc.php';
require 'functions.inc.php';



if (isset($_POST['delete'])) {
    $deleteID = $_POST['deleteId'];

    $queryDelete = "DELETE FROM article WHERE id = '$deleteID'";
    $delit = mysqli_query($conn, $queryDelete);


    $queryDeleteImg = "DELETE FROM imglinks WHERE articleId = '$deleteID'";
    $delitPic = mysqli_query($conn, $queryDeleteImg);

    if($delitPic&&$delitPic) {
        header("Location: ../posts.php");
    }
}

if(isset($_POST['update'])) {
    $updateId = $_POST['updateId'];

    $category = e($_POST['category']);
    $headline = e($_POST['headline']);
    $firstp = e($_POST['firstp']);
    $directanswer = e($_POST['directanswer']);

// ----------------------->

    
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

// ----------------------->

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


// ----------------------->
// article Update

    updateArt('article', 'category', $category, 'id', $updateId, 'id');
    updateArt('article', 'headline', $headline, 'id', $updateId, 'id');
    updateArt('article', 'firstp', $firstp, 'id', $updateId, 'id');
    updateArt('article', 'directanswer', $directanswer, 'id', $updateId, 'id');



    imglinksUpdate($updateId);



// ----------------------->
// subheadline Update
    updateArt('subheadline', 'headline1', $headline1, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'headline2', $headline2, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'headline3', $headline3, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'headline4', $headline4, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'headline5', $headline5, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'headline6', $headline6, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'headline7', $headline7, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'headline8', $headline8, 'articleId', $updateId, 'articleId');

    updateArt('subheadline', 'pheadline1', $pheadline1, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'pheadline2', $pheadline2, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'pheadline3', $pheadline3, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'pheadline4', $pheadline4, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'pheadline5', $pheadline5, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'pheadline6', $pheadline6, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'pheadline7', $pheadline7, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'pheadline8', $pheadline8, 'articleId', $updateId, 'articleId');

    updateArt('subheadline', 'productsubname1', $productsubname1, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'productsubname2', $productsubname2, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'productsubname3', $productsubname3, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'productsubname4', $productsubname4, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'productsubname5', $productsubname5, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'productsubname6', $productsubname6, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'productsubname7', $productsubname7, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'productsubname8', $productsubname8, 'articleId', $updateId, 'articleId');

    updateArt('subheadline', 'productsuburl1', $productsuburl1, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'productsuburl2', $productsuburl2, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'productsuburl3', $productsuburl3, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'productsuburl4', $productsuburl4, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'productsuburl5', $productsuburl5, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'productsuburl6', $productsuburl6, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'productsuburl7', $productsuburl7, 'articleId', $updateId, 'articleId');
    updateArt('subheadline', 'productsuburl8', $productsuburl8, 'articleId', $updateId, 'articleId');



// ----------------------->
// productbelow Update

 


    updateArt('productbelow', 'productname1', $productname1, 'articleId', $updateId, 'articleId');
    updateArt('productbelow', 'productname2', $productname2, 'articleId', $updateId, 'articleId');
    updateArt('productbelow', 'productname3', $productname3, 'articleId', $updateId, 'articleId');
    updateArt('productbelow', 'productname4', $productname4, 'articleId', $updateId, 'articleId');
    updateArt('productbelow', 'productname5', $productname5, 'articleId', $updateId, 'articleId');
    updateArt('productbelow', 'productname6', $productname6, 'articleId', $updateId, 'articleId');
    updateArt('productbelow', 'productname7', $productname7, 'articleId', $updateId, 'articleId');
    updateArt('productbelow', 'productname8', $productname8, 'articleId', $updateId, 'articleId');

    updateArt('productbelow', 'producturl1', $producturl1, 'articleId', $updateId, 'articleId');
    updateArt('productbelow', 'producturl2', $producturl2, 'articleId', $updateId, 'articleId');
    updateArt('productbelow', 'producturl3', $producturl3, 'articleId', $updateId, 'articleId');
    updateArt('productbelow', 'producturl4', $producturl4, 'articleId', $updateId, 'articleId');
    updateArt('productbelow', 'producturl5', $producturl5, 'articleId', $updateId, 'articleId');
    updateArt('productbelow', 'producturl6', $producturl6, 'articleId', $updateId, 'articleId');
    updateArt('productbelow', 'producturl7', $producturl7, 'articleId', $updateId, 'articleId');
    updateArt('productbelow', 'producturl8', $producturl8, 'articleId', $updateId, 'articleId');
  

    $edline = fetch('article', 'id', $updateId);
    $ede = $edline['headline'];
    header("Location: ../articles.php?headline=$edline[headline]");


}

