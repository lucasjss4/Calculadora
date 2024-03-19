<?php
//TFVDQVMgSk9Tw4kgREEgU0lMVkEgU0FOVE9T
/** Controller */

require('./models/calculadora.php');
$action = $_GET['action'] ?? '';
$resultado = ''; 

if($action == 'processar'){
    $expression = $_POST['formula'];
}

switch($action){
    case '':
    case 'inicio' :
        require('view.php');
        break;  
    case 'processar':
        $resultado = process($expression);
        require ('view.php');
        break;
}
