<?php

function gerarSenha($digitos) {
    //todos os conjuntos possiveis para a senha
    $maiusculas = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $minusculas = 'abcdefghijklmnopqrstuvwxyz';
    $numeros = '0123456789';
    $especiais = '!@#$%^&*()-_=+[]{}|;:,.<>?';

    // Juntas todos os caracteres em um único conjunto
    $todosCaracteres = $maiusculas . $minusculas . $numeros . $especiais;
    $caracteresLength = strlen($todosCaracteres);
    $senha = '';

    // Seleciona um caractere aleatório a cada iteração
        for ($i = 0; $i < $digitos; $i++) {
        $indiceAleatorio = random_int(0, $caracteresLength - 1);
         $senha .= $todosCaracteres[$indiceAleatorio];

    }

    return $senha;

}

    //Senha gerada automaticamente
    $tamanhoDesejado = 10;
    $senhaGerada = gerarSenha($tamanhoDesejado);

    echo "Senha gerada: " . $senhaGerada;

    ?>