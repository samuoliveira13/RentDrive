<?php
    declare(strict_types = 1);
    require_once(dirname(__DIR__).'/database/database.connection.php');
    require_once(dirname(__DIR__).'/classes/session.class.php');
    $session = new Session();

    $_SESSION['input']['f_name register'] = htmlentities($_POST['f_name']);
    $_SESSION['input']['l_name register'] = htmlentities($_POST['l_name']);
    $_SESSION['input']['email register'] = htmlentities($_POST['email']);
    $_SESSION['input']['password register'] = htmlentities($_POST['password']);
    $_SESSION['input']['confirm_password register'] = htmlentities($_POST['confirm_password']);

    $db = getDatabaseConnection();
    if ($_POST['password'] === $_POST['confirm_password']) {

        $cost = ['cost' => 12];
        $stmt = $db->prepare('INSERT INTO users (f_name, l_name, email, password, role) VALUES (?, ?, ?, ?,?)');
        $stmt->execute(array($_POST['f_name'], $_POST['l_name'], $_POST['email'], password_hash($_POST['password'], PASSWORD_DEFAULT, $cost), 'user'));

    } else {
        $session->addMessage('Warning', "Passwords don't mactch");
        die(header('Location: ../pages/register.php'));
    }

    unset($_SESSION['input']);

    $session->addMessage('Success', "Registration Completed!");
    header('Location: ../pages/login.php');
?>