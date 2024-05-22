<h1>edição registro médico</h1>

<form  action="http://localhost/clinica/servicos/servicoBuscarMedico.php" method="GET">
    
    <input type="text" 
           placeholder="Informea matrícula para busca registro"
           name="idMedico" id="idMedico">
    
    <input title="botão para buscar registro para edição" type="submit" value="buscar">
    
</form>


<?php 
 



if(isset($_GET['matriculaMedico']) || isset( $_GET['mensagem']) ){
 $mensagem = $_GET['mensagem'];
    if($mensagem == 1){
       
        
        
        
    }
    else if($mensagem == 2){
        
         ?>
        <div class="alerta">Essa matricula não existe no banco de dados</div>
        <?php
        
    }
    
    
    
}





