<?php
require './conexao.php';
$idMedico = $_GET['idMedico'];
$query = "select * from medicos where idMedico=$idMedico";

$query = mysqli_query($conexao, $query);

echo $contagem = mysqli_num_rows($query);


if($contagem < 1){
     header("Location: http://localhost/clinica/home.php?pagina=3&mensagem=2");
}elseif ($contagem > 0) {
      header("Location: http://localhost/clinica/home.php?pagina=3&mensagem=1&idMedico= $idMedico");
}
