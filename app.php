<?php 

/**
 * Escalas 
 * Celsius
 * fahrenheit
 * Kelvin
 */

$temperatura    = 19;
$escalaOrigem   = 'fahrenheit';
$escalaDesejada = 'kelvin';

# acao = temperatura + escala de origem: 32 graus Celsius ou 92 graus Fahrenheit;
# as conversões entre as escalas k e f podem ser realizadas atraves da conversão para a escala celsius;



function converteTemperatura ($temperatura, $escalaOrigem, $escalaDesejada) {


     // Celsius para Kelvin
     if ($escalaOrigem == 'celsius' and $escalaDesejada == 'kelvin'){
          $temperatura = $temperatura + 273.15;
         echo $temperatura;
     } 
     // Kelvin para celsius
     elseif ($escalaOrigem == 'kelvin' and $escalaDesejada == 'celsius') {
          $temperatura = $temperatura - 273.15;
          echo $temperatura;
     }
     // Celsius para fahrenheit
     elseif ($escalaOrigem == 'celsius' and $escalaDesejada == 'fahrenheit'){
          $temperatura = ($temperatura * 1.8) + 32;
          echo $temperatura; 
     }
     // fahrenheit para celsius 
     elseif ($escalaOrigem == 'fahrenheit' and $escalaDesejada == 'celsius'){
          $temperatura = ( -32 + $temperatura) / 1.8;
          echo $temperatura;
     }
     // kelvin para F 
     elseif ($escalaOrigem == 'kelvin' and $escalaDesejada == 'fahrenheit'){

          #trasnforma o kelvin em celsius e depois o celsius em fahrenheit

          $temperatura = $temperatura - 273.15;
          $temperatura = ($temperatura * 1.8) + 32;
          echo $temperatura; 
     }
     
      // F para K 
      elseif ($escalaOrigem == 'fahrenheit' and $escalaDesejada == 'kelvin'){
     
          #trasnforma o f em celsius e depois o celsius em kelvin
          $temperatura = ( -32 + $temperatura) / 1.8;
          $temperatura = $temperatura + 273.15;
          echo $temperatura;
      }



}
converteTemperatura ($temperatura, $escalaOrigem, $escalaDesejada);

