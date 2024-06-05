<?php
include 'conexao.php';
session_start();
 $login = $_SESSION['login'];
 $senha = $_SESSION['senha'];


$query="SELECT * FROM usuarios WHERE loginUsuario='$login'  and senhaUsuario='$senha'";

$result = mysqli_query($conexao, $query);

 $contagem = mysqli_num_rows($result);
$role="";
while ($row = mysqli_fetch_array($result)) {
  echo "Seja bem vindo ".$row['nomeUsuario']."<a href='servicos/logoff.php'>sair</a>"; 
  $role = $row['roleUsuario'];
}


 

if($contagem > 0){
    
    
    
    
    
}elseif($contagem == 0 || $contagem < 0 ){
 
      session_unset();
      header("Location: http://localhost/clinica/?mensagem=1");

    
    
}

