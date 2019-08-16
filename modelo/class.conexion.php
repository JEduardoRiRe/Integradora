<?php
	class Conexion_proveedor{
		public function get_conexion(){
			$user="root";
			$password="";
			$host="localhost";
			$db="conker";

			$conexion=new pdo("mysql:host=$host;dbname=$db;",$user,$password);
			return $conexion;

		}
	}
?>