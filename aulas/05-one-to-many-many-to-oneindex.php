<?php

require_once __DIR__ .'/vendor/autoload.php';

require_once __DIR__ .'/src/doctrine.php';

$entityManager = getEntityManager();

//$user = $entityManager->find('SON\\Entity\\User',1);
$user = new \SON\Entity\User();
$user->setName("Luiz Carlos")
    ->setEmail('luiz@schoolofnet.com');

/*$post = new \SON\Entity\Post();
$post->setTitle('titulo')
    ->setContent('content');

$post->setUser($user);

//$entityManager->persist($user);
$entityManager->persist($post);

$entityManager->flush();*/

$post = new \SON\Entity\Post();
$post->setTitle('titulo')
    ->setContent('content');

$post1 = new \SON\Entity\Post();
$post1->setTitle('titulo1111')
    ->setContent('content1111');

$user->addPost($post1)->addPost($post);
$entityManager->persist($user);

$entityManager->flush();

var_dump($user->getPosts()->count());
