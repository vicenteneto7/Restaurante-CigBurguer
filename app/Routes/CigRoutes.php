<?php

namespace App\Routes;

use Config\Services;

$routes = Services::routes();

//main
$routes->get('/', 'Main::index');

//login / logout
$routes->get('/auth/login', 'Auth::login');
$routes->post('/auth/login_submit', 'Auth::login_submit');
$routes->get('/auth/logout', 'Auth::logout');