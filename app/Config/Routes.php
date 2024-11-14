<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');  // Optional default route
$routes->get('login', 'LoginController::index');  // Login page
$routes->post('login', 'LoginController::authenticate');  // Login form submission
$routes->get('register', 'RegistrationController::index');  // Register page
$routes->post('register', 'RegistrationController::authenticate');  // Registration form submission
$routes->get('/dashboard', 'DashboardController::index'); //dashboard 
$routes->get('/logout', 'LogoutController::index');//logout