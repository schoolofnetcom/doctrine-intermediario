<?php

require_once __DIR__ .'/vendor/autoload.php';

require_once __DIR__ .'/src/doctrine.php';

$entityManager = getEntityManager();


/* INSERT COM MERGE*/
/*$category = new \SON\Entity\Category();

$category->setName("Categoria usando merge");

$entityManager->merge($category);

$category->setName("Alterando após merge");

$entityManager->merge($category);
$entityManager->merge($category);

$entityManager->flush();*/

$category = $entityManager->find('SON\Entity\Category',1);

//var_dump($entityManager->getUnitOfWork()->getEntityState($category));
$entityManager->detach($category);

$category->setName('aaaa');

$entityManager->merge($category);

$entityManager->flush();

$category->setName('yyyyyyyy');

$entityManager->merge($category);

$entityManager->flush();

