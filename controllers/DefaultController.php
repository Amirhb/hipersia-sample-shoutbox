<?php
/**
 * Created by PhpStorm.
 * User: Amir Hossein Babaeian
 * Date: 12/26/15
 * Time: 2:05 PM
 */
namespace app\controllers;

use hipersia\Base as base;
use hipersia\framework\Controller as Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use hipersia\framework\AssetBundle;

class DefaultController extends Controller {

    public function index( Request $request, Response $response, $args) {

        echo 'You have called ' . $args['uri'];

        return $response;
    }

    public function welcome( Request $request, Response $response) {

        echo 'Welcome!';

        return $response;
    }

    public function shoutBox( Request $request, Response $response) {

        $locator = base::getDbLocator();
        $mapper = $locator->mapper('app\models\Message');

        if(!empty($_POST)) {
            $message = $mapper->insert([
                'author' => $_POST['author'],
                'message' => $_POST['message']
            ]);
        }

        $messages = $mapper->all();

        AssetBundle::registerCss('bootstrap', __DIR__ . '/../views/css/bootstrap.css');

        return $this->render('shoutbox', ['messages' => $messages]);
    }
}