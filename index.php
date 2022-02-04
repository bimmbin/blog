<?php
        include "header.php";
        include "includes/db.inc.php";
        include "includes/functions.inc.php";

        $sqlArt = "SELECT id,imgstatus,headline,author,firstp,  DATE_FORMAT(date , '%M %e, %Y') date  FROM article ORDER BY id DESC";
        $resultArt = mysqli_query($conn, $sqlArt);

        $articles = mysqli_fetch_all($resultArt, MYSQLI_ASSOC);

        $sqlShow = "SELECT id,imgstatus,headline,author,firstp,  DATE_FORMAT(date , '%M %e, %Y') date  FROM article ORDER BY id DESC LIMIT 5";
        $resultShow = mysqli_query($conn, $sqlShow);

        $shows = mysqli_fetch_all($resultShow, MYSQLI_ASSOC);
        

?>





 <!-- Section -->
 <div class="container">
    <?php foreach($shows as $show) {?>
        <?php 
        $imgId = $show['id'];
        $imglink = fetch('imglinks', 'articleId', $imgId);
        ?>
        <div class="slide">
            <div class="blogShowcase">
                <a href="" class="showcaseLink">
                    <img src="uploads/<?php echo $imglink['headline']; ?>" alt="">
                </a>
                <div class="showcaseDetails">
                    <p><?php echo $show['date']; ?></p>
                    <p><a href="">You can take a look here for a longer list of screen sizes and respective media queries. You can take a look here for a longer list of screen sizes and respective </a></p>
                    <p class="lite"><?php echo $show['firstp']; ?></p>
                </div>
            </div>
        </div>
    <?php } ?>  
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
                <div class="cardContainer">
                    <div class="card">
                        <div class="imgLink">
                            <img src="uploads/<?php echo $imglink['headline']; ?>" alt="">
                        </div>
                        <div class="blogDetails">
                            <a href="articles.php?headline=<?php echo $article['headline']; ?>" class="titleLink">
                                <p class="blogTitle"><?php echo $article['headline']; ?></p>
                            </a>
                            <div class="dAndTime">
                                <p>By: <a href="author.php?author=<?php echo $article['author']; ?>" class="authorLink"><?php echo $article['author']; ?></a></p>
                                <p><?php echo $article['date']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>



<div class="blackBg"></div>























<?php
        include "footer.php";
?>
