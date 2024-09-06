<?php

use database\ControllerDB;
use database\info;

require ('database/ControllerDB.php');

require ('database/info.php');

require ('database/Cart.php');



$db = new ControllerDB();

$info = new Info ($db);

$info_shuffle = $info->getData();

$Cart =new \database\Cart($db);
