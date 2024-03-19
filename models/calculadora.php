<?php 
//TFVDQVMgSk9Tw4kgREEgU0lMVkEgU0FOVE9T
/* MODEL */

//Função que faz o processamento do cálculo
function process($expression){
    $result = null;
    eval('$result =' . $expression . ';');
    return $result;
}

//Print de teste da função 
//echo process('6*3');

