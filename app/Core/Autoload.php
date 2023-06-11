<?php 

    spl_autoload_register(function ($class) {
        $class = str_replace('\\', '/', $class);
        if (file_exists("{$class}.php")) { require_once "{$class}.php"; } else {
            echo "No existe el archivo {$class}.php";
        }
    });