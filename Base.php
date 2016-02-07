<?php
/**
 * Created by PhpStorm.
 * User: Amir Hossein Babaeian
 * Date: 1/3/16
 * Time: 1:46 PM
 */

class Base {

    /** @var  $db Locator*/
    public $db;

    public function __construct() {
        $cfg = new \Spot\Config();
        // MySQL
        $cfg->addConnection('mysql', 'mysql://root:123@localhost/hipersia');
        //$cfg->addConnection('mysql', 'mysql://user:password@localhost/database_name');
        // Sqlite
        //$cfg->addConnection('sqlite', 'sqlite://path/to/database.sqlite');
        $spot = new \Spot\Locator($cfg);
        $this->db = $spot;
    }

}