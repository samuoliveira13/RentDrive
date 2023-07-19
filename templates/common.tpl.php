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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="../js/script.js"></script>
    </head>
    <body>
    <wrapper>
<?php }

function drawNavBar(?User $user) { ?>
    <section id="nav">
        <div class="nav-wrapper">
            <img class="nav-logo" src="../assets/logo1.png" alt="RentDrive">
            <div class="nav-menu">
                <ul>
                    <li><a href="#main">HOME</a></li>
                    <li><a href="#locations">LOCATIONS</a></li>
                    <li><a href="#contact">CONTACT US</a></li>
                </ul>
                <?php if ($user === null) { ?>
                    <div class="nav-log-reg">
                        <a href="../pages/register.php">Register</a>
                        <a href="../pages/login.php">Log In</a>
                    </div>
                <?php } else { ?>
                    <div class="nav-profile">
                        <h5><?php echo ucfirst($user->f_name) . ' ' . ucfirst($user->l_name); ?></h5>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

<?php }
function drawFooter() { ?>
    </wrapper>
        <footer>
            <section id="footer">
                <div class="footer-socials">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    <i class="fa fa-facebook-square"></i>
                    <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                </div>
                <div class="footer-info">
                    <a href="">Terms of Service</a>
                    <a href="">Privacy Policiy</a>
                </div>
                <h4>&copy; 2018 Rent Drive</h4>
            </section>
        </footer>
    </body>
<?php }

function drawMessages(Session $session) { ?>
    <section id="messages">
        <?php foreach($session->getMessages() as $message) { ?>
            <article clas="<?=$message['type']?>">
            <i class="fas fa-exclamation-circle"></i>
            <?=$message['text']?>
            </article>
        <?php } ?>
    </section>
<?php }
