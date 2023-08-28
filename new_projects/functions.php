<?php

    // A function calculating depending on given operator 
    function Calculating($num01,$num02,$oper) {
        switch ($oper) {
            case 'add' :
                $sum =$num01 + $num02 ; 
                break ; 
            
            case 'sub' :
                $sum =$num01 - $num02 ; 
                break ;
            case 'mul' :
                $sum =$num01 * $num02 ; 
                break ;

            case 'div' :
                $sum =$num01 / $num02 ; 
                break ;
            
            default :
                $sum = "There is an error . Recheck please .";
        }
        return $sum ; 
    }

    $num01 = $_GET['num01'] ; 
    $num02 = $_GET['num02']; 
    $oper  = $_GET['operator']; 

    echo 'The value is : '. Calculating($num01,$num02,$oper);
