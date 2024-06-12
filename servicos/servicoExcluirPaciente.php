<?php

require './conexao.php';
$idMedico = filter_input(INPUT_POST, 'idPaciente', FILTER_DEFAULT);

$query = "Select * from pacientes where idPaciente=$idMedico";

$query = mysqli_query($conexao, $query);

$contagem = mysqli_num_rows($query);

if ($contagem > 0) {
    $query = "DELETE FROM pacientes WHERE idPaciente=$idMedico";
    mysqli_query($conexao, $query);

    $query = "Select * from pacientes where idPaciente=$idMedico";

    $query = mysqli_query($conexao, $query);

    $contagem = mysqli_num_rows($query);

    if ($contagem == 0) {
        header("Location: http://localhost/clinica/home.php?pagina=8&mensagem=1");
    } else if ($contagem > 0) {
        header("Location: http://localhost/clinica/home.php?pagina=8&mensagem=2");
    }
} else {
    header("Location: http://localhost/clinica/home.php?pagina=8&mensagem=3");
}
 
 
 






