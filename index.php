<?php
/**
 * Created by PhpStorm.
 * User: Amir Hossein Babaeian
 * Date: 12/19/15
 * Time: 4:29 PM
 */

class Index {

    public $a;
    public $b;

    public function __set($name, $value) {
        var_dump($name);
        var_dump($value);
        echo "test2\n";
//        $this->$name = $value;
    }
}

$obj = new Index;
$obj->a = "test";

echo "test\n";