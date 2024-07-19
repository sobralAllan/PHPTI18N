<?php
    $num1 = 0;
    $num2 = 3;

    function somar($num1,$num2){
        return $num1 + $num2;
    }//fim do somar

    function subtrair($num1, $num2){
        return $num1 - $num2;
    }//fim do subtrair

    function multiplicar($num1, $num2){
        return $num1 * $num2;
    }//fim do multiplicar

    function dividir($num1,$num2){
        if($num2 <= 0){
            return "Impossível dividir por zero!";
        }else{
            return $num1 / $num2;
        }
    }//fim do dividir

    function escolher($num1){
        switch($num1){
            case 1:
                return "Rosa";
                break;
            case 2: 
                return "Preto";
                break;
            case 3: 
                return "White";
                break;
            default:
                return "Cor não identificada";
                break;
        }//fim do switch
    }//fim do escolher

    function converterBinario($decimal){
        $binario = "";
        while($decimal >= 1){
            $binario .= $decimal % 2;
            $decimal = $decimal / 2;
        }
        return strrev($binario);
    }//fim da conversão

    function converterDecimal($binario){
        $tamanho = strlen($binario);
        $j = $tamanho - 1;
        $i = 0;
        $decimal = 0;
        while($i < $tamanho){
            if(substr($binario,$i,1) == "1"){
                $decimal += pow(2,$j);
            }                                                                                                                
            $j--;
            $i++; 
        }
        return $decimal;
    }//fim da conversão de binário para decimal

    function converterDecimalHexa($decimal){
        $hexa = "";
        $resto = 0;
        while($decimal >= 1){
            $resto   = $decimal % 16;
            $decimal = $decimal / 16;

            switch($resto){
                case 10:
                    $hexa .= "A";
                    break;
                case 11:
                    $hexa .= "B";
                    break;
                case 12:
                    $hexa .= "C";
                    break;
                case 13:
                    $hexa .= "D";
                    break;
                case 14:
                    $hexa .= "E";
                    break;
                case 15:
                    $hexa .= "F";
                    break;
                default:
                    $hexa .= $resto;
                    break;
            }//fim do switch
        }//fim do while

        return strrev($hexa);
    }//fim do método

    function converterHexaDecimal($hexa){
        $tamanho = strlen($hexa) - 1;
        $j = $tamanho;
        $i = 0;
        $num = "";
        $decimal = 0;
        while($i <= $tamanho){
            $num = substr($hexa,$i,1);
            switch($num){
                case "A":
                    $num = 10;
                    break;
                case "B":
                    $num = 11;
                    break;
                case "C":
                    $num = 12;
                    break;
                case "D":
                    $num = 13;
                    break;
                case "E":
                    $num = 14;
                    break;
                case "F":
                    $num = 15;
                    break; 
            }
            
            $decimal += $num * pow(16,$j);
            $j--;
            $i++;
        }
        return $decimal;
    }//fim do método


    //Imprimir dos dados na tela
    echo "<br>A soma dos números é: ".somar(5,6);
    echo "<br>A subtração dos números é: ".subtrair(5,6);
    echo "<br>A multiplicação dos números é: ".multiplicar(5,6);
    echo "<br>A divisão dos números é: ".dividir(6,7);
    echo "<br>A escolha é: ".escolher(2);
    echo "<br>A conversão é: ".converterBinario(42);
    echo "<br>A conversão de binário para decimal é: ".converterDecimal("101010");
    echo "<br>A conversão de decimal para hexa é: ".converterDecimalHexa(1000);
    echo "<br>A conversão de hexa para decimal é: ".converterHexaDecimal("3E8");



?>