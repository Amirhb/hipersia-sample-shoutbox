<?php
/**
 * Created by PhpStorm.
 * User: Amir Hossein Babaeian
 * Date: 1/2/16
 * Time: 3:13 PM
 */

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();