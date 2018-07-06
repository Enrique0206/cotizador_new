<?php

class FactorysDAO{
	
	public static function listar(){
		$con = Conexion::getConexion();
		$sql = "select id, nombre, direccion, telefono 
				from factory";
		$stmt = $con->prepare($sql);
		$stmt->execute();
		
		$lista = [];
		while($registro = $stmt->fetchObject('Factory')){
			$lista[] = $registro;
		}
		return $lista;
	}
	
	public static function registrar($factory){
		
		$con = Conexion::getConexion();
		
		$sql = "insert into factory (nombre, direccion, telefono)
				values (:nombre, :direccion, :telefono)";
		
		$stmt = $con->prepare($sql);		
		$stmt->bindParam(':nombre', $factory->nombre);
		$stmt->bindParam(':direccion', $factory->direccion);
		$stmt->bindParam(':telefono', $factory->telefono);
		$stmt->execute();		
	}
	
	public static function obtener($id) {
        
        $con = Conexion::getConexion();
        
        $sql = "select id, nombre, direccion, telefono 
				from factory
				where id = :id";
        
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        
        if($registro = $stmt->fetchObject('Factory')){
            return $registro;
        }
        
        return NULL;
    }
	
	public static function actualizar($factory) {       
            
            $sql = "update factory set nombre= :nombre, direccion= :direccion, telefono = :telefono					
                   where id = :id";
            
            $pdo = Conexion::getConexion();
            $stmt = $pdo->prepare($sql);
			$stmt->bindParam(':id', $factory->id);
            $stmt->bindParam(':nombre', $factory->nombre);
            $stmt->bindParam(':direccion', $factory->direccion);
            $stmt->bindParam(':telefono', $factory->telefono);            
            $stmt->execute();       
    }
	
	public static function eliminar($id){
		
		$con = Conexion::getConexion();
		
		$sql = "delete from factory where id = :id";
		
		$stmt = $con->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->execute();		
		}
	
	
}
