<?php
declare(strict_types = 1);

require_once('../templates/common.tpl.php');
require_once('../templates/index.tpl.php');
require_once('../database/database.connection.php');
require_once('../classes/vehicle.class.php');
require_once('../classes/location.class.php');
require_once('../classes/user.class.php');
require_once('../classes/session.class.php');

$session = new Session();
$user = null;
if ($session->isLoggedIn()) {
    $user = User::getUser($db, $session->getId());
}

$db = getDatabaseConnection();
$vehicles = Vehicle::getVehicles($db);
$locations = Location::getLocations($db);


drawHead();
drawNavBar($user);
drawMain($db);
drawVehicles($db, $vehicles);
drawLocations($db);
drawContact($db);
drawMap();
drawFooter();


?>