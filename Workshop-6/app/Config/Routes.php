<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


// INICIO

$routes->get('/', 'Home::index');


// SECCION DE ESTUDIANTES

// Cargar la patalla principal de estudiantes
$routes->get('students', 'StudentController::index');

// Carga la vista de create - cargar sin datos
$routes->get('students/create', 'StudentController::create');

// Funcion de guardar los datos el estudiante
$routes->post('students/store', 'StudentController::store');

// Carga la vista de edit - cargar datos de estudiante
$routes->get('students/edit/(:num)', 'StudentController::edit/$1');

// Funcion de actulizar los datos el estudiante
$routes->post('students/update/(:num)', 'StudentController::update/$1');

// Funcion de eliminar los datos el estudiante
$routes->get('students/delete/(:num)', 'StudentController::delete/$1');


// SECCION DE CARRERAS

// Cargar la patalla principal de carreras
$routes->get('carrers', 'CarrerController::index');

// Carga la vista de create - cargar sin datos
$routes->get('carrers/create', 'CarrerController::create');

// Funcion de guardar los datos la carrera
$routes->post('carrers/store', 'CarrerController::store');

// Carga la vista de edit - cargar datos de la carrera
$routes->get('carrers/edit/(:num)', 'CarrerController::edit/$1');

// Funcion de actulizar los datos la carrera
$routes->post('carrers/update/(:num)', 'CarrerController::update/$1');

// Funcion de eliminar los datos la carrera
$routes->get('carrers/delete/(:num)', 'CarrerController::delete/$1');
