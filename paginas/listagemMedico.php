<?php
include './servicos/conexao.php';

$query = "Select * from medicos";

$query = mysqli_query($conexao, $query);
?>

<table class="table">

    <thead>
        <tr>
            <th>matricula</th>
            <th>nome</th>
            <th>crm</th>
            <th>nascimento</th>
        </tr>
    </thead>
    <tbody>

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
         </tbody>
</table>



