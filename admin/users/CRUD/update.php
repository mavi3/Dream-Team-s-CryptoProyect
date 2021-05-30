<?php
include $_SERVER['DOCUMENT_ROOT'].'/db_config.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';
$nombre = isset($_POST['name']) ? $_POST['name'] : '';
$apellido = isset($_POST['surname']) ? $_POST['surname'] : '';
$correo = isset($_POST['email']) ? $_POST['email'] : '';
$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : '';
$pais = isset($_POST['country']) ? $_POST['country'] : '';

$consulta = "UPDATE 
INTO usuario(nombre, apellido, correo, contraseña, pais = (SELECT cod_pais FROM pais where pais.nombre= 'Chile') 
WHERE
	id = 3;"
pg_close($dbconn);

?>