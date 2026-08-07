<?php

    function converterTemperatura($temperatura, $origem, $destino){

     switch ($origem){

        case "celsius":
            $Celsius = $temperatura;
            break;

        case "fahrenheit":
            $Celsius = ($temperatura - 32) * 5 / 9;
            break;

        case "kelvin":
            $Celsius = $temperatura - 273.15;
            break;

        default:
            return "Escala de origem inválida!";


    }

    switch ($destino){

        case "celsius":
            $resultado = $Celsius;
            break;

        case "fahrenheit":
            $resultado = ($Celsius * 9 / 5) + 32;
            break;

        case "kelvin":
            $resultado = $Celsius + 273.15;
            break;

        default:
            return "Escala de origem inválida!";

    }

    return $resultado;

    }

    $valor = 450;
    $origem_valor = "kelvin";
    $destino_valor = "celsius";

    echo "$valor graus $origem_valor convertido vira "; 
    echo converterTemperatura($valor, $origem_valor, $destino_valor); 
    echo "graus $destino_valor <br>";

?>