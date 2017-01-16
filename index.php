<?php

require_once './vendor/autoload.php';


define("ROOT", __DIR__);
define("RESOURCES", ROOT . "/src/Resources/");
define("ROUTER", ROOT . "/src/Config/");


#################################################
#                                               #
######## default db connection setup #########  #
#                                               #
#################################################
define('__host', 'localhost');
define('__database', 'parentmail');
define('__username', 'root');
define('__password', '123');
define('__charset', 'utf8');
define('__collation', 'utf8_unicode_ci');
define('__prefix', ''); 
 define('__driver', 'mysql'); 

$boot = new Lib\bootstrap();
$boot->init();

