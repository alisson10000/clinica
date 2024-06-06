<?php
include './servicos/conexao.php';

$query = "Select * from medicos";

$query = mysqli_query($conexao, $query);
?>
<table border="1">
    <tr>
        <td>matricula</td>
        <td>nome</td>
        <td>crm</td>
        <td>nascimento</td>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $row['idMedico']; ?></td>
            <td><?php echo utf8_encode($row['nomeMedico']); ?></td>
            <td><?php echo $row['crmMedico']; ?></td>
            <td><?php echo $row['nascimentoMedico']; ?></td>
        </tr>

        <?php
    }
    ?>
</table>




