<?php

class OrdensDAO {
	
	public static function listar () {
		$con = Conexion::getConexion();
		$sql = "select o.id, numero_cot, f.nombre as empresa_nombre, creado
				from orden o
				inner join factory f on f.id=o.factory_id";
		$stmt = $con->prepare($sql);
		$stmt->execute();
				
		$lista = [];
		while($registro = $stmt->fetchObject('Orden')){
			$lista[] = $registro;
		}
		return $lista;
	}
	
	public static function registrar($orden){
		
		$con = Conexion::getConexion();
		
		$sql = "insert into orden (numero_cot, factory_id)
				values (:numero_cot, :factory_id)";
		
		$stmt = $con->prepare($sql);		
		$stmt->bindParam(':numero_cot', $orden->numero_cot);
		$stmt->bindParam(':factory_id', $orden->factory_id);		
		$stmt->execute();		
	}
	
	public static function obtener($id) {
        
        $con = Conexion::getConexion();
        
        /*$sql = "select o.id, numero_cot, f.nombre as empresa_nombre
				from orden o
				inner join factory f on f.id=o.factory_id
				where o.id = :id";*/
		
		$sql = "select id, numero_cot, factory_id
				from orden				
				where id = :id";
		
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        
        if($registro = $stmt->fetchObject('Orden')){
            return $registro;
        }
        
        return NULL;
    }
	
	public static function actualizar($orden) {       
            
            $sql = "update orden set numero_cot= :numero_cot, factory_id= :factory_id				
                   where id = :id";
            
            $pdo = Conexion::getConexion();
            $stmt = $pdo->prepare($sql);
			$stmt->bindParam(':id', $orden->id);
            $stmt->bindParam(':numero_cot', $orden->numero_cot);
            $stmt->bindParam(':factory_id', $orden->factory_id);                      
            $stmt->execute();       
    }
	
	public static function eliminar($id){
		
		$con = Conexion::getConexion();
		
		$sql = "delete from orden where id = :id";
		
		$stmt = $con->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->execute();		
		}
}