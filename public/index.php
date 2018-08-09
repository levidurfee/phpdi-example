<?php

require '../vendor/autoload.php';

$builder = new \DI\ContainerBuilder();
$builder->addDefinitions('../config.php');
$container = $builder->build();

$app = new Example\Application($container, $container);

$app->run();

echo 'ran';
