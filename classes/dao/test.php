<?php
require_once '../common/Constantes.php';
require_once '../common/Conexion.php';

require_once 'FactorysDAO.php';
require_once '../dto/Factory.php';
require_once 'OrdensDAO.php';
require_once '../dto/Orden.php';

//$lista = FactorysDAO::listar();

//var_dump($lista);

/*$factory = new Factory();

$factory->nombre = 'los cisnes';
$factory->direccion = 'las malvinas';
$factory->telefono = 125365447;


FactorysDAO::registrar($factory);

echo 'producto registrado';*/

/*$producto = FactorysDAO::obtener(4);

var_dump($producto);*/

/*$lista = OrdensDAO::listar();

var_dump($lista);*/


/*$orden = OrdensDAO::obtener(9);

var_dump($orden);*/

$orden = new Orden();	
	$orden->id = 9;
	$orden->numero_cot = 10;
    $orden->factory_id= 2; 
	
	OrdensDAO::actualizar($orden);
	
	echo 'producto actualizado';

