<?php

use Aura\SqlQuery\QueryFactory;
use database\Connection;
use Delight\Auth\Auth;
use DI\ContainerBuilder;
use League\Plates\Engine;

if( !session_id() ) @session_start();
require '../settings.php';
require '../vendor/autoload.php';

$builder = new ContainerBuilder();
$builder->addDefinitions([
    Engine::class => function() {
    return new Engine('../views');
    },
    Auth::class => function() {
        return new Auth(Connection::getInstance());
    },
    QueryFactory::class => function() {
        return new QueryFactory('mysql');
    }
]);
$container = $builder->build();

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/', ['\Controllers\HomeController', 'index']);
    $r->addRoute('GET', '/create', ['\Controllers\StorePostController', 'index']);
    $r->addRoute('POST', '/store', ['\Controllers\StorePostController', 'store']);
    $r->addRoute('GET', '/register', ['\Controllers\UserController', 'index']);
    $r->addRoute('GET', '/register/verification/{selector:.+}/{token:.+}', ['\Controllers\UserController', 'verificationUser']);
    $r->addRoute('POST', '/loginUser', ['\Controllers\UserController', 'loginUser']);
    $r->addRoute('GET', '/logout', ['\Controllers\UserController', 'logout']);
    $r->addRoute('POST', '/registerUser', ['\Controllers\UserController', 'registerUser']);
    $r->addRoute('GET', '/login', ['\Controllers\UserController', 'login']);
    $r->addRoute('GET', '/show/{id:\d+}', ['\Controllers\ShowPostController', 'index']);
    $r->addRoute('GET', '/edit/{id:\d+}', ['\Controllers\EditPostController', 'index']);
    $r->addRoute('GET', '/delete/{id:\d+}', ['\Controllers\DeletePostController', 'delete']);
    $r->addRoute(['GET', 'POST'], '/update[/{id:\d+}]', ['\Controllers\EditPostController', 'update']);
    $r->addRoute('GET', '/{page}/{item:\d+}', ['\Controllers\HomeController', 'index']);
});

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        $templates = new Engine('../views');
        echo $templates->render('404');
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        $container->call([$routeInfo[1][0], $routeInfo[1][1]], [$routeInfo[2]]);
        break;
}
