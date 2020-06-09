<?php

require_once dirname(__DIR__) . '/config/init.php';

$query  = $_SERVER['REQUEST_URI'];

$router = new \fornet\Router();