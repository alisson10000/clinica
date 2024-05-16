<form method="POST"
    action="http://localhost/clinica/servicos/servicoCadastrarMedico.php">
    <input required="" type="text" name="nomeMedico" id="nomeMedico" >
    <input required type="text" name="crmMedico" id="crmMedico" >
    <input required type="date" name="nascimentoMedico" id="nascimentoMedico" >
    <input type="submit" value="cadastar médico" >
</form>

<?php

if(isset($_GET['mensagem'])){
   echo $mensagem =  $_GET['mensagem'];
    if($mensagem  == 1){
        echo 'Cadastro realizado com sucesso';
    }
    else{
            echo 'Cadastro não realizado.';
    }
}else{
    echo $mensagem =  $_GET['mensagem'];
}
