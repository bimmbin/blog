<?php

if (isset($_GET['headline'])) {
include "header.php";
include "includes/db.inc.php";
include "includes/functions.inc.php";


    $headline = $_GET['headline'];

    $topicc = fetch('article', 'headline', $headline); // <---- article fetch

    
    $artId = $topicc['id'];
    $phdate = strtotime($topicc['date']);
    $deyt = date('F j, Y', $phdate);

    // echo $artId;

    $queryline = "SELECT * FROM imglinks WHERE articleId = '$artId' AND NOT headline = ' '";  
    $resultline = mysqli_query($conn, $queryline); // <---- headline image fetch
    $line = mysqli_fetch_assoc($resultline);
    $imglink = fetch('imglinks', 'articleId', $artId); // <---- image fetch


 // print_r($newEmp);
    
    // $newEmp = getEmpBool('productbelow', 'articleId', 'articleId', $artId);
   

    //     var_dump($newEmp);
    // if ($newEmp !== true) {
    //     echo "     This var has value";
    // } else  {
    //     echo "     This var is empty";
    // }

    // $upArt1 = getEmpBool('imglinks', 'subhead1', 'articleId', $artId); 
    // var_dump($upArt1);


    // $querylines = "SELECT subhead3 FROM imglinks WHERE articleId = '$artId' AND subhead3 = ' '";  
    // $resultlines = mysqli_query($conn, $querylines); 
    // $liness = mysqli_fetch_assoc($resultlines);
    // if ($liness == NULL) {
    //     echo "     This var has value";
    // } else {
    //     echo "     This var is empty";
    // }
    // print_r($liness);
    // var_dump($liness);



   

























    $queryAns = "SELECT firstp,directanswer FROM article WHERE id = '$artId'";  
    $resultAns = mysqli_query($conn, $queryAns);
    $ans = mysqli_fetch_assoc($resultAns); // <---- directAnswer fetch

    $sqlArt = "SELECT id,imgstatus,headline,author,firstp,  DATE_FORMAT(date , '%M %e, %Y') date  FROM article ORDER BY id DESC LIMIT 5";
    $resultArt = mysqli_query($conn, $sqlArt);
    $articles = mysqli_fetch_all($resultArt, MYSQLI_ASSOC); // <---- all articles fetch


    $subhead1 = fetchsub($artId, '1');
    $subproduct1 = fetchsubpro($artId, '1');
    $subhead2 = fetchsub($artId, '2');
    $subproduct2 = fetchsubpro($artId, '2');
    $subhead3 = fetchsub($artId, '3');
    $subproduct3 = fetchsubpro($artId, '3');
    $subhead4 = fetchsub($artId, '4');
    $subproduct4 = fetchsubpro($artId, '4');
    $subhead5 = fetchsub($artId, '5');
    $subproduct5 = fetchsubpro($artId, '5');
    $subhead6 = fetchsub($artId, '6');
    $subproduct6 = fetchsubpro($artId, '6');
    $subhead7 = fetchsub($artId, '7');
    $subproduct7 = fetchsubpro($artId, '7');
    $subhead8 = fetchsub($artId, '8');
    $subproduct8 = fetchsubpro($artId, '8');

    $belproduct1 = fetchbelowpro($artId, '1');
    $belproduct2 = fetchbelowpro($artId, '2');
    $belproduct3 = fetchbelowpro($artId, '3');
    $belproduct4 = fetchbelowpro($artId, '4');
    $belproduct5 = fetchbelowpro($artId, '5');
    $belproduct6 = fetchbelowpro($artId, '6');
    $belproduct7 = fetchbelowpro($artId, '7');
    $belproduct8 = fetchbelowpro($artId, '8');
   

}

?>



