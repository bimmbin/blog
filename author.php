<?php

if (isset($_GET['author'])) {
    include "header.php";
    include "includes/db.inc.php";
    include "includes/functions.inc.php";
    $author = $_GET['author'];
    

    $articles = fetchAll('article', 'author', $author);


?>


<div class="container">
    <div class="authorRecent">
        <p><?php echo $author; ?>'s Posts</p>
    </div>
    <div class="wrapper">
        <div class="flex-container">

            <?php foreach($articles as $article) {?>
                <?php 
                $imgId = $article['id'];
                $imglink = fetch('imglinks', 'articleId', $imgId);
                $phdate = strtotime($article['date']);
                $deyt = date('F j, Y', $phdate);
                ?>
                <div class="cardContainer">
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
                                <p><?php echo $deyt; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>












<?php

}
        include "footer.php";
?>