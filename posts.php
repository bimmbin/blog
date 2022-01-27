<?php
session_start();
        if (isset($_SESSION['usersname'])) {

    $user = $_SESSION['usersname'];

            include "dashHeader.php";
            include "includes/functions.inc.php";
            include "includes/db.inc.php";
            // include "includes/dashboard.inc.php";

    $posts = fetchAll('article', 'author', $user);

?>


<div class="containerPosts">
    <h2 class="authorName"><?php echo $user; ?>'s posts</h2>
    <div class="wrapper">
        <div class="flex-container">
            <?php foreach($posts as $post) {?>
                <?php 
                $imgId = $post['id'];
                $imglink = fetch('imglinks', 'articleId', $imgId);
                $phdate = strtotime($post['date']);
                $deyt = date('F j, Y', $phdate);
                ?>
                <div class="card">
                    <a href="" class="imgLink">
                        <img src="uploads/<?php echo $imglink['headline']; ?>" alt="">
                    </a>
                    <div class="blogDetails">
                        <a href="articles.php?headline=<?php echo $post['headline']; ?>" class="titleLink">
                            <p class="blogTitle"><?php echo $post['headline']; ?></p>
                        </a>
                        <div class="dAndTime">
                            <p>By: <a href="" class="authorLink"><?php echo $post['author']; ?></a></p>
                            <p><?php echo $deyt; ?></p>
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>
</div>









<?php
        } else {
            header("location: index.php");
        }
        include "dashFooter.php";
?>