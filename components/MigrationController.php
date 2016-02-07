<?php
/**
 * Created by PhpStorm.
 * User: Amir Hossein Babaeian
 * Date: 12/28/15
 * Time: 3:53 PM
 */
namespace Component;

use Component\Helper;

class MigrationController extends Controller
{
    protected function migrate($entityName) {
        $mapper = \Hipersia::$app->db->getMapper();
        $mapper->migrate();
        echo 'OK!';
    }

}