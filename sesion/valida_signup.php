<?php
/* Este archivo debe validar los datos de registro y manejar la lógica de crear un usuario desde el formulario de registro */
include $_SERVER['DOCUMENT_ROOT'].'/db_config.php';


$nombre = isset($_POST['name']) ? $_POST['name'] : '';
$apellido = isset($_POST['surname']) ? $_POST['surname'] : '';
$correo = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['pwd']) ? $_POST['pwd'] : '';
$password2 = isset($_POST['pwd2']) ? $_POST['pwd2'] : '';
$pais = isset($_POST['country']) ? $_POST['country'] : '';
echo $nombre;

if($password == $password2){
    
    $opciones = array('cost'=>12);
    $password = password_hash($password,PASSWORD_BCRYPT,$opciones);
    $consulta = "INSERT 
        INTO usuario(nombre,apellido,correo,contraseña,pais,fecha_registro,admin)
        VALUES(
            $1,
            $2,
            $3,
            $4,
            $5,
            (SELECT NOW()),
            false)";

    $envio = pg_query_params($dbconn, $consulta, array($nombre,$apellido,$correo,$password,$pais));
    if($envio){
        echo "izi";
    }else{
        echo "nope";
    }

    
 
}
pg_close($dbconn)

?>