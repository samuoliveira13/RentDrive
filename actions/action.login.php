<?php
    declare(strict_types=1);

    require_once(__DIR__ . '/../classes/session.class.php');
    require_once(__DIR__ . '/../classes/user.class.php');
    require_once(__DIR__ . '/../database/database.connection.php');
    $session = new Session();

    $_SESSION['input']['email login'] = htmlentities($_POST['email']);
    $_SESSION['input']['password login'] = htmlentities($_POST['password']);

    $db = getDatabaseConnection();

    $user = User::getUserLogIn($db, $_POST['email'], $_POST['password']);

    if ($user) {
        $_SESSION['id'] = $user->id;
        $_SESSION['email'] = $user->getEmail();

        unset($_SESSION['input']['email login']);
        unset($_SESSION['input']['password login']);
        $session->addMessage('sucess', 'Login was sucessful! Welcome!');
        header('Location: ../pages/index.php');
    } else {
        $session->addMessage('error' , 'Wrong password, please try again');
        die(header("Location: ../pages/login.php"));
    }
?>