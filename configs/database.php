<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once __DIR__."/../library/database/vendor/autoload.php";

$isDevMode=true;

$config=Setup::createAnnotationMetadataConfiguration(array(__DIR__."/../entity"),$isDevMode);
$sqliteDB= __DIR__ . '/../data/database/data.db';
$conn=[
    'driver' => 'pdo_sqlite',
    'path' => $sqliteDB,
];
$em=EntityManager::create($conn,$config);