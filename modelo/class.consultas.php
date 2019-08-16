<?php

class Consultas_proveedor{
	public function insertarProveedor($arg_Nombre, $arg_Telefono){
		$modelo = new Conexion_proveedor();
		$conexion = $modelo->get_conexion();
		$sql = "insert into proveedor(Nombre, Telefono) values(:Nombre, :Telefono)";
		$statement = $conexion->prepare($sql);
		//Pasando parametros
		$statement->bindparam(':Nombre', $arg_Nombre);
		$statement->bindparam(':Telefono', $arg_Telefono);

		//Ejecutando la consulta
		$statement->execute();
		return "Registro creado correctamente";
	}


	public function cargarProveedores(){
		$rows = null;
		$modelo = new Conexion_proveedor();
		$conexion = $modeo->get_conexion();
		$sql = "select * from proveedor";
		$statement = $conexion->prepare($sql);
		$statement->execute();
		while ($result = $statement->fetch()) {
			$rows[] = $result;
		}
		return $rows;
	}
}

?>