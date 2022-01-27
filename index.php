<?php
        include "header.php";
        include "includes/db.inc.php";
        include "includes/functions.inc.php";

        $sqlArt = "SELECT id,imgstatus,headline,author,firstp,  DATE_FORMAT(date , '%M %e, %Y') date  FROM article ORDER BY id DESC";
        $resultArt = mysqli_query($conn, $sqlArt);

        $articles = mysqli_fetch_all($resultArt, MYSQLI_ASSOC);
        

?>





 <!-- Section -->
 <div class="container">
    <a href="" class="showcaseLink">
        <div class="blogShowcase">
            <img src="img/rec.png" alt="">
            <div class="showcaseDetails">
                <p>January 4, 2022</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et</p>
            </div>
        </div>  
    </a>
</div>
            <!-- CardWrapped -->
<div class="container">
    <div class="wrapper">
        <div class="flex-container">

            <?php foreach($articles as $article) {?>
                <?php 
                $imgId = $article['id'];
                $imglink = fetch('imglinks', 'articleId', $imgId);
                ?>
                <div class="card">
                    <a href="" class="imgLink">
                        <img src="uploads/<?php echo $imglink['headline']; ?>" alt="">
                    </a>
                    <div class="blogDetails">
                        <a href="articles.php?headline=<?php echo $article['headline']; ?>" class="titleLink">
                            <p class="blogTitle"><?php echo $article['headline']; ?></p>
                        </a>
                        <div class="dAndTime">
                            <p>By: <a href="" class="authorLink"><?php echo $article['author']; ?></a></p>
                            <p><?php echo $article['date']; ?></p>
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>
</div>



























<?php
        include "footer.php";
?>
