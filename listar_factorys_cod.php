<?php
//var_dump($_POST);
require_once './autoload.php';

try{   
    $factory = new Factory();
	
    $factory->nombre = $_POST['empresa'];
    $factory->direccion = $_POST['direccion'];    
	$factory->telefono = $_POST['telefono']; 
    
    FactorysDAO::registrar($factory);
    
    Flash::success('Registro guardado');
    
    header('location:listado_factory.php');
        
} catch (Exception $ex) {
    die('Error: '  . $ex->getMessage());
}