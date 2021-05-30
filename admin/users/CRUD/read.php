<?php
/* Este archivo debe manejar la lógica de obtener los datos de un determinado usuario */
$id = $_GET['id'];

$consulta = pg_query($dbconn,"SELECT id, usuario.nombre, apellido, correo, pais.nombre, fecha_registro FROM usuario INNER JOIN pais ON usuario.pais = pais.cod_pais WHERE id=".$id);
$fila = pg_fetch_row($consulta);
echo "<p>ID: ". $fila[0]." </p>";
echo "<p>Nombre: ". $fila[1]." </p>";
echo "<p>Apellido: ". $fila[2]." </p>";
echo "<p>Correo: ". $fila[3]." </p>";
echo "<p>País: ". $fila[4]." </p>";
echo "<p>Fecha de Ingreso: ". $fila[5]." </p>";

pg_close($dbconn);
?>