<!-- Section -->
<div class="container">
    <div class="articlePageArt">

            <!-- blogShowcase -->
            
            <div class="blogShowcaseArt">
            <?php if ($topicc) { ?>
                <p class="category"><?php echo $topicc['category']; ?></p>
                <p class="headline"><?php echo $topicc['headline']; ?></p>
                <p class="andTime">By: <span class="author"><?php echo $topicc['author']; ?></span> | <?php echo $deyt; ?></p>
                <?php if ($line) { ?>  <img src="uploads/<?php echo $line['headline']; ?>" alt=""> <?php } ?>
            <?php } ?>
                <!-- subheadline -->
                
                <?php if ($ans) { ?>
                <div class="directAns">
                    <pre>
<?php echo $ans['firstp']; ?>
                    </pre>
                    <pre>
<?php echo $ans['directanswer']; ?>
                    </pre>
                </div>
                <?php } ?>
                
                <?php if ($subhead1) { ?>
                <div class="sub">
                    <p class="subheadline"><?php echo $subhead1['headline1']; ?></p>
                    <pre>
<?php echo $subhead1['pheadline1']; ?>
                    </pre>
                    <?php } ?>
                    <?php if ($subproduct1) { ?>
                    <div class="subheadproduct">
                        <img src="uploads/<?php echo $imglink['subhead1']; ?>" alt="" class="productImg">
                        <p class="productName"><?php echo $subproduct1['productsubname1']; ?></p>
                        <a href="https:<?php echo $subproduct1['productsuburl1']; ?>" target="_blank" class="productLink">Check on Amazon</a>
                    </div>
                </div>
                <?php } ?>

                <?php if ($subhead2) { ?>
                <div class="sub">
                    <p class="subheadline"><?php echo $subhead2['headline2']; ?></p>
                    <pre>
<?php echo $subhead2['pheadline2']; ?>
                    </pre>
                    <?php } ?>
                    <?php if ($subproduct2) { ?>
                    <div class="subheadproduct">
                        <img src="uploads/<?php echo $imglink['subhead2']; ?>" alt="" class="productImg">
                        <p class="productName"><?php echo $subproduct2['productsubname2']; ?></p>
                        <a href="https:<?php echo $subproduct2['productsuburl2']; ?>" target="_blank" class="productLink">Check on Amazon</a>
                    </div>
                </div>
                <?php } ?>

                
                <?php if ($subhead3) { ?>
                <div class="sub">
                    <p class="subheadline"><?php echo $subhead3['headline3']; ?></p>
                    <pre>
<?php echo $subhead3['pheadline3']; ?>
                    </pre>
                    <?php } ?>
                    <?php if ($subproduct3) { ?>
                    <div class="subheadproduct">
                        <img src="uploads/<?php echo $imglink['subhead3']; ?>" alt="" class="productImg">
                        <p class="productName"><?php echo $subproduct3['productsubname3']; ?></p>
                        <a href="https:<?php echo $subproduct3['productsuburl3']; ?>" target="_blank" class="productLink">Check on Amazon</a>
                    </div>
                </div>
                <?php } ?>
                

                <?php if ($subhead4) { ?>
                <div class="sub">
                    <p class="subheadline"><?php echo $subhead4['headline4']; ?></p>
                    <pre>
<?php echo $subhead4['pheadline4']; ?>
                    </pre>
                    <?php } ?>
                    <?php if ($subproduct4 == true) { ?>
                    <div class="subheadproduct">
                        <img src="uploads/<?php echo $imglink['subhead4']; ?>" alt="" class="productImg">
                        <p class="productName"><?php echo $subproduct4['productsubname4']; ?></p>
                        <a href="https:<?php echo $subproduct4['productsuburl4']; ?>" target="_blank" class="productLink">Check on Amazon</a>
                    </div>
                </div>
                <?php } ?>

                <?php if ($subhead5) { ?>
                <div class="sub">
                    <p class="subheadline"><?php echo $subhead5['headline5']; ?></p>
                    <pre>
<?php echo $subhead5['pheadline5']; ?>
                    </pre>
                    <?php } ?>
                    <?php if ($subproduct5) { ?>
                    <div class="subheadproduct">
                        <img src="uploads/<?php echo $imglink['subhead5']; ?>" alt="" class="productImg">
                        <p class="productName"><?php echo $subproduct5['productsubname5']; ?></p>
                        <a href="https:<?php echo $subproduct5['productsuburl5']; ?>" target="_blank" class="productLink">Check on Amazon</a>
                    </div>
                </div>
                <?php } ?>

                <?php if ($subhead6) { ?>
                <div class="sub">
                    <p class="subheadline"><?php echo $subhead6['headline6']; ?></p>
                    <pre>
<?php echo $subhead6['pheadline6']; ?>
                    </pre>
                    <?php } ?>
                    <?php if ($subproduct6) { ?>
                    <div class="subheadproduct">
                        <img src="uploads/<?php echo $imglink['subhead6']; ?>" alt="" class="productImg">
                        <p class="productName"><?php echo $subproduct6['productsubname6']; ?></p>
                        <a href="https:<?php echo $subproduct6['productsuburl6']; ?>" target="_blank" class="productLink">Check on Amazon</a>
                    </div>
                </div>
                <?php } ?>

                <?php if ($subhead7) { ?>
                <div class="sub">
                    <p class="subheadline"><?php echo $subhead7['headline7']; ?></p>
                    <pre>
<?php echo $subhead7['pheadline7']; ?>
                    </pre>
                    <?php } ?>
                    <?php if ($subproduct7) { ?>
                    <div class="subheadproduct">
                        <img src="uploads/<?php echo $imglink['subhead7']; ?>" alt="" class="productImg">
                        <p class="productName"><?php echo $subproduct7['productsubname7']; ?></p>
                        <a href="https:<?php echo $subproduct7['productsuburl7']; ?>" target="_blank" class="productLink">Check on Amazon</a>
                    </div>
                </div>
                <?php } ?>

                <?php if ($subhead8) { ?>
                <div class="sub">
                    <p class="subheadline"><?php echo $subhead8['headline8']; ?></p>
                    <pre>
<?php echo $subhead8['pheadline8']; ?>
                    </pre>
                    <?php } ?>
                    <?php if ($subproduct8) { ?>
                    <div class="subheadproduct">
                        <img src="uploads/<?php echo $imglink['subhead8']; ?>" alt="" class="productImg">
                        <p class="productName"><?php echo $subproduct8['productsubname8']; ?></p>
                        <a href="https:<?php echo $subproduct8['productsuburl8']; ?>" target="_blank" class="productLink">Check on Amazon</a>
                    </div>
                </div>
                <?php } ?>

                
