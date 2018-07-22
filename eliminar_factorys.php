<?php
require_once './autoload.php';
try {
    
    $id = $_GET['id'];    
    
    FactorysDAO::eliminar($id); // le damos el parametro a eliminar
	
    Flash::success('Producto eliminado satisfactoriamente');//aviso de cambio de estado
    
    header('location:listado_factorys.php');//se redirecciona una vez actualizado
    
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}