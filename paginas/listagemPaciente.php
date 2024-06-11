<?php
include './servicos/conexao.php';

$query = "Select * from pacientes";

$query = mysqli_query($conexao, $query);
?>
<table class="table">

    <thead>
        <tr>
            <th>matricula</th>
            <th>nome</th>
            <th>email</th>
            <th>nascimento</th>
        </tr>
    </thead>
    <tbody>


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
    </tbody>
</table>




