 <div class="form-container">
<h2>Cadastro de registro paciente</h2>
<form method="POST" novalidate="novalidate"
      action="http://localhost/clinica/servicos/servicoCadastrarPaciente.php" >
    <input placeholder="Informe o nome do paciente" required='' data-val-required="Favor coloque o nome do paciente" type="text" name="nomePaciente" id="nomePaciente" >
    <input  placeholder="Informe o email do paciente" required='' data-val-required="Favor coloque o crm do paciente" type="text" name="emailPaciente" id="emailPaciente" >
    <input   required data-val-required="Favor coloque a data de nascimento do paciente"  type="date" name="nascimentoPaciente" id="nascimentoPaciente" >
    <input type="submit" value="cadastar paciente" >
</form>
 </div>

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
        <div class="alerta">Esse email já está cadastrado no banco de dados não pode ser duplicado.</div>



        <?php
    }
}
    