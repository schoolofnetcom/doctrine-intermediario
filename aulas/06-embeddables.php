<?php

require_once __DIR__ .'/vendor/autoload.php';

require_once __DIR__ .'/src/doctrine.php';

$entityManager = getEntityManager();

//$user = $entityManager->find('SON\\Entity\\User',1);
$user = new \SON\Entity\User();
$user->setName("Luiz Carlos")
    ->setEmail('luiz@schoolofnet.com');

$address = new \SON\Entity\Address();
$address->setStreet('Rua X')
    ->setCity('Cidade Y');

$user->setAddress($address);

$entityManager->persist($user);
$entityManager->flush();

$user->getAddress()->getCity();