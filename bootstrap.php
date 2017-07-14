<?php

require_once ("constants.php");
require_once(VENDOR_DIR . "autoload.php");

Wheel\Base\Benchmark::start(microtime());

$uri = str_ireplace("/" . APP_NAME, "", trim(Wheel\Input\Server::get("PATH_INFO")));

$language = \Wheel\Base\Config::get("config", "language");

\Wheel\I8N\I8N::load($language);