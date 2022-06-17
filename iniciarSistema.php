<!doctype html>
<html lang="pt-br">

<head>
  <title>REINICIAR SISTEMA</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="imagem/png" href="./img/logo2.png" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./lib/bootstrap.min.css">
  <link rel="stylesheet" href="css/stylesReset.css">

</head>

<body>
  <div>
    <a href="index.php">
      <button class="btn btn-danger btn-voltar"> VOLTAR</button>
    </a>

  </div>
  <div class="geral">
    <h1> REINICIAR O SISTEMA </h1>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
      reiniciar o sistema
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Deseja Reiniciar o sistema?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">cancelar</button>
            <a href="limpar.php">
              <button type="button" class="btn btn-primary">Reiniciar</button>
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>