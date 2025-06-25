<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acercade', 'Home::acercade');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');

$routes->get('/registro','usuario_controller::create');
$routes->post('/enviar-form', 'usuario_controller::formValidation');

$routes->get('/login','Login_Controller');
$routes->post('/enviarlogin','Login_Controller::auth');
$routes->get('/panel','Panel_controller::index',['filter'=> 'auth']);
$routes->get('/logout','Login_Controller::logout');