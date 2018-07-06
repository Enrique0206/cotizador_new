<?php
require_once '../common/Constantes.php';
require_once '../common/Conexion.php';
require_once 'FactorysDAO.php';
require_once '../dto/Factory.php';

//$lista = FactorysDAO::listar();

//var_dump($lista);

/*$factory = new Factory();

$factory->nombre = 'los cisnes';
$factory->direccion = 'las malvinas';
$factory->telefono = 125365447;


FactorysDAO::registrar($factory);

echo 'producto registrado';*/

$producto = FactorysDAO::obtener(4);

var_dump($producto);