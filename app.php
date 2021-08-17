<?php 

/**
 * Conversor de Temperaturas - PHP
 * mviniciusca@gmail.com
 * 2021
 * 
 * O app consiste em pegar uma temperatura qualquer fornecida e converter em demais escalas, seja ela Celsius, Kelvin ou Fahrenheit;
 * 
 */

# acao = temperatura + escala de origem: 32 graus Celsius ou 92 graus Fahrenheit;
# as conversões entre as escalas k e f podem ser realizadas atraves da conversão para a escala celsius;


function converteTemperatura ($temperatura, $escalaOrigem, $escalaDesejada) {

     // Celsius para Kelvin
     if ($escalaOrigem == 'celsius' and $escalaDesejada == 'kelvin'){
          $temperatura = $temperatura + 273.15;
         return $temperatura;
     } 
     // Kelvin para celsius
     elseif ($escalaOrigem == 'kelvin' and $escalaDesejada == 'celsius') {
          $temperatura = $temperatura - 273.15;
          return $temperatura;
     }
     // Celsius para fahrenheit
     elseif ($escalaOrigem == 'celsius' and $escalaDesejada == 'fahrenheit'){
          $temperatura = ($temperatura * 1.8) + 32;
          return $temperatura; 
     }
     // fahrenheit para celsius 
     elseif ($escalaOrigem == 'fahrenheit' and $escalaDesejada == 'celsius'){
          $temperatura = ( -32 + $temperatura) / 1.8;
          return $temperatura;
     }
     // Kelvin para Fahrenheit
     elseif ($escalaOrigem == 'kelvin' and $escalaDesejada == 'fahrenheit'){

          #trasnforma o kelvin em celsius e depois o celsius em fahrenheit

          $temperatura = $temperatura - 273.15;
          $temperatura = ($temperatura * 1.8) + 32;
          return $temperatura; 
     }
     
      // Fahrenheit para Kelvin 
      elseif ($escalaOrigem == 'fahrenheit' and $escalaDesejada == 'kelvin'){
     
          #trasnforma fahrenheit em celsius e depois o celsius em kelvin

          $temperatura = ( -32 + $temperatura) / 1.8;
          $temperatura = $temperatura + 273.15;
          return $temperatura;
      }

}
converteTemperatura ($temperatura, $escalaOrigem, $escalaDesejada);

