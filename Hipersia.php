<?php
/**
 * Created by PhpStorm.
 * User: Amir Hossein Babaeian
 * Date: 1/3/16
 * Time: 1:56 PM
 */

class Hipersia {

    /** @var  $app Base */
    public static $app;

    public function __construct() {
        if(!self::$app instanceof \Base)
            $this->app = new \Base();
    }
}