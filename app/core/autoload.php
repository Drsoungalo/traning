<?php
// coter autoload
require_once("config.php");
require_once("Database.php");
require_once("controller.php");
require_once("Modal.php");
require_once("App.php");
spl_autoload_register(function($class){
    require_once("app/models/".ucfirst($class).".php");
});