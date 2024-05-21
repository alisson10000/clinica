<?php

require './conexao.php';

$nomeMedico = filter_input(INPUT_POST, 'nomeMedico', FILTER_DEFAULT);
$crmMedico = filter_input(INPUT_POST, 'crmMedico', FILTER_DEFAULT);
$nascimentoMedico = filter_input(INPUT_POST, 'nascimentoMedico', FILTER_DEFAULT);

$result = "select * from medicos where nomeMedico = '$nomeMedico'
         and crmMedico = '$crmMedico' and   nascimentoMedico = '$nascimentoMedico';";

$result = mysqli_query($conexao, $result);

$contagemCadastro = mysqli_num_rows($result);

if ($contagemCadastro > 0) {
    
     header("Location: http://localhost/clinica/index.php?pagina=2&mensagem=3");
  
} else {


    $query = "INSERT INTO medicos VALUES (null,'$nomeMedico','$crmMedico ','$nascimentoMedico')";

    mysqli_query($conexao, $query);

    $result = "select * from medicos where nomeMedico = '$nomeMedico'
         and crmMedico = '$crmMedico' and   nascimentoMedico = '$nascimentoMedico';";

    $result = mysqli_query($conexao, $result);

    $contagemCadastro = mysqli_num_rows($result);

    if ($contagemCadastro > 0) {
        
        
         
        
        
      header("Location: http://localhost/clinica/index.php?pagina=2&mensagem=1");
    } else {
            header("Location: http://localhost/clinica/index.php?pagina=2&mensagem=2");
    }
}


















