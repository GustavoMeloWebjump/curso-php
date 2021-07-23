<?php

spl_autoload_register(function ($namespace){
    $path = str_replace('Desafio', 'classes', $namespace);
    $path = str_replace('Models', 'models', $path);
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $path);
    $path = str_replace('Exceptions', 'exceptions', $path);
    $path .= '.php';

    if (file_exists($path)) {
        require $path;
    }
});
