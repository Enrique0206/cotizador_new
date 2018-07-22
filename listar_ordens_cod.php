<?php
//var_dump($_POST);
require_once './autoload.php';

try{   
    $orden = new Orden();	
    $orden->numero_cot = $_POST['numero'];
    $orden->factory_id= $_POST['empresa'];   	
    
    OrdensDAO::registrar($orden);
    
    Flash::success('Registro guardado');
    
    header('location:listado_ordens.php');
        
} catch (Exception $ex) {
    die('Error: '  . $ex->getMessage());
}