<?php
include $_SERVER['DOCUMENT_ROOT'].'/db_config.php';
/* Este archivo debe manejar la lógica para obtener la información de la billetera */
$id = $_SESSION['id'];
$sql = "SELECT moneda.sigla, moneda.nombre, usuario_tiene_moneda.balance
        FROM usuario_tiene_moneda INNER JOIN moneda
        ON usuario_tiene_moneda.id_moneda = moneda.id
        WHERE id_usuario = $1";
$consulta = pg_query_params($dbconn, $sql,array($id));
/* Comprobar la consulta */

if(!$consulta){
    echo "Error al realizar la consulta.\n";

}else{
    while($fila = pg_fetch_row($consulta)){
        echo '<tr>';
        echo '<td>'. $fila[0]. '</td>';
        echo '<td>'. $fila[1]. '</td>';
        echo '<td>'. $fila[2]. '</td>';
        echo '</tr>';
    }
}
pg_close($dbconn);
?>