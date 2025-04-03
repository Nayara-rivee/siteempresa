<?php

$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
    // if ($mysqli->connect_errno) {
    //     echo "falha ao conectar:(" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
    // }
    // else
    //     echo "Conectado ao Banco de Dados";