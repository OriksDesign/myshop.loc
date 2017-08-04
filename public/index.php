index.php

<?php
include_once '../config/config.php'; //инициализация настроек
include_once '../lib/mainFunction.php'; //основные функции

 //say name controller for work
$controllerName=isset($_GET['controller'])?ucfirst($_GET['controller']):'Index';
echo "Connect php file (Controller) = " . $controllerName . "<br>";
//function for work
$actionName=isset($_GET['action'])?$_GET['action']:'test';
echo "function build article (Action) = " . $actionName . "<br>";
//include controller
//include_once '../controllers/' . $controllerName . 'Controller.php';

//build name function
//$function=$actionName . 'Action';
//echo 'full name use function = ' . $function . '<br>';

//$function();


loadPage($controllerName, $actionName);
?>