<?php
    $num1 = 0; // Instanciar uma variável
    $num2 = 0;

    
    function soma($num1, $num2) {
        return $num1 + $num2;
    } // fim do método

    function subtrair($num1, $num2) {
        return $num1 - $num2;
    } // fim do método
    
    function dividir($num1, $num2) {
        if ($num2 <= 0) {
            return "Impossível dividir por zero!";
        } else {
            return $num1 / $num2;
        }
    } // fim do método

    function multiplicar($num1, $num2) {
        return $num1 * $num2;
    } // fim do método



    //------------------------------------------------------------------------------------------------------------------------

    function exercicio02($num1, $num2) {
        if (($num1 >= 0 && $num1 <= 10) && ($num2 >= 0 && $num2 <= 10)) {
            return "A média é: " . ($num1 + $num2) / 2;
        } else {
            return "Informe notas entre 0 e 10!";
        }
    } // fim do método

    //-------------------------------------------------------------------------------------------------------------------------

    function exercicio03($num1, $num2) {
        if ($num1 > $num2) {
            return "O maior número é: " . $num1;
        } else if ($num1 == $num2) {
            return "Números iguais";
        } else {
            return "O maior número é: " . $num2;
        }
    } // fim do método

    //-----------------------------------------------------

    function exercicio04($nota1, $nota2, $nota3) {
        if (($nota1 < 0 || $nota1 > 10) || ($nota2 < 0 || $nota2 > 10) || ($nota3 < 0 || $nota3 > 10)) {
            return "Informe notas entre 0 e 10!";
        }

        $media = ($nota1 + $nota2 + $nota3) / 3;
        $resultado = "Média: " . number_format($media, 2) . "<br>";

        if ($media < 5) {
            $notaNecessaria = 10 - $media + 2;
            $resultado .= "Situação: Aluno em recuperação<br>";
            $resultado .= "Nota necessária para passar: " . number_format($notaNecessaria, 2);
        } elseif ($media < 7) {
            $notaNecessaria = 10 - $media;
            $resultado .= "Situação: Aluno em prova final<br>";
            $resultado .= "Nota necessária na prova final: " . number_format($notaNecessaria, 2);
        } else {
            $resultado .= "Situação: Aluno aprovado por média.";
        }

        return $resultado;
    }

    function exercicio05($cor) {
        switch ($cor) {
            case 'verde':
                return "O preço do CD Verde é: R$10,00";
            case 'azul':
                return "O preço do CD Azul é: R$20,00";
            case 'amarelo':
                return "O preço do CD Amarelo é: R$30,00";
            case 'vermelho':
                return "O preço do CD Vermelho é: R$40,00";
            default:
                return "Cor inválida.";
        }
    }
 
    //------------------------------------------------------------------------------------------------------------------------
    function exercicio07($brancos, $validos, $nulos, $eleitores) {
        if ($brancos + $validos + $nulos == $eleitores){
            $brancos = porcentagem($brancos, $eleitores);
            $validos = porcentagem($validos, $eleitores);
            $nulos = porcentagem($nulos, $eleitores);

            return "Percentual de votos brancos foi: $brancos% \n
                    Votos nulos: $nulos% \n
                    Votos válidos: $validos%";
        }else{
            return "Total de eleitores é diferente do total de votos!";
            } 
            // fim do método
        }

    function porcentagem($total, $eleitores) {
        return ($total * 100) / $eleitores;
    }

    function exercicio08($salario, $percentual) {
        return $salario + ($salario * $percentual / 100);
    }

    function exercicio09($custoFabrica) {
        $percentualDistribuidor = 28; 
        $percentualImpostos = 45;     
        
        $distribuidor = ($custoFabrica * $percentualDistribuidor) / 100;
        $impostos = ($custoFabrica * $percentualImpostos) / 100;
        
        $custoFinal = $custoFabrica + $distribuidor + $impostos;
        
        return $custoFinal;
    }

    function exercicio10($carrosVendidos, $totalVendas, $salarioFixo, $comissaoPorCarro) {
        $comissaoFixa = $carrosVendidos * $comissaoPorCarro;
        $comissaoVariavel = ($totalVendas * 5) / 100;
        $salarioFinal = $salarioFixo + $comissaoFixa + $comissaoVariavel;

        return $salarioFinal;
    }

    
    function exercicio11($anos, $meses, $dias) {

        $diasPorAno = 365;
        $diasPorMes = 30;

        $idadeEmDias = ($anos * $diasPorAno) + ($meses * $diasPorMes) + $dias;

        return $idadeEmDias;
    }

    
    function exercicio12($quantidade) {
        
        $precoNormal = 1.30;  
        $precoDesconto = 1.00; 

        
        if ($quantidade < 12) {
            
            $custoTotal = $quantidade * $precoNormal;
        } else {
            
            $custoTotal = $quantidade * $precoDesconto;
        }

        return number_format($custoTotal, 2, ',', '.');
    }

     
    function exercicio13($salarioFixo, $vendasTotais) {
         
        $comissaoBase = 3 / 100;  
        $comissaoExtra = 5 / 100; 

        
        $comissao = 0;

         
        if ($vendasTotais <= 1500) {
            $comissao = $vendasTotais * $comissaoBase;
        } else {
             $comissao = 1500 * $comissaoBase;
            
             $comissao += ($vendasTotais - 1500) * $comissaoExtra;
        }

         $salarioTotal = $salarioFixo + $comissao;

        return number_format($salarioTotal, 2, ',', '.'); 
    }


    
    function exercicio14($numeroConta, $saldo, $debito, $credito) {
        
        $saldoAtual = $saldo - $debito + $credito;

        if ($saldoAtual >= 0) {
            return "Número da conta: $numeroConta<br>Saldo atual: R$ " . number_format($saldoAtual, 2) . "<br>Saldo Positivo";
        } else {
            return "Número da conta: $numeroConta<br>Saldo atual: R$ " . number_format($saldoAtual, 2) . "<br>Saldo Negativo";
        }
    }

     
    function exercicio15($numero) {
        $tabuada = "Tabuada de $numero:";
        $tabuada .= "<table class='table table-bordered'>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            $tabuada .= "<tr><td>$numero x $i = $resultado</td></tr>";
        }
        $tabuada .= "</table>";
        return $tabuada;
    }

    function exercicio16($n) {
        $valores = "Valores inteiros entre 1 e $n:<br>";
        for ($i = 1; $i <= $n; $i++) {
            $valores .= "$i<br>";
        }
        return $valores;
    }

    



?>
