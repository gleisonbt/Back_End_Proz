<?php
    echo "IF<br>";
    $nome = "gleison.";
    if($nome == "gleison"){
        echo "Acertou!";
    } else {
        echo "Errou!";
    }
    echo "<br>";
    echo "Switch<br>";
    $opcao = 5;
    $num1 = 20;
    $num2 = 15;
    switch ($opcao) {
        case 1:
            echo $num1+$num2;
            break;
        case 2:
            echo $num1-$num2;
        default:
            echo "Operação Inválida";
            break;
    }

?>