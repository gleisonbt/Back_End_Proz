<html>
    <head>
        <title>My First PHP</title>
    </head>
    <body>
        <?php
            //comentario de uma linha
            #comentario de uma linha
            /* comentando em
                multiplas linhas
            */
            echo "Hello!"."<br>"; #printando um string
            #echo "<br>";

            #Variávais
            $nome = "Gleison";
            echo $nome."<br>"; #concatenando com "."
            #echo "<br>";
            $idade = 28;
            echo $idade."<br>";
            #echo "<br>";
            $peso = 59.5;
            echo $peso;

            const imposto = 5; #criando uma constante
            echo "<p>Valor da constante";
            echo "<br>".imposto;

            $frutas = array("graviola", "caju", "cupuaçu");
            echo "<br>".$frutas[0]; #Acessando a posição 0 do array:
            foreach($frutas as $fruta){ #Percorrendo o array:
                echo "<br>".$fruta;
            }

            #criando lista
            echo "<ol>";
                foreach($frutas as $fruta){
                    echo "<li>".$fruta;
                }
            echo "</ol>";

            #dicionario
            $animais = array("cachorro" => "totó", "gato" => "mingau");
            echo "<br>".$animais["cachorro"];
            echo "<br>".$animais["gato"];


        ?>
    </body>
</html>