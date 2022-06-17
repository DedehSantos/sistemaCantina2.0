<?php include_once "../conexao/conexao.php"; ?>
<?php
$busca = $_GET['busca'];
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
mysqli_set_charset($conn, 'utf8');
//inserir o nome da tabela onde esta tblista_de_alunos e onde tem matricula, inserir o nome do que quer buscar                   
$sql = " SELECT * FROM lista_de_alunos_2022 WHERE matricula = '$busca' ";
$result = mysqli_query($conn, $sql);
$conta = mysqli_num_rows($result);
while ($linha = mysqli_fetch_array($result)) {
  $matricula = $linha['matricula'];
  $nome = $linha['nome'];
  $turma = $linha['turma'];
  $curso = $linha['curso'];
}

if ($conn) {
  //echo 'conexao ok';
} else {
  echo 'conexao falhou';
}

$unixTime = time();
$timeZone = new \DateTimeZone('America/Sao_Paulo');

$time = new \DateTime();
$time->setTimestamp($unixTime)->setTimezone($timeZone);

$hora_que_comeu_tarde = $time->format(' H:i:s');
$data_que_comeu_tarde =  $time->format('Y/m/d ');
?>

<!doctype html>
<html lang="pt-br">

<head>
  <title> CONFIRMAÇÃO</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="icon" type="imagem/png" href="../img/logo2.png" />
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.busca.css">
</head>

<body>
  <div class="container">
    <h1>CONFIRMAÇÃO OS DADOS DO ALUNO</h1>
    <form class="form group d-flex justify-content-center flex-column col-6" method="POST" action="enviar_para_banco.php" class="">
      <label for="">NOME DO ALUNO</label>
      <input class="form input_nome form-control" type="text" value="<?php echo  $nome; ?>" name="nome">
      <label for="">MATRÍCULA</label>
      <input type="text" class="form-control" value="<?php echo  $matricula; ?>" name="matricula">
      <label for="">TURMA</label>
      <input type="text" class="form-control" value="<?php echo  $turma; ?>" name="turma">
      <label for="">CURSO</label>
      <input type="text" class="form-control" value="<?php echo  $curso; ?>" name="curso">

      <input type="text" class="form-control" name="data_que_comeu_tarde" value="<?php echo $data_que_comeu_tarde; ?>" hidden>
      <input type="text" class="form-control" name="hora_que_comeu_tarde" value="<?php echo $hora_que_comeu_tarde; ?>" hidden>

      <button type="submit" href="index.php" class="btn btn-primary" autofocus>CONFIRMAR</button>
    </form>


    <?php

    $sql = " SELECT * FROM alunos_que_ja_comeu_tarde WHERE matricula = '$matricula' AND data_que_comeu_tarde  =  DATE(NOW()) ";
    $result = mysqli_query($conn, $sql);
    $conta = mysqli_num_rows($result);
    while ($linha = mysqli_fetch_array($result)) {
      $matricula = $linha['matricula'];
      $nome = $linha['nome'];
      $turma = $linha['turma'];
      $curso = $linha['curso'];
      $hora_que_comeu_tarde = $linha['horario'];
    }

    // verifica se ja existe registro no banco de dados
    if ($conta == 0) {
      $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
      mysqli_set_charset($conn, "utf8");
      $sql = "INSERT INTO  alunos_que_ja_comeu_tarde (matricula, nome, turma, curso, data_que_comeu_tarde,  hora_que_comeu_tarde) VALUES('$matricula', '$nome', '$turma', '$curso', '$data_que_comeu_tarde','$hora_que_comeu_tarde' )";

      if (mysqli_query($conn, $sql)) {
        header("Refresh: 2;url=index.php");
      } else {
        echo "Deu Erro " . $sql . "<br>" . mysqli_error($conn);
      }
    } else {
      header("location: tela_de_repeteco.php");
    }

    if ($turma = "") {
      header("location: alunoNaoExiste.php");
    }

    ?>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>