<!---------------- productBelow -->
                <?php if ($belproduct1) { ?>
                    <div class="productBelow">
                    <?php if ($belproduct1) { ?>
                        <div class="subheadproduct">
                            <img src="uploads/<?php echo $imglink['below1']; ?>" alt="" class="productImg">
                            <p class="productName"><?php echo $belproduct1['productname1']; ?></p>
                            <a href="https:<?php echo $belproduct1['producturl1']; ?>" target="_blank" class="productLink">Check on Amazon</a>
                        </div>
                    <?php } ?>
                    <?php if ($belproduct2) { ?>
                        <div class="subheadproduct">
                            <img src="uploads/<?php echo $imglink['below2']; ?>" alt="" class="productImg">
                            <p class="productName"><?php echo $belproduct2['productname2']; ?></p>
                            <a href="https:<?php echo $belproduct2['producturl2']; ?>" target="_blank" class="productLink">Check on Amazon</a>
                        </div>
                    <?php } ?>
                    <?php if ($belproduct3) { ?>
                        <div class="subheadproduct">
                            <img src="uploads/<?php echo $imglink['below3']; ?>" alt="" class="productImg">
                            <p class="productName"><?php echo $belproduct3['productname3']; ?></p>
                            <a href="https:<?php echo $belproduct3['producturl3']; ?>" target="_blank" class="productLink">Check on Amazon</a>
                        </div>
                    <?php } ?>
                    <?php if ($belproduct4) { ?>
                        <div class="subheadproduct">
                            <img src="uploads/<?php echo $imglink['below4']; ?>" alt="" class="productImg">
                            <p class="productName"><?php echo $belproduct4['productname4']; ?></p>
                            <a href="https:<?php echo $belproduct4['producturl4']; ?>" target="_blank" class="productLink">Check on Amazon</a>
                        </div>
                    <?php } ?>
                    <?php if ($belproduct5) { ?>
                        <div class="subheadproduct">
                            <img src="uploads/<?php echo $imglink['below5']; ?>" alt="" class="productImg">
                            <p class="productName"><?php echo $belproduct5['productname5']; ?></p>
                            <a href="https:<?php echo $belproduct5['producturl5']; ?>" target="_blank" class="productLink">Check on Amazon</a>
                        </div>
                    <?php } ?>
                    <?php if ($belproduct6) { ?>
                        <div class="subheadproduct">
                            <img src="uploads/<?php echo $imglink['below6']; ?>" alt="" class="productImg">
                            <p class="productName"><?php echo $belproduct6['productname6']; ?></p>
                            <a href="https:<?php echo $belproduct6['producturl6']; ?>" target="_blank" class="productLink">Check on Amazon</a>
                        </div>
                    <?php } ?>
                    <?php if ($belproduct7) { ?>
                        <div class="subheadproduct">
                            <img src="uploads/<?php echo $imglink['below7']; ?>" alt="" class="productImg">
                            <p class="productName"><?php echo $belproduct7['productname7']; ?></p>
                            <a href="https:<?php echo $belproduct7['producturl7']; ?>" target="_blank" class="productLink">Check on Amazon</a>
                        </div>
                    <?php } ?>
                    <?php if ($belproduct8) { ?>
                        <div class="subheadproduct">
                            <img src="uploads/<?php echo $imglink['below8']; ?>" alt="" class="productImg">
                            <p class="productName"><?php echo $belproduct8['productname8']; ?></p>
                            <a href="https:<?php echo $belproduct8['producturl8']; ?>" target="_blank" class="productLink">Check on Amazon</a>
                        </div>
                    <?php } ?>

                    </div>
                <?php } ?>

                

            </div>

            <!-- CardWrapped -->
            <div class="blogRight">
                <div class="wrapperArt">
                    <div class="flex-containerArt">
                    <?php foreach($articles as $article) {?>
                        <?php 
                        $imgId = $article['id'];
                        $imglinke = fetch('imglinks', 'articleId', $imgId);
                        ?>
                            <p>Latest posts</p>
                            <div class="cardArt">
                                <img src="uploads/<?php echo $imglinke['headline']; ?>" alt="">
                                <div class="blogDetails">
                                    <a href="articles.php?headline=<?php echo $article['headline']; ?>" class="titleLink">
                                        <p class="blogTitle"><?php echo $article['headline']; ?></p>
                                    </a>
                                    <div class="dAndTimeArt">
                                        <p>By: <a href="" class="authorLink"><?php echo $article['author']; ?></a></p>
                                        <p><?php echo $article['date']; ?></p>
                                    </div>
                                </div>
                            </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
    </div>
</div>










<?php
        include "footer.php";
?>