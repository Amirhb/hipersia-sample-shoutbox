<?php
/**
 * Created by PhpStorm.
 * User: Amir Hossein Babaeian
 * Date: 12/28/15
 * Time: 3:18 PM
 */
$cfg = new \Spot\Config();
// MySQL
$cfg->addConnection('mysql', 'mysql://root:123@localhost/hipersia');
//$cfg->addConnection('mysql', 'mysql://user:password@localhost/database_name');
// Sqlite
//$cfg->addConnection('sqlite', 'sqlite://path/to/database.sqlite');
$spot = new \Spot\Locator($cfg);