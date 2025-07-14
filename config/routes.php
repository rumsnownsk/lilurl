<?php

/** @var \AppPHP\Application $app */

use App\Controllers\MainController;


const MIDDLEWARE = [
//    'auth' => \PHPFrw\Middleware\Auth::class,
//    'guest' => \PHPFrw\Middleware\Guest::class,
];

$app->router->get('/', [MainController::class, 'index']);
$app->router->post('/getHistory', [MainController::class, 'getHistory'])->withoutCsrfToken();
$app->router->post('/getLilUrl', [MainController::class, 'getLilUrl'])->withoutCsrfToken();
$app->router->get('/(?P<shortLink>[a-zA-Z0-9-]+)', [MainController::class, 'getOriginUrl']);


$app->router->add('/api/v1/test', function (){
    response()->json([
        'status'=> 'success',
        'message'=>'good page'
    ]);
}, ['get', 'post', 'put'])->withoutCsrfToken();


