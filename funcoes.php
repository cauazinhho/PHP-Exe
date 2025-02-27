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

    function exercicio04($nota1, $nota2, $nota3) {
        if (($nota1 < 0 || $nota1 > 10) || ($nota2 < 0 || $nota2 > 10) || ($nota3 < 0 || $nota3 > 10)) {
            return "Informe notas entre 0 e 10!";
        }

        $media = ($nota1 + $nota2 + $nota3) / 3;
        $resultado = "Média: " . number_format($media, 2) . "\n";

        if ($media < 5) {
            $notaNecessaria = 10 - $media + 2;
            $resultado .= "Situação: Aluno em recuperação\n";
            $resultado .= "Nota necessária para passar: " . number_format($notaNecessaria, 2);
        } elseif ($media < 7) {
            $notaNecessaria = 10 - $media;
            $resultado .= "Situação: Aluno em prova final\n";
            $resultado .= "Nota necessária na prova final: " . number_format($notaNecessaria, 2);
        } else {
            $resultado .= "Situação: Aluno aprovado por média.";
        }

        return $resultado;
    }

    function exercicio07($brancos, $validos, $nulos, $eleitores ) {
        if ($brancos + $validos + $nulos) {
            $brancos = porcentagem($brancos, $eleitores);
            $validos = porcentagem($validos, $eleitores);
            $nulos = porcentagem($nulos, $eleitores);

            return "Percentual de votos brancos foi: $brancos%\n
                    Votos nulos: $nulos%\n
                    Votos validos: $validos%";
                }else{
                    return "Total de eleitores é diferentes do total";
                }
    }//fim do metodo


    function porcentagem($total, $eleitores){
        return($total * 100)/$eleitores;
    }

    



?>