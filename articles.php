<?php

if (isset($_GET['headline'])) {
include "header.php";
include "includes/db.inc.php";
include "includes/functions.inc.php";


    $headline = mysqli_real_escape_string($conn, $_GET['headline']);

    $topicc = fetch('article', 'headline', $headline); // <---- article fetch

    
    $artId = $topicc['id'];
    $phdate = strtotime($topicc['date']);
    $deyt = date('F j, Y', $phdate);

    // echo $artId;

    $queryline = "SELECT * FROM imglinks WHERE articleId = '$artId' AND NOT headline = ' '";  
    $resultline = mysqli_query($conn, $queryline); // <---- headline image fetch
    $line = mysqli_fetch_assoc($resultline);
    $imglink = fetch('imglinks', 'articleId', $artId); // <---- image fetch


    $queryAns = "SELECT firstp,directanswer FROM article WHERE id = '$artId'";  
    $resultAns = mysqli_query($conn, $queryAns);
    $ans = mysqli_fetch_assoc($resultAns); // <---- directAnswer fetch

    $sqlArt = "SELECT id,headline,author,firstp,  DATE_FORMAT(date , '%M %e, %Y') date  FROM article ORDER BY id DESC LIMIT 5";
    $resultArt = mysqli_query($conn, $sqlArt);
    $articles = mysqli_fetch_all($resultArt, MYSQLI_ASSOC); // <---- all articles fetch


    for ($i=1; $i <= 8; $i++) { 
        ${"subhead" . $i} = fetchsub($artId, $i);
        ${"subproduct" . $i} = fetchsubpro($artId, $i);

        ${"belproduct" . $i} = fetchbelowpro($artId, $i);
    }
 

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
                
            <?php for ($i=1; $i <= 8; $i++) { ?>
                <?php if (${"subhead" . $i}) { ?> 
                <div class="sub">
                    <p class="subheadline"><?php echo ${"subhead" . $i}['headline'.$i]; ?></p>
                    <pre>
<?php echo ${"subhead" . $i}['pheadline'.$i]; ?>
                    </pre>
                    <?php } ?>
                    <?php if (${"subproduct" . $i}) { ?>
                    <div class="subheadproduct">
                        <img src="uploads/<?php echo $imglink['subhead'.$i]; ?>" alt="" class="productImg">
                        <p class="productName"><?php echo ${"subproduct" . $i}['productsubname'.$i]; ?></p>
                        <a href="https:<?php echo ${"subproduct" . $i}['productsuburl'.$i]; ?>" target="_blank" class="productLink">Check on Amazon</a>
                    </div>
                </div>
                <?php } ?>
            <?php } ?>


                
<!---------------- productBelow -->
                <?php if ($belproduct1) { ?>
                    <div class="productBelow">
                <?php for ($i=1; $i <= 8; $i++) { ?>
                    <?php if (${"belproduct" . $i}) { ?>
                        <div class="subheadproduct">
                            <img src="uploads/<?php echo $imglink['below'.$i]; ?>" alt="" class="productImg">
                            <p class="productName"><?php echo ${"belproduct" . $i}['productname'.$i]; ?></p>
                            <a href="https:<?php echo ${"belproduct" . $i}['producturl'.$i]; ?>" target="_blank" class="productLink">Check on Amazon</a>
                        </div>
                    <?php } ?>
                <?php } ?>
                    </div>
                <?php } ?>

                

            </div>

            <!-- CardWrapped -->
            <div class="blogRight">
                <p>Latest posts</p>
                <div class="wrapperArt">
                    <div class="flex-containerArt">
                    <?php foreach($articles as $article) {?>
                        <?php 
                        $imgId = $article['id'];
                        $imglinke = fetch('imglinks', 'articleId', $imgId);
                        ?>
                            <div class="cardArt">
                                <img src="uploads/<?php echo $imglinke['headline']; ?>" alt="">
                                <div class="blogDetailsArt">
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