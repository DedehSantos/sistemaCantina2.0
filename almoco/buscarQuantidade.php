<?php include_once "../conexao/conectarOutroBanco.php"; ?>

<?php
//determina a data e a hora
$unixTime = time();
$timeZone = new \DateTimeZone('America/Sao_Paulo');
$time = new \DateTime();
$time->setTimestamp($unixTime)->setTimezone($timeZone);
$formattedTime = $time->format('d/m/Y H:i:s');
$datadehoje =  $time->format('Y-m-d');

// seleciona no banco de dados todos os registros realizado no dia
$sql = " SELECT * FROM tb_registro_entrada WHERE data_entrada  =  DATE(NOW())";
$result = mysqli_query($conn, $sql);
$conta = mysqli_num_rows($result);
while ($linha = mysqli_fetch_array($result)) {
  $matricula = $linha['matricula'];
  $nome = $linha['nome'];
  $turma = $linha['turma'];
  $curso = $linha['curso'];
  $data_entrada = $linha['data_entrada'];
}

?>
<!doctype html>
<html lang="pt-br">

<head>
  <title>quantidade de alunos</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="imagem/png" href="../img/logo2.png" />
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="..css/stylesIndex.css">
  <!-- Bootstrap CSS -->
</head>

<body>
  <div>
    <a href="index.php">
      <button class="btn btn-danger btn-voltar"> VOLTAR</button>
    </a>
  </div>
  <div class="quantidadeDeAlunos">
    <h1>Hoje entraram <spam> <?php echo $conta ?></spam> alunos com o crachá</h1>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>