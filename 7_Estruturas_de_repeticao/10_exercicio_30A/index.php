<?php


/* Exercício 30
- Crie um array com números de 1 a 20;
- Crie um loop´para este array;
- Imprima apenas pares; 
*/

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

for($i = 0; $i < count($array); $i++){

    if($array[$i] % 2 == 0){
        
       echo "Número: $array[$i] <br>";

    }

}