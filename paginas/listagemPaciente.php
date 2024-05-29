<?php
include './servicos/conexao.php';

$query = "Select * from pacientes";

$query = mysqli_query($conexao, $query);
?>
<table border="1">
    <tr>
        <td>matricula</td>
        <td>nome</td>
        <td>email</td>
        <td>nascimento</td>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $row['idPaciente']; ?></td>
            <td><?php echo utf8_encode($row['nomePaciente']); ?></td>
            <td><?php echo $row['emailPaciente']; ?></td>
            <td><?php echo $row['nascimentoPaciente']; ?></td>
        </tr>

        <?php
    }
    ?>
</table>




