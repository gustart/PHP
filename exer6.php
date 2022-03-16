<?php 

$resultado1 = 0;
$resultado2 = 0;
$resultado3 = 0;
$num = readline("escolha [1] [2] [3]: ");
$horas_aula = readline("Quantas aulas vc trabalhou: ");

switch($num){
    case 1:
        $resultado1 = $horas_aula * 12;
          echo "Seu salario é = $resultado1";
          break;
    case 2:
        $resultado2 = $horas_aula * 17;
        echo "Seu salario é = $resultado2";
        break;
    case 3:
        $resultado3 = $horas_aula * 25;
        echo "Seu salario é = $resultado3";
        break;
    default:
          echo "Final";
          break;

    }
?>