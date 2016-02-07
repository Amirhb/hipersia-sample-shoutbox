<?php
/**
 * Created by PhpStorm.
 * User: Amir Hossein Babaeian
 * Date: 12/26/15
 * Time: 2:05 PM
 */
namespace App;

use Component\MigrationController as Migration;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class MigrationController extends Migration {

    public function index( Request $request, Response $response) {

        $this->migrate('Entity\Post');

        return $response;
    }
}