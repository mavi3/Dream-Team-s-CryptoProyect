<?php
include $_SERVER['DOCUMENT_ROOT'].'/db_config.php';

echo $id = isset($_GET['id']) ? $_GET['id'] : '';
$consulta = "DELETE
FROM usuario
WHERE id = $1";

$enviar = pg_query_params($dbconn,$consulta ,array($id));
pg_close($dbconn);
header('Location: ../all.html');
?>