<?php
/* Este archivo debe manejar la lógica de obtener los datos de todos los usuarios */
$consulta = pg_query($dbconn, "SELECT id, nombre, apellido, correo FROM usuario");
/* Comprobar la consulta */
if(!$consulta){
    echo "Error al realizar la consulta.\n";

}else{
    while($fila = pg_fetch_row($consulta)){
        echo '<tr>';
        echo '<td>'. $fila[0]. '</td>';
        echo '<td>'. $fila[1]. '</td>';
        echo '<td>'. $fila[2]. '</td>';
        echo '<td>'. $fila[3]. '</td>';
        echo '<td><a href="/admin/users/read.html?id='.$fila[0].'" class="btn btn-primary">Ver <i
                            class="fas fa-search"></i></a>
                    <a href="/admin/users/update.html?id='.$fila[0].'" class="btn btn-warning">Editar <i
                            class="fas fa-edit"></i></a>
                    <a href="/admin/users/CRUD/delete.php?id='.$fila[0].'" class="btn btn-danger">Borrar <i
                            class="fas fa-trash-alt"></i></a>
                    </td>';

        echo '</tr>';
    }
}
pg_close($dbconn);
?>