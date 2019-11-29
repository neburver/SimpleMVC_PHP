<?php
use League\Plates\Engine;
use Psr\Container\ContainerInterface;
use PDO;

return [
    'view_path' => 'src/View',
    Engine::class => function(ContainerInterface $c) {
        return new Engine($c->get('view_path'));
    },
    'dsn' => 'mysql:host=localhost;dbname=NewsProject',
    'username' => 'root',
    'password' => '26Marzo1983',
    PDO::class => function(ContainerInterface $c) {
        return new PDO($c->get('dsn'), $c->get('username'), $c->get('password'));
    }
];
