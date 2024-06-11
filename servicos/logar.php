<?php

include './conexao.php';
$login = $_POST['username'];
$senha = $_POST['password'];
$role = $_POST['role'];
$query = "SELECT * FROM usuarios WHERE loginUsuario='$login' and senhaUsuario='$senha'";
$result = mysqli_query($conexao, $query);
$contagem = mysqli_num_rows($result);

while ($row = mysqli_fetch_array($result)) {

    $roleBanco = $row['roleUsuario'];
}
if ($role != $roleBanco) {
    header("Location: http://localhost/clinica/?mensagem=2");
} else {



    if ($contagem > 0) {
        session_start();
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        $_SESSION['role'] = $role;
        header("Location: ../home.php");
    } else {
        session_unset();
        header("Location: http://localhost/clinica/?mensagem=0");
    }
}