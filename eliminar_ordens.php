<?php
require_once './autoload.php';
try {
    
    $id = $_GET['id'];    
    
    OrdensDAO::eliminar($id); // le damos el parametro a eliminar
	
    Flash::success('Orden eliminado satisfactoriamente');//aviso de cambio de estado
    
    header('location:listado_ordens.php');//se redirecciona una vez actualizado
    
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}
