<?php

declare(strict_types = 1);

function drawHead() { ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RentDrive</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    </head>
    <body>
    <wrapper>
<?php }

function drawNavBar() { ?>
    <section id="nav">
        <img class="nav-logo" src="../assets/logo1.png" alt="RentDrive">
        <div class="nav-menu">
            <ul>
                <li><a href="../pages/index.php">HOME</a></li>
                <li><a href="../pages/about.php">ABOUT</a></li>
                <li><a href="../pages/contact.php">CONTACT US</a></li>
            </ul>
        </div>
    </section>
<?php }
