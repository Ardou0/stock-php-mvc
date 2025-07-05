<?php

if (isset($_SERVER['MYSQL_HOST']) and isset($_SERVER['MYSQL_USER']) and isset($_SERVER['MYSQL_PASSWORD']) and isset($_SERVER['MYSQL_DB'])) {
    return [
        'host' => $_SERVER['MYSQL_HOST'],
        'dbname' => $_SERVER['MYSQL_DB'],
        'username' => $_SERVER['MYSQL_USER'],
        'password' => $_SERVER['MYSQL_PASSWORD'],
        'charset' => 'utf8mb4'
    ];
} else {
    return [
        'host' => 'localhost',
        'dbname' => 'db',
        'username' => 'user',
        'password' => 'password',
        'charset' => 'utf8mb4'
    ];
}
