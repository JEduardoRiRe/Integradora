<?php

require_once ('../modelo/class.conexion.php');
require_once ('../modelo/class.consultas.php');

$mensaje = null;

// validar con php
$Nombre = $_POST['Nombre'];
$Telefono = $_POST['Telefono'];

$consultas = new Consultas_proveedor();
$mensaje = $consultas -> insertarProveedor($Nombre, $Telefono);

echo $mensaje;

?>