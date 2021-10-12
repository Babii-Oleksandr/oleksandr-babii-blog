<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

$containerBuilder = new \DI\ContainerBuilder();

try {
    $containerBuilder->addDefinitions('../config/di.php');
    $container = $containerBuilder->build();
    /** @var  \DVCampus\Framework\Http\RequestDispatcher */
    $requestDispatcher = $container->get(\DVCampus\Framework\Http\RequestDispatcher::class);
    $requestDispatcher->dispatch();
}catch (\Exception $e) {
    echo "{$e->getMessage()} in file {$e->getFile()} at line {$e->getLine()}";
    exit(1);
}
//
//$requestDispatcher = new \DVCampus\Framework\Http\RequestDispatcher([
//    new \DVCampus\Cms\Router(),
//    new \DVCampus\Blog\Router(),
//    new \DVCampus\ContactUs\Router(),
//]);
//$requestDispatcher->dispatch();
exit;

switch ($requestUri) {
    default:


        break;
}
