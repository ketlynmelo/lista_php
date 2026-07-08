<?php

function gerarSenha($digitos) {

    //todos os conjuntos possiveis para a senha
    $letras = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()-_=+[]{}|;:,.<>?';
    
    //Juntas todos os caracteres em um único conjunto
    $caracteresLength = strlen($letras);
    $senha = '';

    // Seleciona um caractere aleatório a cada iteração
        for ($i = 0; $i < $digitos; $i++) {
        $indiceAleatorio = random_int(0, $caracteresLength - 1);
         $senha .= $letras[$indiceAleatorio];

    }

    return $senha;

}
   
    //Senha gerada automaticamente
    $tamanhoDesejado = 10;
    $senhaGerada = gerarSenha($tamanhoDesejado);

    echo "Senha gerada: " . $senhaGerada;

    ?>