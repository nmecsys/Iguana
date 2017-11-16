<?php
// Database configuration 
// Informacoes de acess
$settings = array(
  'driver'    => 'mysql',
  'host'      => '200.20.164.178',
  'database'  => 'classificador',
  'username'  => 'angelBolado',
  'password'  => '123123',
  'charset'   => 'utf8',
  'collation' => 'utf8_unicode_ci',
  'prefix'    => ''
);

use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection( $settings );
$capsule->bootEloquent();
