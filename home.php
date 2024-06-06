<?php
include './servicos/verifica.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema de Gerenciamento de Consultas</title>

        <style>@import "css/raiz.css";</style>
        <script src="js/script.js"></script>

    </head>
    <body>
        <div class="conteudoGeral">
            <div class="topo">
                Sistema de Gerenciamento de Consultas
            </div>
            <?php
            if ($role == "ADMINISTRADOR") {
                ?>
                <div class="menu">
                    <div class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn">Médico</a>
                        <div class="dropdown-content">
                            <a href="?pagina=2">Cadastro Médico</a>
                            <a href="?pagina=3">Edição Médico</a>
                            <a href="?pagina=4">Exclusão Médico</a>
                            <a href="?pagina=5">Listagem Médico</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn">Paciente</a>
                        <div class="dropdown-content">
                            <a href="?pagina=6">Cadastro Paciente</a>
                            <a href="?pagina=7">Edição Paciente</a>
                            <a href="?pagina=8">Exclusão Paciente</a>
                            <a href="?pagina=9">Listagem Paciente</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn">Dependentes</a>
                        <div class="dropdown-content">
                            <a href="?pagina=10">Cadastro dependente</a>
                            <a href="?pagina=11">Edição dependente</a>
                            <a href="?pagina=12">Exclusão dependente</a>
                            <a href="?pagina=13">Listagem dependente</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn">Marcação de Consultas</a>
                        <div class="dropdown-content">
                            <!-- Adicione aqui os links para as funcionalidades de marcação de consultas -->
                            <a href="?pagina=14">Cadastro consulta</a>
                            <a href="?pagina=15">Edição consulta</a>
                            <a href="?pagina=16">Exclusão consulta</a>
                            <a href="?pagina=17">Listagem consulta</a>
                        </div>
                    </div>
                </div>


                <?php
            } elseif ($role == "BASICO") {
                ?>
                <div class="menu">
                    <div class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn">Médico</a>
                        <div class="dropdown-content">
                            <a href="?pagina=5">Listagem Médico</a>
                        </div>
                    </div>


                    <div class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn">Marcação de Consultas</a>
                        <div class="dropdown-content">
                            <!-- Adicione aqui os links para as funcionalidades de marcação de consultas -->

                            <a href="?pagina=17">Listagem consulta</a>
                        </div>
                    </div>
                </div>



                <?php
            }
            ?>


            <div class="pagina">
                <?php
                if (isset($_GET['pagina'])) {
                    // echo $_GET['pagina'];

                    if ($_GET['pagina'] == 1) {




                        require './paginas/home.php';
                    } elseif ($_GET['pagina'] == 2) {

                        if ($role == "ADMINISTRADOR") {
                            require './paginas/cadastroMedico.php';
                        } else {
                            require './paginas/acessoNegado.php';
                        }
                    } elseif ($_GET['pagina'] == 3) {


                        if ($role == "ADMINISTRADOR") {
                            require './paginas/edicaoMedico.php';
                        } else {
                            require './paginas/acessoNegado.php';
                        }
                    } elseif ($_GET['pagina'] == 4) {




                        if ($role == "ADMINISTRADOR") {
                            require './paginas/exclusaoMedico.php';
                        } else {
                            require './paginas/acessoNegado.php';
                        }
                    } elseif ($_GET['pagina'] == 5) {
                        require './paginas/listagemMedico.php';
                    } elseif ($_GET['pagina'] == 6) {



                        if ($role == "ADMINISTRADOR") {
                            require './paginas/cadastroPaciente.php';
                        } else {
                            require './paginas/acessoNegado.php';
                        }
                    } elseif ($_GET['pagina'] == 7) {
                        if ($role == "ADMINISTRADOR") {
                            require './paginas/edicaoPaciente.php';
                        } else {
                            require './paginas/acessoNegado.php';
                        }
                    } elseif ($_GET['pagina'] == 8) {
                        if ($role == "ADMINISTRADOR") {
                            require './paginas/exclusaoPaciente.php';
                        } else {
                            require './paginas/acessoNegado.php';
                        }
                    } elseif ($_GET['pagina'] == 9) {
                        require './paginas/listagemPaciente.php';
                    }
                }
                ?>
            </div>
            <div class="rodape">Projeto de curso Fundec &copy;2024</div>
        </div>
        <script>

        </script>
    </body>
</html>
