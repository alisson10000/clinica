<?php

// Dados de conexão com o banco de dados
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'clinica';
//sequencia Criar a conexão
//sequencia , servidor, usuasrio, senha e banco de dados.
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
// Verificar a conexão
if ($conexao) {
//    echo "Conexao OK..";
} else {
    die('Erro de conexão: ' . mysqli_connect_error());
}
?>
