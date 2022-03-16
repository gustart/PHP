<?php 



 


$pedidio = 0;
$codigo = readline("Qual o codigo do seu pedido : ");
$quantidade = readline("quantidade: ");

switch($codigo){
    case '100':
          $pedido = $quantidade * 1;;
          echo "valor = $pedido";
          break;
    case '101':
        $pedido = $quantidade * 130;
        echo "valor = $pedido";
        break;
    case '102':
        $pedido = $quantidade * 1.50;;
        echo "valor = $pedido";
        break;
    case '103':
        $pedido = $quantidade * 1.10;
        echo "valor = $pedido";
        break;
        
    case '104':
        $pedido = $quantidade * 1.30;
        echo "valor = $pedido";
        break;
        
    case '105':
        $pedido = $quantidade * 1;
        echo "valor = $pedido";
        break;

    default:
        echo "pedido inválido";
        break;

    }

    ?>