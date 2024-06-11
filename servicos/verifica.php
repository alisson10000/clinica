<?php

include 'conexao.php';
session_start();
$login = $_SESSION['login'];
$senha = $_SESSION['senha'];

$query = "SELECT * FROM usuarios WHERE loginUsuario='$login'  and senhaUsuario='$senha'";

$result = mysqli_query($conexao, $query);

$contagem = mysqli_num_rows($result);
$role = "";

$usuario = "";
while ($row = mysqli_fetch_array($result)) {
    ?> 


    <?php

    $usuario = $row['nomeUsuario'] ;
            $role = $row['roleUsuario'];
    ?>  

    <?php

}




if ($contagem > 0) {
    
} elseif ($contagem == 0 || $contagem < 0) {

    session_unset();
    header("Location: http://localhost/clinica/?mensagem=1");
}

