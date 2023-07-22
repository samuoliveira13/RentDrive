<?php
    declare(strict_types = 1);
    require_once(__DIR__ . '/../classes/user.class.php');
    require_once(__DIR__ . '/../classes/session.class.php');
    require_once(__DIR__ . '/../database/database.connection.php');

function drawLogRegHeader() { ?>
    <section id="auth">
        <div class="logo">
            <h1>RentDrive</h1>
            <h3><em>Find Your Perfect Ride At The Best Rates</em></h3>
        </div> <?php 
}

function drawRegisterForm() { ?>

    <div class="registerform">
        <form action="../actions/action.register.php" method="post">
            <label>
                <img src="/images/profile.svg" alt="">
                <input type="text" name = "f_name" placeholder="First Name" required="required" value="<?=htmlentities($_SESSION['input']['f_name register'])?>">
            </label>
            <label>
                <img src="/images/profile.svg" alt="">
                <input type="text" name="l_name" placeholder="Last Name" required="required" value="<?=htmlentities($_SESSION['input']['l_name register'])?>">
            </label>
            <label>
                <img src="/images/email.svg" alt="">
                <input type="email" name="email" placeholder="Email" required="required" value="<?=htmlentities($_SESSION['input']['email register'])?>">
            </label>
            <label>
                <img src="/images/lock.svg" alt="">
                <input type="password" name="password" placeholder="Password" required="required" value="<?=htmlentities($_SESSION['input']['password register'])?>">
            </label>
            <label>
                <img src="/images/lock.svg" alt="">
                <input type="password" name="confirm_password" placeholder="Confirm Password" required="required" value="<?=htmlentities($_SESSION['input']['confirm_password register'])?>">
            </label>
            <input type="hidden" name="csrf" value="<?=$_SESSION['csrf']?>">
            <input id="button" type="submit" value="Register">
            
            <h4>Already have an account? <a href="../pages/login.php">Log In</a></h4>
        </form>
    </div>
</section> <?php
}

function drawLoginForm() { ?>

        <div class="loginform">
            <form action="../actions/action.login.php" method="post">
                <label>
                    <img src="/images/profile.svg" alt="profile icon">
                    <input type="text" name="email" placeholder="Email" value="<?=htmlentities($_SESSION['input']['email login'])?>">
                </label>
                <label>
                    <img src="/images/lock.svg" alt="profile icon">
                    <input type="password" name="password" placeholder="Password" value="<?=htmlentities($_SESSION['input']['password login'])?>">
                </label>
                <input id="button" type="submit" value="Log In">
                
                <h4>Don't have an account yet? <a href="../pages/register.php">Register</a></h4>
            </form>
        </div>
    </section> <?php
}
?>