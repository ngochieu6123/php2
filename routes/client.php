<?php

use Admin\PhpOop\Controllers\Client\DetailController;
use Admin\PhpOop\Controllers\Client\HomeController;
use Admin\PhpOop\Controllers\Client\AuthController;
use Admin\PhpOop\Controllers\Client\ListController;

$router->get('/', HomeController::class . '@index');
$router->get('/list', ListController::class . '@list');
$router->get('/{id}/detail', DetailController::class . '@detail');

$router->get('/auth/login', AuthController::class . '@showFormLogin');
$router->post('/auth/handle-login', AuthController::class . '@login');
$router->get('/auth/logout', AuthController::class . '@logout');