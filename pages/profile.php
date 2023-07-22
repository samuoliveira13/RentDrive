<?php
    declare(strict_types=1);
    require_once(dirname(__DIR__).'/templates/common.tpl.php');
    require_once(dirname(__DIR__).'/templates/auth.tpl.php');
    require_once(dirname(__DIR__).'/classes/session.class.php');
    $session = new Session();

    drawHead();
    drawLogRegHeader();
    drawRegisterForm();
?>