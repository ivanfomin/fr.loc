<?php
declare(strict_types=1);


require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/init.php';

$app = new \PHPFramework\Application();
require_once CONFIG . '/routes.php';

dump($app->request->get('page'));
dump($app->request->get('qweq', 123));

$app->run();


