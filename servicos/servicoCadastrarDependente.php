<?php

require './conexao.php';
$idPaciente = filter_input(INPUT_POST, 'idPaciente', FILTER_DEFAULT);
$nomeDependente = filter_input(INPUT_POST, 'nomeDependente', FILTER_DEFAULT);
$emailDependente= filter_input(INPUT_POST, 'emailDependente', FILTER_DEFAULT);
$nascimentoDependente= filter_input(INPUT_POST, 'nascimentoDependente', FILTER_DEFAULT);

$result = "select * from dependentes where emailDependente = '$emailDependente';";

$result = mysqli_query($conexao, $result);

$contagemCadastro = mysqli_num_rows($result);

if ($contagemCadastro > 0) {
    
     header("Location: http://localhost/clinica/home.php?pagina=10&mensagem=3");
  
} else {


    $query = "INSERT INTO dependentes VALUES (null,'$idPaciente','$nomeDependente','$nascimentoDependente','$emailDependente')";

    mysqli_query($conexao, $query);

    $result = "select * from dependentes where nomeDependente = '$nomeDependente'
         and nascimentoDependente = '$nascimentoDependente' and   emailDependente = '$emailDependente';";

    $result = mysqli_query($conexao, $result);

    $contagemCadastro = mysqli_num_rows($result);

    if ($contagemCadastro > 0) {
        
        
         
        
        
      header("Location: http://localhost/clinica/home.php?pagina=10&mensagem=1");
    } else {
            header("Location: http://localhost/clinica/home.php?pagina=10&mensagem=2");
    }
}


















