<?php
require './conexao.php';
$idMedico = $_GET['idMedico'];
$query = "select * from medicos where idMedico=$idMedico";

$query = mysqli_query($conexao, $query);

$contagem = mysqli_num_rows($query);


if($contagem < 1){
     header("Location: http://localhost/clinica/index.php?pagina=3&mensagem=2");
}