<?php
require './conexao.php';
$idDependente = $_GET['idDependente'];
$query = "select * from dependentes where idDependente=$idDependente";

$query = mysqli_query($conexao, $query);

echo $contagem = mysqli_num_rows($query);


if($contagem < 1){
     header("Location: http://localhost/clinica/home.php?pagina=11&mensagem=2");
}elseif ($contagem > 0) {
      header("Location: http://localhost/clinica/home.php?pagina=11&mensagem=1&idDependente= $idDependente");
}
