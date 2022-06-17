<?php

$servidor = "localhost";
$dbusuario = "root";
$dbsenha = "";
//inserir o nome do banco de dados
$dbname = "cantina2";
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
mysqli_set_charset($conn,  'utf8');
if ($conn) {
    // echo "Coxexão OK";
} else {
    echo "Conexão com o banco Falhou";
}
