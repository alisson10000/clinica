<?php
require_once './conexao.php';

 $idMedico = filter_input(INPUT_POST, 'idMedico', FILTER_DEFAULT);
$nomeMedico = filter_input(INPUT_POST, 'nomeMedico', FILTER_DEFAULT);
$crmMedico = filter_input(INPUT_POST, 'crmMedico', FILTER_DEFAULT);
$nascimentoMedico = filter_input(INPUT_POST, 'nascimentoMedico', FILTER_DEFAULT);


$query="UPDATE medicos SET nomeMedico='$nomeMedico',`crmMedico`='$crmMedico',`nascimentoMedico`='$nascimentoMedico' WHERE idMedico=$idMedico";

mysqli_query($conexao, $query);
  


$query="SELECT * FROM medicos WHERE nomeMedico='$nomeMedico' 
AND
crmMedico='$crmMedico'
AND
nascimentoMedico='$nascimentoMedico'
and 
idMedico='$idMedico'";


$result = mysqli_query($conexao, $query);

echo $contagem = mysqli_num_rows($result);

if($contagem > 0){
      header("Location: http://localhost/clinica/home.php?pagina=3&mensagem=3");
}else {
    

     header("Location: http://localhost/clinica/home.php?pagina=3&mensagem=4");
}