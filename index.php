<?php
session_start();
require_once 'config/database.php';
require_once 'utils/helpers.php';

// Simple routing
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'welcome';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Load the appropriate controller
$controllerFile = 'app/controllers/' . ucfirst($controller) . 'Controller.php';
if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controllerClass = ucfirst($controller) . 'Controller';
    $controllerInstance = new $controllerClass();
    
    if (method_exists($controllerInstance, $action)) {
        $controllerInstance->$action();
    } else {
        die('Action not found!');
    }
} else {
    die('Controller not found!');
}