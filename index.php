<?php

require_once ("bootstrap.php");

$router = new \Wheel\Base\Router($uri);

$router->route();