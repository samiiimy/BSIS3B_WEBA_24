<?php


require 'function.php';
require 'Database.php';
require 'Controller.php';
require 'Model.php';
require 'App.php';

spl_autoload_register(function ($class_name) {

    require '../app/models/' . $class_name . 'php';
});

