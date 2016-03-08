<?php
/**
 * Created by PhpStorm.
 * User: Amir Hossein Babaeian
 * Date: 12/26/15
 * Time: 10:44 AM
 */
use Symfony\Component\HttpFoundation\Request;

$router = new League\Route\RouteCollection;

$router->addRoute('GET', '/migrate', 'app\controllers\MigrationController::index');
$router->addRoute('GET', '/', 'app\controllers\DefaultController::shoutBox');
$router->addRoute('POST', '/', 'app\controllers\DefaultController::shoutBox');
$router->addRoute('GET', '/{uri}', 'app\controllers\DefaultController::index');

$dispatcher = $router->getDispatcher();

$request = Request::createFromGlobals();
$response = $dispatcher->dispatch($request->getMethod(), $request->getPathInfo());

$response->send();
