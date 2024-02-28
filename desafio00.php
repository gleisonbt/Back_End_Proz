<html>
    <head>
        <title>Desafio Tabela</title>
    </head>
    <body>
        <table border="2">
            <tr>
                <th>Salgadinhos</th>
                <th>Preço</th>
            </tr>
            <?php
                $salgadinhos = array("cebolitos" => 7.30,
                    "baconzitos" => 8.60,
                    "doritos" => 10.50);

                foreach($salgadinhos as $nome => $preco){
                    echo "<tr>";
                    echo "<td>".$nome."</td>"."<td>".$preco."</td>";    
                    echo "</tr>";
                }
                    
            ?>

        </table>
    </body>
</html>