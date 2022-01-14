<?php
        include "header.php";
?>

<section>
    <form action="includes/signup.inc.php" method="post">
        <h2>Sign up</h2>
        <input type="text" name="name" placeholder="Full name...">
        <input type="text" name="email" placeholder="Email...">
        <input type="text" name="usersUname" placeholder="username...">
        <input type="password" name="pwd" placeholder="Password...">
        <input type="password" name="pwdrepeat" placeholder="Repeat Password...">
        <button type="submit" name="submit">Sign up</button>
    <?php
        if (isset($_GET['error'])) { 
            if ($_GET['error'] == 'emptyinput') {
                echo '<p>Fill in all fields!</p>';
            }
        }
        if (isset($_GET['error'])) { 
            if ($_GET['error'] == 'invalidUsername') {
                echo '<p>Enter a valid Username!</p>';
            }
        }
        if (isset($_GET['error'])) { 
            if ($_GET['error'] == 'invalidEmail') {
                echo '<p>Invalid Email!</p>';
            }
        }
        if (isset($_GET['error'])) { 
            if ($_GET['error'] == 'passworddontmatch') {
                echo "<p>Password doesn't Match!</p>";
            }
        }
        if (isset($_GET['error'])) { 
            if ($_GET['error'] == 'usernametaken') {
                echo '<p>Username already taken!</p>';
            }
        }
        if (isset($_GET['error'])) { 
            if ($_GET['error'] == 'none') {
                echo '<p>You have signed up!</p>';
            }
        }
    ?>  
    </form>
</section>



<?php
        include "footer.php";
?>
