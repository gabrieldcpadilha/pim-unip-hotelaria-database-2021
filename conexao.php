<?php

$hostname = "127.0.0.1";
$usuario = "root";
$senha = "";
$bancoDados = "gestao_hotel";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancoDados);
if($mysqli->connect_errno){
    echo "falha ao conectar: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
}
else
    echo "conectado";
?>