<?php

require_once __DIR__ .'/vendor/autoload.php';

require_once __DIR__ .'/src/doctrine.php';

$entityManager = getEntityManager();


/*$category = new \SON\Entity\Category();
$category->setName("Categoria usando merge");

$post = new \SON\Entity\Post();
$post->setTitle('titulo')
    ->setContent('content');

$post->addCategory($category);

$entityManager->persist($category);
$entityManager->persist($post);

$entityManager->flush();

$category = $entityManager->find('SON\\Entity\\Category',1);
$category->setName("Categoria usando merge");

$post = new \SON\Entity\Post();
$post->setTitle('titulo')
    ->setContent('content');

$post->addCategory($category);

$entityManager->persist($post);

$entityManager->flush();*/

$category1 = new \SON\Entity\Category();
$category1->setName("Categoria usando merge");

$post1 = new \SON\Entity\Post();
$post1->setTitle('titulo')
    ->setContent('content');
$post1->addCategory($category1);

$category2 = new \SON\Entity\Category();
$category2->setName("Categoria usando merge");

$post2 = new \SON\Entity\Post();
$post2->setTitle('titulo')
    ->setContent('content');
$category2->addPost($post2);

$entityManager->persist($category1);
$entityManager->persist($category2);
$entityManager->persist($post1);
$entityManager->persist($post2);

$entityManager->flush();

var_dump($category1->getPosts()->count());
var_dump($category2->getPosts()->count());
var_dump($post1->getCategories()->count());
var_dump($post2->getCategories()->count());