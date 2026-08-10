<?php


function formatarTexto($texto){

            $maiusculo = strtoupper($texto);
            $minusculo = strtolower($texto);

            $primeiraLetraM = ucwords(strtolower($texto));
            $quantidade = strlen($texto);

        return[
        "maiusculo" = > $maiusculo,
        "minusculo" = > $minusculo,
        "capitalizado" = > $primeiraLetraM,
        "quantidade" = > $quantidade
        ] ; 
    }

    $texto_usuario = "Oi, meu nome é ketlyn";
    $resultado = formatarTexto($texto_usuario);


            echo "Texto original: $texto_usuario <br>";
            echo "Maiúsculo: " . $resultado["maiusculo"] . "<br>";
            echo "Minúsculo: " . $resultado["minusculo"] . "<br>";
            echo "Capitalizado: " . $resultado["capitalizado"] . "<br>";
            echo "Quantidade de caracteres: " . $resultado["quantidade"] . "<br>";

?>