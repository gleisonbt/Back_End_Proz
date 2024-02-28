<html>
    <head>
        <title>
            Resultado
        </title>
    </head>
    <body>
        <?php
            $op1 = $_GET["operando_1"];
            $op2 = $_GET["operando_2"];
            $operador = $_GET["operacao"];
            $resultado = null;

            switch ($operador) {
                case '+':
                    $resultado = $op1 + $op2;
                    echo $resultado."<br>";
                    break;
                case '-':
                    $resultado = $op1 - $op2;
                    echo $resultado."<br>";
                    break;
                case '*':
                    $resultado = $op1 * $op2;
                    echo $resultado."<br>";
                    break;
                case '/':
                    $resultado = $op1 / $op2;
                    echo $resultado."<br>";
                    break;
            }
        ?>
    </body>
</html>