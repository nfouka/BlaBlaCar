<?php



use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

$container = new ContainerBuilder();
$loader1 = new XmlFileLoader($container,  new FileLocator(__DIR__."/conf"));
$loader2 = new YamlFileLoader($container, new FileLocator(__DIR__."/conf"));
$loader1->load('services.xml');
$loader2->load('parameters.yml');



