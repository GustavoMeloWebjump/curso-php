<?php

spl_autoload_register(function ($namespaceRoot) {
    if (mb_strpos($namespaceRoot, 'Alura\\Banco') !== false) {
        $rootPath = str_replace('Alura\\Banco', 'classes', $namespaceRoot);
    } else {
        $rootPath = str_replace('Alura\\IFace', 'interfaces', $namespaceRoot);
    }
   
    $rootPath = str_replace('\\', DIRECTORY_SEPARATOR, $rootPath);
    $rootPath = str_replace('Model', 'model', $rootPath);
    $rootPath = str_replace('Accounts', 'accounts', $rootPath);
    $rootPath = str_replace('Controller', 'controllers', $rootPath);
    $rootPath = str_replace('Offices', 'offices', $rootPath);
    $rootPath = str_replace('Exceptions', 'exceptions', $rootPath);
    $rootPath .= '.php';

    if(file_exists($rootPath)) {
        require $rootPath;
    }
});
