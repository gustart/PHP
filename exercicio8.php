<?php 

$nome = readline("Insira o nome: ");
$numero = readline("Insira a idade: ");


    
if ($numero > 18){
    echo "$nome tem $numero anos e é maior de idade";
}
    
else{
    echo "$nome tem $numero anos e é menor de idade";
}

?>