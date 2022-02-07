<?php
session_start();
        if (isset($_SESSION['usersname'])) {

    $user = $_SESSION['usersname'];

            include "dashHeader.php";
            include "includes/functions.inc.php";
            include "includes/db.inc.php";
            // include "includes/dashboard.inc.php";

    $sqlArt = "SELECT * FROM article WHERE author = '$user' ORDER BY id DESC";
    $resultArt = mysqli_query($conn, $sqlArt);

    $posts = mysqli_fetch_all($resultArt, MYSQLI_ASSOC);

    // $posts = fetchAll('article', 'author', $user);

?>
<div class="blackBgd"></div>

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
                    <form class="edit" action="edit.php" method="post">
                        <input type="submit" name="edit" value="">
                        <input type="hidden" name="editId" value="<?php echo $post['id'] ?>">
                    </form>
                    <form class="delete" action="includes/edit.inc.php" method="post">
                        <input id="delBtn" type="submit" name="delete" value="">
                        <input type="hidden" name="deleteId" value="<?php echo $post['id']; ?>">
                    </form>  
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