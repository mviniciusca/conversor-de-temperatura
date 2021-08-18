<?php 

/**
 * Conversor de Temperaturas - PHP
 * mviniciusca@gmail.com
 * 2021
 * 
 * O app consiste em pegar uma temperatura qualquer fornecida e converter em demais escalas, seja ela Celsius, Kelvin ou Fahrenheit; * 
 */

# Atalhos: k - kelvin / c - celsius / f - fahrenheit
# Lógica:
#acao = temperatura  <= ação => escala de origem: 32 graus Celsius ou 92 graus Fahrenheit; resultado: escala desejada.

# Nota do Desafio:
# as conversões entre as escalas k e f podem ser realizadas atraves da conversão para a escala celsius; 
# ou seja: converta tanto k e f para celsius e depois obtenha a medida através dela.


function converteTemperatura ($temperatura, $escalaOrigem, $escalaDesejada) {

     // Celsius para Kelvin
     if ($escalaOrigem == 'celsius' and $escalaDesejada == 'kelvin'){
          $temperatura = $temperatura + 273.15;
         return $temperatura;
     } 
     // Kelvin para celsius
     if ($escalaOrigem == 'kelvin' and $escalaDesejada == 'celsius') {
          $temperatura = $temperatura - 273.15;
          return $temperatura;
     }
     // Celsius para fahrenheit
     if ($escalaOrigem == 'celsius' and $escalaDesejada == 'fahrenheit'){
          $temperatura = ($temperatura * 1.8) + 32;
          return $temperatura; 
     }
     // fahrenheit para celsius 
     if ($escalaOrigem == 'fahrenheit' and $escalaDesejada == 'celsius'){
          $temperatura = ( -32 + $temperatura) / 1.8;
          return $temperatura;
     }
     // Kelvin para Fahrenheit
     if ($escalaOrigem == 'kelvin' and $escalaDesejada == 'fahrenheit'){

          #trasnforma o kelvin em celsius e depois o celsius em fahrenheit

          $temperatura = $temperatura - 273.15; // saída em celsius
          $temperatura = ($temperatura * 1.8) + 32; // saída em fahrenheit
          return $temperatura; 
     }     
      // Fahrenheit para Kelvin 
      if ($escalaOrigem == 'fahrenheit' and $escalaDesejada == 'kelvin'){
     
          #trasnforma fahrenheit em celsius e depois o celsius em kelvin

          $temperatura = ( -32 + $temperatura) / 1.8; // saída em celsius
          $temperatura = $temperatura + 273.15; // saída em kelvin
          return $temperatura;
      }

}
converteTemperatura ($temperatura, $escalaOrigem, $escalaDesejada);

