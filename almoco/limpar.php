<?php include_once "../conexao/conexao.php"; ?>
<?php
   $delete = "DELETE FROM alunos_que_ja_comeu";
   $resuldato = mysqli_query($conn, $delete);
   header("location: index.php");
   mysqli_close($conn);
?>
