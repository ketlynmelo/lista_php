<?php

function analisarNume($numero){

    if($numero % 2 == 0){
        $paridade = "par";
    }else {
        $paridade = "ímpar";
    }

    $Primo = true;

    if ($numero < 2 ){
        $Primo = false;
    } else {
        for ($i = 2; $i < $numero; $i++){
            if ($numero % $i == 0){
                $Primo = false;
                break;
            }
        }
    }


    $somaDivisor = 0;

     for ($i = 1; $i < $numero; $i++){
        if ($numero % $i == 0){
            $somaDivisor += $i;
        }
     }

     $perfeito = ($somaDivisor == $numero && $numero > 0 );

     return [
        "paridade" => $paridade,
        "primo" => $ehPrimo ? "Sim" : "Não",
        "perfeito" => $ehPerfeito ? "Sim" : "Não"
     ];

}

        $numero_usu = 15;

        $resultado = analisarNume  ($numero_usu);

        echo "Número analisado: $numero_usuario <br>";
        echo "Paridade: " . $resultado["paridade"] . "<br>";
        echo "É primo? " . $resultado["primo"] . "<br>";
        echo "É perfeito? " . $resultado["perfeito"] . "<br>";

/
?>
