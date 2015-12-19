<?php
/**
 * Created by PhpStorm.
 * User: Amir Hossein Babaeian
 * Date: 12/19/15
 * Time: 2:36 PM
 */
// cli-config.php
require_once "bootstrap.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);