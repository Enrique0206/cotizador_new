<?php
spl_autoload_register(function ($class) {
    
    $dirs = array(
        'dto',     // Objetos de transferencia de datos
        'dao',     // Objetos de acceso a datos
        'common',  // Clases utiles
    );
    
    foreach($dirs as $dir) {
        $filename = "classes/$dir/$class.php";
        if (file_exists($filename)) {
            require_once($filename);
            return;
        }
    }

});

date_default_timezone_set('America/Lima');

session_start(); //Identifica y recupera la sesión