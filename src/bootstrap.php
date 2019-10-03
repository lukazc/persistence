<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

// Doctrine autoloader
require_once __DIR__.'/../vendor/autoload.php';
// config
require_once __DIR__.'/../config/config.php';

$entitiesPath = array(__DIR__ . '/Blog/Entity');
$config = Setup::createAnnotationMetadataConfiguration($entitiesPath, $dev);
$entityManager = EntityManager::create($dbParams, $config);