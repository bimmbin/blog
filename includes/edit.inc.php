<?php
require 'db.inc.php';
require 'functions.inc.php';



if (isset($_POST['delete'])) {
    $deleteID = $_POST['deleteId'];

    deleteImg('imglinks', 'headline', 'articleId', $deleteID);
    for ($i=1; $i <= 8; $i++) { 
        deleteImg('imglinks', 'subhead'.$i, 'articleId', $deleteID);
        deleteImg('imglinks', 'below'.$i, 'articleId', $deleteID);
    }

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
    
    for ($i=1; $i <= 8; $i++) { 
        ${"headline" . $i} = e($_POST['headline'.$i]);
        ${"pheadline" . $i} = e($_POST['pheadline'.$i]);
        ${"productsubname" . $i} = e($_POST['productsubname'.$i]);
        ${"productsuburl" . $i} = e($_POST['productsuburl'.$i]);


        ${"productname" . $i} = e($_POST['productname'.$i]);
        ${"producturl" . $i} = e($_POST['producturl'.$i]);
    }

// article Update

    updateArt('article', 'category', $category, 'id', $updateId, 'id');
    updateArt('article', 'headline', $headline, 'id', $updateId, 'id');
    updateArt('article', 'firstp', $firstp, 'id', $updateId, 'id');
    updateArt('article', 'directanswer', $directanswer, 'id', $updateId, 'id');

    imglinksUpdate($updateId);

// ----------------------->


    for ($i=1; $i <= 8; $i++) { 
        // subheadline Update
        updateArt('subheadline', 'headline'.$i , ${"headline" . $i}, 'articleId', $updateId, 'articleId');
        updateArt('subheadline', 'pheadline'.$i , ${"pheadline" . $i}, 'articleId', $updateId, 'articleId');

        updateArt('subheadline', 'productsubname'.$i , ${"productsubname" . $i}, 'articleId', $updateId, 'articleId');
        updateArt('subheadline', 'productsuburl'.$i , ${"productsuburl" . $i}, 'articleId', $updateId, 'articleId');


        // productbelow Update
        updateArt('productbelow', 'productname'.$i , ${"productname" . $i}, 'articleId', $updateId, 'articleId');
        updateArt('productbelow', 'producturl'.$i , ${"producturl" . $i}, 'articleId', $updateId, 'articleId');
   

    }


    $edline = fetch('article', 'id', $updateId);
    $ede = $edline['headline'];
    header("Location: ../articles.php?headline=$edline[headline]");


}

