 <div class="form-container">
<h2>Cadastro de registro dependentes</h2>
<form method="POST" novalidate="novalidate"
      action="http://localhost/clinica/servicos/servicoCadastrarDependente.php" >
  
    <?php
    $query="select * from pacientes";
    
    $query = mysqli_query($conexao, $query);
    
    
    
    ?>
    
    <select name="idPaciente">
        <option value="">-- Selecione o responsável --</option>
      
        <?php
            while ($row = mysqli_fetch_array($query)) {
                
           
       ?> <option value="<?php echo $row['idPaciente']; ?>"><?php echo  "Matricula ".$row['idPaciente'].": ". utf8_encode($row['nomePaciente']); ?></option><?php
                
                
                 }
                ?>
    </select>
    
    
    
    <input placeholder="Informe o nome do dependente" required='' data-val-required="Favor coloque o nome do dependente" type="text" name="nomeDependente" id="nomeDependente" >
    <input  placeholder="Informe o email do dependente" required='' data-val-required="Favor coloque o crm do dependente" type="text" name="emailDependente" id="emailDependente" >
    <input   required data-val-required="Favor coloque a data de nascimento do dependente"  type="date" name="nascimentoDependente" id="nascimentoDependente" >
    <input type="submit" value="cadastar dependente" >
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
    