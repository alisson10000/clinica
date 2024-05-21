<h1>Cadastro de registro médico</h1>
<form method="POST" novalidate="novalidate"
      action="http://localhost/clinica/servicos/servicoCadastrarMedico.php" >
    <input placeholder="Informe o nome do médico" required='' data-val-required="Favor coloque o nome do médico" type="text" name="nomeMedico" id="nomeMedico" >
    <input  placeholder="Informe o crm do médico" required='' data-val-required="Favor coloque o crm do médico" type="text" name="crmMedico" id="crmMedico" >
    <input   required data-val-required="Favor coloque a data de nascimento do médico"  type="date" name="nascimentoMedico" id="nascimentoMedico" >
    <input type="submit" value="cadastar médico" >
</form>

<?php
if (isset($_GET['mensagem'])) {
    $mensagem = $_GET['mensagem'];
    if ($mensagem == 1) {
        ?>
        <div class="ok">Cadastro realizado com sucesso</div>

        <?php
    } else if ($mensagem == 2) {
        ?>
        <div class="erro">Cadastro não realizado.</div>


        <?php
    } else if ($mensagem == 3) {
        ?>
        <div class="alerta">Esse crm já está cadastrado no banco de dados não pode ser duplicado.</div>



        <?php
    }
}
    