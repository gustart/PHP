<?php 



 


$resultado1 = 0;
$resultado2 = 0;
$sexo = readline("escolha [1- M] [2-F] : ");
$altura = readline("altura: ");

switch($sexo){
    case 1:
        $resultado1 = ($altura * 72.7) - 58;
          echo "Seu peso ideal = $resultado1";
          break;
    case 2:
        $resultado2 = ($altura * 62.1) - 44.7;
        echo "Seu peso ideal = $resultado2";
        break;
    
          echo "Final";
          break;

    }

    ?>