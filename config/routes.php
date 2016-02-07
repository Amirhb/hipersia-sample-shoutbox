<?php
/**
 * Created by PhpStorm.
 * User: Amir Hossein Babaeian
 * Date: 12/26/15
 * Time: 10:44 AM
 */
use Symfony\Component\HttpFoundation\Request;

$router = new League\Route\RouteCollection;

$router->addRoute('GET', '/migrate', 'App\MigrationController::index');
$router->addRoute('GET', '/test-view', 'App\DefaultController::testView');
$router->addRoute('POST', '/test-view', 'App\DefaultController::testView');
$router->addRoute('GET', '/cow', 'App\DefaultController::cow');
$router->addRoute('GET', '/{uri}', 'App\DefaultController::index');
$router->addRoute('GET', '/', 'App\DefaultController::welcome');

$dispatcher = $router->getDispatcher();

$request = Request::createFromGlobals();
$response = $dispatcher->dispatch($request->getMethod(), $request->getPathInfo());

$response->send();
