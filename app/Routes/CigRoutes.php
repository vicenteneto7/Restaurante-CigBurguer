<?php

namespace App\Routes;

use Config\Services;

$routes = Services::routes();

//routes

$routes->get('/', 'Auth::index');
$routes->get('/teste', 'Auth::teste');