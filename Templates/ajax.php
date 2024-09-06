<?php

// require MySQL Connection
require ('../database/ControllerDB.php');

// require Product Class
require ('../database/info.php');

// DBController object
$db = new \database\ControllerDB();

// Product object
$info = new info($db);

if (isset($_POST['itemid'])){
    $result = $info->getinfo($_POST['itemid']);
    echo json_encode($result);
}