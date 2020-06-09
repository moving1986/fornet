<?php

define("DEBAG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT.'/public');
define("APP", ROOT.'/app');
define("CORE", ROOT.'/vendor/fornet/core');
define("LIBS", ROOT.'/vendor/fornet/core/libs');
define("CACHE", ROOT.'/tmp/cache');
define("CONF", ROOT.'/config');
define("LAYOUT", 'default');

require_once ROOT. '/vendor/autoload.php';
echo 'hell';