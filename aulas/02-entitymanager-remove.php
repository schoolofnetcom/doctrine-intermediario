<?php

require_once __DIR__ .'/vendor/autoload.php';

require_once __DIR__ .'/src/doctrine.php';

$entityManager = getEntityManager();


$category = $entityManager->find('SON\Entity\Category',1);

//var_dump($entityManager->getUnitOfWork()->getEntityState($category));

$entityManager->remove($category);
//$entityManager->remove($outraEntity);
var_dump($entityManager->getUnitOfWork()->getEntityState($category));

$entityManager->flush();
