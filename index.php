<?php
        include "header.php";
        include "includes/db.inc.php";

        $sqlArt = "SELECT imgstatus,headline,author,firstp,  DATE_FORMAT(date , '%M %e, %Y') date  FROM article";
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

                <div class="card">
                    <a href="" class="imgLink">
                        <img src="img/rec.png" alt="">
                    </a>
                    <div class="blogDetails">
                        <a href="" class="titleLink">
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
