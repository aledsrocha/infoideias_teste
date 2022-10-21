
<?php

function seculoAno(int $ano) {
    if($ano <= 0 ){
        echo "Ano inexistente";
        exit(0);
    }
    echo "Ano informado: " . $ano . PHP_EOL;
    //função ceil para pegar 
    return "Século: " . ceil($ano / 100);
}

$seculo = seculoAno(2022);
echo $seculo;