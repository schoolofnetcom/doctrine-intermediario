<?php

$paths = [
    __DIR__ . '/../mappings/yml'
];

$isDevMode = true;

$dbParams = [
    'driver' => 'pdo_mysql',
    'user' => 'root',
    'password' => 'root',
    'dbname' => 'son_doctrine_inter_curso'
];

$config = \Doctrine\ORM\Tools\Setup::createYAMLMetadataConfiguration($paths,$isDevMode);
$entityManager = \Doctrine\ORM\EntityManager::create($dbParams,$config);

function getEntityManager(){
    global $entityManager;
    return $entityManager;
}