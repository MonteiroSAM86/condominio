<?php 
    require "header.php";
?>

    <main>
        <div class="wrapper__main">
            <section class="section__default">
                <h1>Signup</h1>
                <form class="form__default" action="includes/signup.inc.php" metthod="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="text" name="mail" placeholder="e-mail">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwd-repeat" placeholder="Repeat a password">
                    <button class="default__btn" type="submit" name="signup-submit">Signup</button>
                </form>
            </section>
        </div>
    </main>

<?php 
    require "footer.php";
?>