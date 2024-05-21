<h1>exclusão registro médico</h1>
<form action="http://localhost/clinica/servicos/servicoExcluirMedico.php" method="POST">
    
    <input type="text" name="idMedico" id="idMedico" 
           placeholder="Informe a matricula para exclusão " />
    <input type="submit" value="excuir registro medico"/>
 </form>

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