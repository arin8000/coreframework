<?php
// load config
require_once 'config/config.php';

// Autoload Core libs
spl_autoload_register(function ($className){
    require_once 'libs/' . $className . '.php';
});
