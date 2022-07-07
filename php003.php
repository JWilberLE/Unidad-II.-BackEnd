<!DOCTYPE html>
    <html>
        <body>
            <title>PHP 003</title>


        <h3>2 variables de tipo entero y comparar quien es el mayor</h3>
        <?php
           $x = rand(0,10);
           $y = rand(0,10);
           
       
       
       if ($x > $y) {
           echo "$x es mayor que $y " ;
       }
       elseif ($y > $x) {
           echo "$y es mayor que $x " ;
       }
       
       else{
           echo "Los numero $x , $y  son iguales" ;
       }
        ?> <hr>
        
        
        <h3>3 variables de tipo entero y comparar quien es el menor</h3>
        <?php 
            $x = rand(0,10);
            $y = rand(0,10);
            $z = rand(0,10);
    
    
        if (($x < $y) or ($x < $z)){
        echo "$x es menor que $y y $z" ;
        }
        elseif (($y < $x) or ($Sy < $z)){
        echo "$y es menor que $x y $z" ;
        }
        elseif (($z < $x) or ($z < $y)){
        echo "$z es menor que $x y $y" ;
        }
        else{
        echo "Los numero $x , $y y $z son iguales" ;
        }
        ?>


        </body>
    </html>