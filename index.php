<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="../css/raiz.css">
        <style>@import "css/raiz.css";</style>

    </head>
    <body>
        <div class="login-container">
            <h2>Login</h2>
            <form action="servicos/logar.php" method="post">
                <div class="form-group">

                    <select name="role">
                        <option>-- selecione o tipo de usuario -- </option>
                        <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                        <option value="BASICO">BÁSICO</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Login</button>
            </form>
            <?php
            if (isset($_GET['mensagem'])) {


                $mensagem = $_GET['mensagem'];

                if ($mensagem == 0) {
                    ?>

                    <div class="erro">
                        login ou senha inválida!
                    </div>


                    <?php
                } elseif ($mensagem == 1) {
                    ?>

                    <div class="erro">
                        Usuario não autenticado no sistema!
                    </div>


                    <?php
                }
                elseif ($mensagem == 2) {
                    ?>

                    <div class="erro">
                        Você selecionou o tipo errado!!!
                    </div>


                    <?php
                }
            }
            ?>

        </div>
         <script>
        // Função para limpar os parâmetros da URL
        function limparParametrosURL() {
            var novaURL = window.location.origin + window.location.pathname;
            window.history.replaceState({}, document.title, novaURL);
        }

        // Chamando a função para limpar os parâmetros da URL quando a página estiver completamente carregada
        window.addEventListener('load', function() {
            limparParametrosURL();
        });
    </script>
    </body>
</html>

