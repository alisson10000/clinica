<?php
require './conexao.php';

 $idMedico = filter_input(INPUT_POST, 'idMedico', FILTER_DEFAULT);
$nomeMedico = filter_input(INPUT_POST, 'nomeMedico', FILTER_DEFAULT);
$crmMedico = filter_input(INPUT_POST, 'crmMedico', FILTER_DEFAULT);
$nascimentoMedico = filter_input(INPUT_POST, 'nascimentoMedico', FILTER_DEFAULT);


$query="UPDATE medicos SET nomeMedico='$nomeMedico',`crmMedico`='$crmMedico',`nascimentoMedico`='$nascimentoMedico' WHERE idMedico=$idMedico";

mysqli_query($conexao, $query);





