<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            @import'http://localhost/clinica/css/raiz.css';
        </style>

    </head>
    <body>  
        <div class="conteudoGeral">
            <div class="topo">
                Sistema de gerenciamento de consultas
            </div>
            <div class="menu">
                <a href="http://localhost/clinica/index.php/?pagina=1">home</a>
                <a href="http://localhost/clinica/index.php/?pagina=2">cadastro médico</a>
                <a href="http://localhost/clinica/index.php/?pagina=3">edição médico</a>
                <a href="http://localhost/clinica/index.php/?pagina=4">exclusão médico</a>
                <a href="http://localhost/clinica/index.php/?pagina=5">listagem médico</a>
                <a href="http://localhost/clinica/index.php/?pagina=6">cadastro paciente</a>
                <a href="http://localhost/clinica/index.php/?pagina=7">edição paciente</a>
                <a href="http://localhost/clinica/index.php/?pagina=8">exclusão paciente</a>
                <a href="http://localhost/clinica/index.php/?pagina=9">listagem paciente</a>
            </div>
            <div class="pagina">

                <?php
                if (isset($_GET['pagina'])) {
                    // echo $_GET['pagina'];

                    if ($_GET['pagina'] == 1) {
                        require './paginas/home.php';
                    } elseif ($_GET['pagina'] == 2) {
                        require './paginas/cadastroMedico.php';
                    } elseif ($_GET['pagina'] == 3) {
                        require './paginas/edicaoMedico.php';
                    } elseif ($_GET['pagina'] == 4) {
                        require './paginas/exclusaoMedico.php';
                    } elseif ($_GET['pagina'] == 5) {
                        require './paginas/listagemMedico.php';
                    } elseif ($_GET['pagina'] == 6) {
                        require './paginas/cadastroPaciente.php';
                    } elseif ($_GET['pagina'] == 7) {
                        require './paginas/edicaoPaciente.php';
                    } elseif ($_GET['pagina'] == 8) {
                        require './paginas/exclusaoPaciente.php';
                    } elseif ($_GET['pagina'] == 9) {
                        require './paginas/listagemPaciente.php';
                    }
                }
                ?>

            </div>
            <div class="rodape">Projeto de curso Fundec &copy;2024 </div>
        </div>
    </body>

</html>
