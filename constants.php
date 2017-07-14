<?php

define("APP_NAME", "App");
define("APP_SPECIFIC_NAME", "");

define("DS", DIRECTORY_SEPARATOR);

define("ENV_PRODUCTION", "Production");
define("ENV_DEVELOPMENT", "Development");
define("ENV_TEST", "Testing");

define("ENV", ENV_DEVELOPMENT);

define("PROJECT_DIR", __DIR__ . DS);

define("VENDOR_DIR", PROJECT_DIR . "vendor" . DS);
define("APP_URL_NAMESPACE", "app");

define("APP_DIR", PROJECT_DIR . "protected" . DS);
define("PUBLIC_DIR", PROJECT_DIR . "public" . DS);

define("GLOBAL_APP_DIR", VENDOR_DIR . "wheel" . DS . "wheel" . DS . "src" . DS . APP_NAME . DS);

define("ASSET_PATH", "public");
define("ASSET_DIR", PROJECT_DIR . "public");

define("CONFIG_DIR", APP_DIR . "Configs" . DS);
define("GLOBAL_CONFIG_DIR", GLOBAL_APP_DIR . "Configs" . DS);

define("CONTROLLER_DIR", APP_DIR . "Controllers" . DS);
define("CACHE_DIR", GLOBAL_APP_DIR . "Cache" . DS . APP_SPECIFIC_NAME . DS);
define("LANG_DIR", GLOBAL_APP_DIR . "Languages" . DS . APP_SPECIFIC_NAME . DS);
define("LOG_DIR", GLOBAL_APP_DIR . "Logs" . DS . APP_SPECIFIC_NAME . DS);
define("VIEW_DIR", APP_DIR . "Views" . DS);
define("VIEW_DEFAULT_DIR", VENDOR_DIR . "wheel" . DS . "wheel" . DS . "src" . DS . "Wheel" . DS . "View" . DS . "Default" . DS);