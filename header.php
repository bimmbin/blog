<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css?v=1" />
    <link rel="stylesheet" type="text/css" href="css/mqueries.css?v=1" />
    <!-- <meta name="viewport" content="user-scalable=no, initial-scale=1" /> -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <title>Document</title>
</head>


<!-- headerpart -->

<div class="head">
    <div class="container">
        <header>
            <div class="logo">
                <h2><a href="index.php">TheBlogLogo</a></h2>
            </div>
            <div class="img">
                <img src="img/burger.png" alt="">
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Articles</a></li>
                    <li><a href="#">Contact</a></li>
                    <?php 
                        if (isset($_SESSION['usersid'])) {
                            echo "<li><a href='dashboard.php'>Dashboard</a></li>";
                            echo "<li><a href='includes/logout.inc.php'>LogOut</a></li>";
                        }
                        else {
                            // echo "<a href='signup.php'><img src='img/login.png'></a>";
                            echo "<li><a href='login.php'>LogIn</a></li>";
                            // echo "<li><a href='login.php'>Log in</a><li>";
                        }
                    ?>
                </ul>
            </nav>
        </header>
    </div>
</div>

    <!-- headerpart -->    

<body>