<!doctype html>
<html lang="PT_BR">

<head>
  <title>REPETECO</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="imagem/png" href="../img/logo2.png" />
  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/stylesIndexTresTelas.css">
</head>

<body>
  <div class="btn-group">
    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      MENU
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="../index.php">INÍCIO</a>
      <div class="dropdown-divider">
      </div>
      <a class="dropdown-item " href="../almoco/index.php">ALMOÇO</a>
      <a class="dropdown-item " href="../lancheTarde/index.php">LANCHE DA TARDE</a>
    </div>
  </div>

  <div class="geral">
    <img src="../img/logo2.png" width="350px" height="300px">
    <form action="buscar_aluno.php" method="GET" class="form-group ">
      <input id="inputEntrada" class="form-control" name="busca"  placeholder="MATRÍCULA" autofocus required>
      <button type="submit" class="btn btn-success">CONFIRMAR LANCHE DA MANHÃ</button>
    </form>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>