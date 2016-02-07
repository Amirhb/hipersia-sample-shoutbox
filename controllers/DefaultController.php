<?php
/**
 * Created by PhpStorm.
 * User: Amir Hossein Babaeian
 * Date: 12/26/15
 * Time: 2:05 PM
 */
namespace app\controllers;

use hipersia\framework\Controller as Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use hipersia\framework\AssetBundle;

class DefaultController extends Controller {

    protected function beforeAction() {
//        echo "csrf token: " . $_SESSION[ 'hipersia_csrf' ] . "<br>";

    }

    public function index( Request $request, Response $response, $args) {

        echo 'You have called ' . $args['uri'];

        return $response;
    }

    public function welcome( Request $request, Response $response) {

        echo 'Welcome!';

        return $response;
    }

    public function cow( Request $request, Response $response) {

        echo 'You have called Yek Action E Dust Dashtani Va Gaav';

        return $response;
    }

    public function testView( Request $request, Response $response) {

        if(!empty($_POST)) {
            print_r($_POST);
            die;
        }

        AssetBundle::registerJs('jquery', '/home/amir/public_html/mvc-app-base/views/js/jquery-2.1.4.js');
        AssetBundle::registerJs('jquery2', '/home/amir/public_html/mvc-app-base/views/js/jquery-2.1.4.js');
        AssetBundle::registerJs('jquery3', '/home/amir/public_html/mvc-app-base/views/js/jquery-2.1.4.js');
        AssetBundle::registerCss('test', '/home/amir/public_html/mvc-app-base/views/css/test.css');

        $name = "Amir";

        return $this->render('test-view', ['name' => $name]);
    }
}