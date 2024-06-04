 <div class="form-container">
<h2>exclusão registro paciente</h2>
<form action="http://localhost/clinica/servicos/servicoExcluirPaciente.php" method="POST">
    
    <input type="text" name="idPaciente" id="idPaciente" 
           placeholder="Informe a matricula para exclusão " />
    <input type="submit" value="excuir registro peciente"/>
 </form>
 </div>
<?php
if (isset($_GET['mensagem'])) {
    $mensagem = $_GET['mensagem'];
    if ($mensagem == 1) {
        ?>
        <div class="ok">Exclusão realizada com sucesso</div>

        <?php
    } else if ($mensagem == 2) {
        ?>
        <div class="erro">Exclusão não realizada.</div>


        <?php
    } else if ($mensagem == 3) {
        ?>
        <div class="alerta">Essa matricula não existe no banco de dados</div>
        <?php
    }
}