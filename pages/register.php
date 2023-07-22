<?php
    declare(strict_types=1);
    require_once(dirname(__DIR__).'/templates/common.tpl.php');
    require_once(dirname(__DIR__).'/templates/auth.tpl.php');
    require_once(dirname(__DIR__).'/classes/session.class.php');
    $session = new Session();

    $_SESSION['input']['f_name register'] = $_SESSION['input']['f_name register'] ?? "";
    $_SESSION['input']['l_name register'] = $_SESSION['input']['l_name register'] ?? "";
    $_SESSION['input']['email register'] = $_SESSION['input']['email register'] ?? "";
    $_SESSION['input']['password register'] = $_SESSION['input']['password register'] ?? "";
    $_SESSION['input']['confirm_password register'] = $_SESSION['input']['confirm_password register'] ?? "";

    drawHead();
    drawLogRegHeader();
    drawRegisterForm();
?>