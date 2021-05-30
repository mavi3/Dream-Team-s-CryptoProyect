<?php
include $_SERVER['DOCUMENT_ROOT'].'/db_config.php';
if(!isset($_SESSION['user'])){
    header("Location: ../../index.html" );
}

$idt = $_SESSION["id"];
$result = pg_query($dbconn,'SELECT admin FROM usuario WHERE id='.$idt);
$row = pg_fetch_array($result);

if($row["admin"] == 'f'){
    header("Location: ../../index.html" );
}
?>