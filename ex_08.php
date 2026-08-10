<?php 

function ordenarNomes($nomes){

    $vetorNome = explode (",", $nomes);
    $vetorNome = array_map("trim", $vetorNome);
    sort($vetorNome);

    return $vetorNome;
}


       $nome_usuario = "Dani, Victor, Ana, Fernando";

       echo   "Lista original: $nome_usuario <br>";

       $listaOrga = ordenarNomes($nome_usuario);
       echo "Lista organizada: <br>";

       foreach ($listaOrga as $nome){
        echo " - $nome <br>";
       }

       ?>