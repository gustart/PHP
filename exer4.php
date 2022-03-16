<?php 
$i = 0;
$soma = 0;
$media = 0;

$media = ($nota1 + $nota2 + $nota3 + $nota4)/4;
   
for ($i = 1; $i <= 4; $i++){
   $nota = readline("Insira a $i nota: ");
     if($nota > 10 || $nota < 1){
         while ($nota < 0 || $nota > 10) {
            echo "Nota invalida".PHP_EOL;
            echo "Insira uma nota entre 0 e 10";
            $nota = readline("Insira a nota $i novamente: ");
         }
         
     }

     $soma = $soma + $nota;
}

$media = $soma/4;

echo "A media é: $media";

if ($media >= 6){
    echo "Aluno aprovado";

}
else{
    echo "Aluno reprovado";
}


?>