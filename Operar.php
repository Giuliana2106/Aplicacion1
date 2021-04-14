<?php

    $Valor1=$_POST['V1'];
    $Valor2=$_POST['V2'];
    $Op=$_POST['Operacion'];

    $Suma=($Valor1+$Valor2);
    $Resta=($Valor1-$Valor2);
    $Multiplicacion=($Valor1*$Valor2);
    $Division=($Valor1/$Valor2);

    if ($Op == "Suma")
    {
        echo "La suma es:".$Suma;
    }
    else if ($Op == "Resta")
    {
        echo "La resta es:".$Resta;
    }
    else if ($Op == "Multiplicacion")
    {
        echo "La multiplicacion es:".$Multiplicacion;
    }
    else if ($Op == "Division")
    {
        echo "La division es:".$Division;
    }
    
?>