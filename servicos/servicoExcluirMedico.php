<?php

require './conexao.php';
$idPaciente = filter_input(INPUT_POST, 'idMedico', FILTER_DEFAULT);

$query = "Select * from medicos where idMedico=$idPaciente";

$query = mysqli_query($conexao, $query);

$contagem = mysqli_num_rows($query);

if ($contagem > 0) {
    $query = "DELETE FROM medicos WHERE idMedico=$idPaciente";
    mysqli_query($conexao, $query);

    $query = "Select * from medicos where idMedico=$idPaciente";

    $query = mysqli_query($conexao, $query);

    $contagem = mysqli_num_rows($query);

    if ($contagem == 0) {
        header("Location: http://localhost/clinica/index.php?pagina=4&mensagem=1");
    } else if ($contagem > 0) {
        header("Location: http://localhost/clinica/index.php?pagina=4&mensagem=2");
    }
} else {
    header("Location: http://localhost/clinica/index.php?pagina=4&mensagem=3");
}
 
 
 






