<?php
session_start();
include_once "./conexao/conexao.php";
?>
<!doctype html>
<html lang="pt-br">

<head>
  <title>GERAR PLANILHA</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="imagem/png" href="./img/logo2.png" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <?php
  // Definimos o nome do arquivo que será exportado
  $arquivo = 'planilha_entrada.xls';
  // Criamos uma tabela HTML com o formato da planilha
  $html = '';
  $html .= '<table border="1">';
  $html .= '<tr>';
  $html .= '<td colspan="6"> PLANILHA ENTRADAS DOS ALUNOS</tr>';
  $html .= '</tr>';

  // cria tabela no excel
  $html .= '<tr>';
  $html .= '<td><b>id</b></td>';
  $html .= '<td><b>matricula</b></td>';
  $html .= '<td><b>nome</b></td>';
  $html .= '<td><b>turma</b></td>';
  $html .= '<td><b>curso</b></td>';
  $html .= '<td><b>data_entrada</b></td>';
  $html .= '</tr>';

  //Selecionar todos os itens da tabela 
  $result_msg_contatos = "SELECT * FROM tb_registro_entrada";
  $resultado_msg_contatos = mysqli_query($conn, $result_msg_contatos);

  while ($row_msg_contatos = mysqli_fetch_assoc($resultado_msg_contatos)) {
    $html .= '<tr>';
    $html .= '<td>' . $row_msg_contatos["id"] . '</td>';
    $html .= '<td>' . $row_msg_contatos["matricula"] . '</td>';
    $html .= '<td>' . $row_msg_contatos["nome"] . '</td>';
    $html .= '<td>' . $row_msg_contatos["turma"] . '</td>';
    $html .= '<td>' . $row_msg_contatos["curso"] . '</td>';
    $html .= '<td>' . $row_msg_contatos["data_entrada"] . '</td>';

    $html .= '</tr>';;
  }
  // Configurações header para forçar o download
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
  header("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache");
  header("Content-type: application/x-msexcel");
  header("Content-Disposition: attachment; filename=\"{$arquivo}\"");
  header("Content-Description: PHP Generated Data");
  // Envia o conteúdo do arquivo
  echo $html;
  exit; ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>