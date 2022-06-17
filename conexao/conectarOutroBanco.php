<?php

$servidor = "ftpupload.net";
$dbusuario = "epiz_31682226";
$dbsenha = "6DAyAzxYhPR";
//inserir o nome do banco de dados
$dbname = "portaria";
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
mysqli_set_charset($conn,  'utf8');
if ($conn) {
    // echo "Coxexão OK";
} else {
    echo "Conexão com o banco Falhou";
}
