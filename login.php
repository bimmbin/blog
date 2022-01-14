<?php
        include "header.php";
?>

<div class="container">
    <section class="loginPage">
        <form action="includes/login.inc.php" method="post" class="loginForm">
            <h2>Welcome Back</h2>
            <input class="textarea" type="text" name="userName" placeholder="Username or Email...">
            <input class="textarea" type="password" name="pwd" placeholder="Password...">
            <button class="loginBtn" type="submit" name="submit">Log in</button>
        <?php
            if (isset($_GET['error'])) { 
                if ($_GET['error'] == 'emptyinput') {
                    echo '<p>Fill in all fields!</p>';
                }
            }
            if (isset($_GET['error'])) { 
                if ($_GET['error'] == 'wronglogin') {
                    echo '<p>Incorrect login info!</p>';
                }
            }
        ?>
        </form>
    </section>
</div>

<?php
        include "footer.php";
?>