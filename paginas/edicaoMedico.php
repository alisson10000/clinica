 <div class="form-container">
<h2>edição registro médico</h2>

<form  action="http://localhost/clinica/servicos/servicoBuscarMedico.php" method="GET">

    <input type="text" 
           placeholder="Informea matrícula para busca registro"
           name="idMedico" id="idMedico">

    <input title="botão para buscar registro para edição" type="submit" value="buscar">

</form>

 </div>
<?php
if (isset($_GET['matriculaMedico']) || isset($_GET['mensagem'])) {
    $mensagem = $_GET['mensagem'];
    if ($mensagem == 1) {

        require './servicos/conexao.php';
 $idMedico = $_GET['idMedico'];
        $query = "select * from medicos where idMedico=$idMedico";

        $query = mysqli_query($conexao, $query);
        ?>
<h1>Formulário de edição de registro médico</h1>
        <form method="POST" action="./servicos/servicoEditarMedico.php" name="frmEditaMedico" id="frmEditaMedico">
            <?php
            while ($row = mysqli_fetch_array($query)) {
                ?> 
                <input readonly="" type="text" name="idMedico" value="<?php echo $row['idMedico']; ?>">
                <input type="text" name="nomeMedico" value="<?php echo $row['nomeMedico']; ?>">
                <input type="text" name="crmMedico" value="<?php echo $row['crmMedico']; ?>">
                <input type="date" name="nascimentoMedico" value="<?php echo $row['nascimentoMedico']; ?>">

                <?php
            }
            ?>
                <input type="submit" value="editar registro médico">

        </form>
        <?php
    } else if ($mensagem == 2) {
        ?>
        <div class="alerta">Essa matricula não existe no banco de dados</div>
        <?php
    }
}
if (isset($_GET['mensagem'])) {
    $mensagem = $_GET['mensagem'];
    if ($mensagem == 3) {
        ?>
        <div class="ok">Edição realizada com sucesso</div>

        <?php
    } else if ($mensagem == 4) {
        ?>
        <div class="erro">Edição não realizada.</div>
<?php

}
}

