<h1>Cadastro de registro médico</h1>
<form method="POST" novalidate="novalidate"
      action="http://localhost/clinica/servicos/servicoCadastrarMedico.php" >
    <input placeholder="Informe o nome do médico" required='' data-val-required="Favor coloque o nome do médico" type="text" name="nomeMedico" id="nomeMedico" >
    <input  placeholder="Informe o crm do médico" required='' data-val-required="Favor coloque o crm do médico" type="text" name="crmMedico" id="crmMedico" >
    <input   required data-val-required="Favor coloque a data de nascimento do médico"  type="date" name="nascimentoMedico" id="nascimentoMedico" >
    <input type="submit" value="cadastar médico" >
</form>

<?php

if(isset($_GET['mensagem'])){
   echo $mensagem =  $_GET['mensagem'];
    if($mensagem  == 1){
        echo 'Cadastro realizado com sucesso';
    }
    else if($mensagem  == 2){
            echo 'Cadastro não realizado.';
    }
}else{
  
}
