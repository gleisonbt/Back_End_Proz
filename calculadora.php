<html>
    <head>
        <title>Calculadora</title>
    </head>
    <body>
        <h2>Calculadora</h2>

        <form action="calculadoraServer.php" method="get">
            <label for="operando_1">Num1: </label>
            <input type="text" name="operando_1">
            <br><br>
            <label for="operando_2">Num2: </label>
            <input type="text" name="operando_2">
            <br><br>
            <select name="operacao">
                <option value="+">Soma</option>
                <option value="-">Subtração</option>
                <option value="*">Multiplicação</option>
                <option value="/">Divisão</option>
            </select>
            <br><br>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>