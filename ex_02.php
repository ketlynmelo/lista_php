<?php

    function inverterTexto($texto): string {
    return implode(array_reverse(mb_str_split($texto)));

    echo "A escrita invertida resulta em: <br>";
    echo strrev($texto);

}

    $TextoOriginal = "gadotti";
    $TextoInvertido = inverterTexto($TextoOriginal);
    $quantidade = mb_strlen($TextoOriginal, 'UTF-8');
 
    echo "O texto invertido resulta em: " .$TextoInvertido ;
    echo "<br>A quantidade de caracteres é: " .$quantidade;

?>

