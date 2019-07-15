<?php

$server = "localhost";
$user = "id10191281_pisolar";
$password = "pisolar.js";
$database = "id10191281_pisolar";

$connection = mysqli_connect($server, $user, $password, $database);

if(!$connection){
    echo "Não foi possivel conectar ao banco";
} else {
    echo "Está conectado";
}

?>