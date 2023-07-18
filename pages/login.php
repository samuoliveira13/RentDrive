<?php
    declare(strict_types=1);
    require_once(dirname(__DIR__).'/templates/common.tpl.php');
    require_once(dirname(__DIR__).'/templates/auth.tpl.php');
    require_once(dirname(__DIR__).'/classes/session.class.php');
    $session = new Session();

    $_SESSION['input']['email login'] = $_SESSION['input']['email login'] ?? "";
    $_SESSION['input']['password login'] = $_SESSION['input']['password login'] ?? "";

    drawHead();
    drawLogRegHeader();
    drawLoginForm();
    
?>