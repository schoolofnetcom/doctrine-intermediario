<?php

require_once __DIR__ .'/vendor/autoload.php';

require_once __DIR__ .'/src/doctrine.php';

$entityManager = getEntityManager();

$category = new \SON\Entity\Category();

$category->setName("Minha primeira categoria");

//var_dump($entityManager->getUnitOfWork()->getEntityState($category));

$entityManager->persist($category); //insert ou update

//var_dump($entityManager->getUnitOfWork()->getEntityState($category));
$entityManager->flush();

$category->setName("Outro valor");

$entityManager->flush();

$category1 = new \SON\Entity\Category();
$category1->setName("Category 1");

$category2 = new \SON\Entity\Category();
$category2->setName("Category 2");

$category3 = new \SON\Entity\Category();
$category3->setName("Category 3");

$entityManager->persist($category1);
$entityManager->persist($category2);
$entityManager->persist($category3);

$entityManager->flush();
