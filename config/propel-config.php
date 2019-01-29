<?php
$serviceContainer = \Propel\Runtime\Propel::getServiceContainer();
$serviceContainer->checkVersion('2.0.0-dev');
$serviceContainer->setAdapterClass('blogrodolfodb', 'mysql');
$manager = new \Propel\Runtime\Connection\ConnectionManagerSingle();
$manager->setConfiguration(array (
  'dsn' => 'mysql:host=172.17.0.2;dbname=blogrodolfodb',
  'user' => 'lara',
  'password' => 'Nodo1820*',
  'settings' =>
  array (
    'charset' => 'utf8',
    'queries' =>
    array (
    ),
  ),
  'classname' => '\\Propel\\Runtime\\Connection\\ConnectionWrapper',
  'model_paths' =>
  array (
    0 => 'src',
    1 => 'vendor',
  ),
));
$manager->setName('blogrodolfodb');
$serviceContainer->setConnectionManager('blogrodolfodb', $manager);
$serviceContainer->setDefaultDatasource('blogrodolfodb');
