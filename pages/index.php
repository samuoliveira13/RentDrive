<?php
declare(strict_types = 1);

require_once('../templates/common.tpl.php');
require_once('../templates/index.tpl.php');
require_once('../database/database.connection.php');
require_once('../classes/vehicle.class.php');

$db = getDatabaseConnection();
$vehicles = Vehicle::getVehicles($db);


drawHead();
drawNavBar();
drawMain();
drawVehicles($vehicles);


?>