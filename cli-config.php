<?php

require_once __DIR__ . '/src/doctrine.php';
//require_once __DIR__ . '/src/doctrine-xml.php';
//require_once __DIR__ . '/src/doctrine-yml.php';

$entityManager = getEntityManager();

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);