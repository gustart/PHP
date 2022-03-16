<?php 

$nota1 = readline("nota1: ");
$nota2 = readline("nota2: ");
$nota3 = readline("nota3: ");

$media = ($nota1 + $nota2 + $nota3)/3;


    
if ($media > 7){
    echo "Aprovado";
}
    
elseif ($media < 5){
    echo "Reprovado";
}

else{
    echo "Recuperação";
}

?>