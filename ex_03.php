<?php

function cascararCpf($cpf)
 {
    return preg_replace('/\d(?=\d{4})/', '*', $cpf);

}

 $CpfOriginal = "O meu cpf é 15896924750";
 echo cascararCpf($CpfOriginal);


?>