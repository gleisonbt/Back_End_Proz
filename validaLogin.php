<html>
    <head>
        <title>Valida Login</title>
    </head>
    <body>
        <?php
            const LOGIN = "gleison";
            const SENHA = "1234";
            if ($_POST["login"] == LOGIN &&
                    $_POST["senha"] == SENHA) {
                echo "<p>Usuário Logado!";
            } else {
                echo "<p>Login ou senha invalidos";
            }
        ?>
    </body>
</html>