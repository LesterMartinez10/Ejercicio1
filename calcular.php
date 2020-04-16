<?php


   echo"<br>";  echo"<br>";  echo"<br>"; 
    
     
      
	    $valor1=$_POST['n1'];
        $valor2=$_POST['n2'];
        $operacion=$_POST['operacion'];
        $resultado= 0 ;
      

        if ($operacion=="Suma")
        {
           $resultado= $valor1+$valor2;
        }
        elseif ($operacion=="Resta")
        {  $resultado= $valor1-$valor2;

         }
         elseif ($operacion=="Multiplicacion")
        {  $resultado= $valor1*$valor2;

         }
         elseif ($operacion=="Divicion")
        {  $resultado= $valor1/$valor2;

         }          
         echo "El resultado es:".$resultado;
?>