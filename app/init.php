<?php

spl_autoload_register(function ($class) {
    require_once __DIR__ . '/core/' . $class . '.php';
});

spl_autoload_register(function ($class) {
    require_once __DIR__ . '/config/' . $class . '.php';
});