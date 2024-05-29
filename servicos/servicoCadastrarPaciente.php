<?php

require './conexao.php';

$nomePaciente = filter_input(INPUT_POST, 'nomePaciente', FILTER_DEFAULT);
$emailPaciente = filter_input(INPUT_POST, 'emailPaciente', FILTER_DEFAULT);
$nascimentoPaciente= filter_input(INPUT_POST, 'nascimentoPaciente', FILTER_DEFAULT);

$result = "select * from pacientes where nomePaciente = '$nomePaciente'
         and emailPaciente = '$emailPaciente' and   nascimentoPaciente = '$nascimentoPaciente';";

$result = mysqli_query($conexao, $result);

$contagemCadastro = mysqli_num_rows($result);

if ($contagemCadastro > 0) {
    
     header("Location: http://localhost/clinica/index.php?pagina=6&mensagem=3");
  
} else {


    $query = "INSERT INTO pacientes VALUES (null,'$nomePaciente','$nascimentoPaciente ','$emailPaciente')";

    mysqli_query($conexao, $query);

    $result = "select * from pacientes where nomePaciente = '$nomePaciente'
         and nascimentoPaciente = '$nascimentoPaciente' and   emailPaciente = '$emailPaciente';";

    $result = mysqli_query($conexao, $result);

    $contagemCadastro = mysqli_num_rows($result);

    if ($contagemCadastro > 0) {
        
        
         
        
        
      header("Location: http://localhost/clinica/index.php?pagina=6&mensagem=1");
    } else {
            header("Location: http://localhost/clinica/index.php?pagina=6&mensagem=2");
    }
}


















