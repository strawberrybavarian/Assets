<?php
$routes = require('routes.php');
$request = $_SERVER['REQUEST_URI'];

switch($request) {
    case '':
    case '/':
        require __DIR__ . $routes['/404'];
        break;
    case '/login':
        require __DIR__ . $routes['/login'];
        break;
    case '/dashboard':
        require __DIR__ . $routes['/dashboard'];
        break;
    
    default:
        require __DIR__ . $routes['/404'];
        break;
}



