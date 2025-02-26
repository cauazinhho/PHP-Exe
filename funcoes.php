<?php
    $num1 = 0; //Instanciar uma variável
    $num2 = 0;
    
    function somar($num1,$num2){
        return $num1 + $num2;
    }//fim do método

    function subtrair($num1, $num2){
        return $num1 - $num2;
    }//fim do método
    
    function dividir($num1, $num2){
        if($num2 <= 0){
            return "Impossível dividir por zero!";
        }else{
            return $num1/$num2;
        }
    }//fim do método

    function multiplicar($num1, $num2){
        return $num1 * $num2;
    }//fim do método
 
//-------------------------------------------------------------------------------------------------------------------------

    function exercicio02($num1, $num2){
        if(($num1 >= 0 && $num1 <= 10) && ($num2 >= 0 && $num2 <= 10))
        {
            return "A média é: ".($num1+$num2)/2;
        }else{
            return "Informe notas entre 0 e 10!";
        }
    }//fim do método
    
// -------------------------------------------------------------------------------------------------------------------------

    // function exercicio03($num1, $num2){
        
    //     if ($num1 > $num2){
    //         return $num1 . " é maior que " . $num2;
    //     } elseif ($num1 < $num2) {
    //         return $num2 . " é maior que " . $num1;
    //     }
    // }//fim do método

    function exercicio03($num1, $num2){
        
        if ($num1 > $num2){
            return "O maior número é: ".$num1;
        }else if($num1 == $num2){
            return "Numeros iguais";
        }else{
            return "O maior número é: ". $num2;
        }
    }//fim do método

//-----------------------------------------------------

    function exercicio04($num1, $num2, $num3){
        if ()
    }
?>