<?php
// Database configuration 
// Informacoes de acess
$settings = array(
  'driver'    => 'mysql',
  'host'      => '107.180.12.115',
  'database'  => 'classificador_de_noticias',
  'username'  => 'admin_classif',
  'password'  => '123123',
  'charset'   => 'utf8',
  'collation' => 'utf8_unicode_ci',
  'prefix'    => ''
);

use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection( $settings );
$capsule->bootEloquent();
