<?php
// PARA ENCRIPTAR
$palavra = "teste de criptografia";
echo crypt($palavra);



// NO MÉTODO CRYPT EXISTE A POSSIBILIDADE DE TORNAR POSSIVEL OU NÃO O
// O RETORNO PARA O CÓDIGO ORIGINAL. ESSA POSSIBILIDADE SE FIXA NO
// FATO DE QUE PODEMOS CONFIGURAR UM “ARGUMENTO” PARA SER A CHAVE DA
// ENCRIPTAÇÃO, NÃO COLOCANDO O MESMO TEREMOS UMA CHAVE ALEATÓRIA O
// QUE LEVA A TERMOS UMA ENCRIPTAÇÃO SEM POSSIBILIDADE DE RETORNO.
?>