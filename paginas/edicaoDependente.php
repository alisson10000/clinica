 <div class="form-container">
<h2>edição registro dependentes</h2>

<form  action="http://localhost/clinica/servicos/servicoBuscarDependente.php" method="GET">

    <input type="text" 
           placeholder="Informea matrícula para busca registro"
           name="idDependente" id="idDependente">

    <input title="botão para buscar registro para edição" type="submit" value="buscar">

</form>

 </div>
<?php
if (isset($_GET['idDependente']) || isset($_GET['mensagem'])) {
    $mensagem = $_GET['mensagem'];
    if ($mensagem == 1) {

        require './servicos/conexao.php';
 $idDependente = $_GET['idDependente'];
        $query = "select * from dependentes where idDependente=$idDependente";

        $query = mysqli_query($conexao, $query);
        ?>
<h1>Formulário de edição de registro dependente</h1>
        <form method="POST" action="./servicos/servicoEditarDependente.php" name="frmEditaDependente" id="frmEditaDependente">
            <?php
            while ($row = mysqli_fetch_array($query)) {
                ?> 
            <input readonly="" type="text" name="idDependente" value="<?php echo $row['idDependente']; ?>">
                <input readonly="" type="text" name="idDependente" value="<?php echo $row['idDependente']; ?>">
                <input type="text" name="nomeDependente" value="<?php echo $row['nomeDependente']; ?>">
                <input type="text" name="emailDependente" value="<?php echo $row['emailDependente']; ?>">
                <input type="date" name="nascimentoDependente" value="<?php echo $row['nascimentoDependente']; ?>">

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





