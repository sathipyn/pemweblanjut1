<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'GradeConversionController::index');
$routes->post('grade/convert', 'GradeConversionController::convert');
$routes->get('GradeConversionController', 'GradeConversionController::index');










