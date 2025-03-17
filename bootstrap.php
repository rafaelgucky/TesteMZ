<?php
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

//doctrine/collections = 2.2.2

require_once "vendor/autoload.php";

//use Doctrine\ORM\Tools\Setup;
//use Doctrine\ORM\EntityManager;

$paths = [__DIR__ . "\\App\\Models"];
$isDevMode = true;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'agenda',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);
?>