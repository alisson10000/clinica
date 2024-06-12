<?php

require './conexao.php';
$idMedico = filter_input(INPUT_POST, 'idMedico', FILTER_DEFAULT);

$query = "Select * from medicos where idMedico=$idMedico";

$query = mysqli_query($conexao, $query);

$contagem = mysqli_num_rows($query);

if ($contagem > 0) {
    $query = "DELETE FROM medicos WHERE idMedico=$idMedico";
    mysqli_query($conexao, $query);

    $query = "Select * from medicos where idMedico=$idMedico";

    $query = mysqli_query($conexao, $query);

   echo $contagem = mysqli_num_rows($query);

    if ($contagem == 0 || $contagem == null) {
        header("Location: http://localhost/clinica/home.php?pagina=4&mensagem=1");
    } else if ($contagem > 0) {
        header("Location: http://localhost/clinica/home.php?pagina=4&mensagem=2");
    }
} else {
    header("Location: http://localhost/clinica/home.php?pagina=4&mensagem=3");
}
 
 
 






