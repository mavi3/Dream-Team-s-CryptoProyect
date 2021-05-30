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
        echo "izi <br /><br />";
        header("refresh:5;url=log-in.html");
        echo 'Tu cuenta ha sido creada, serás redireccionado en 5 segundos para que puedas logearte. Si no quieres esperar, haz click <a href="../index.html">aquí</a>.';
    }else{
        echo "nope <br /><br />";
        header("refresh:5;url=sign-up.html");
        echo "BAD ENDING Inténtalo nuevamente.";
    }

    
 
}
pg_close($dbconn)

?>