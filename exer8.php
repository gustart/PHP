<?php 

$num1 = readline("número 1: ");



    
if ($num1 % 2 == 0){
    echo "$num1 é par";
}

elseif ($num1 % 2 != 0 ){
    echo "Número impar";
}

    
if ($num1 > 0){
    echo "$num1 é positivo";
}

else{
    echo "$num1 é negativo";
}


?>