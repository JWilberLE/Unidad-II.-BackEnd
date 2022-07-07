<!DOCTYPE html>
    <html>
        <body>
            <title>PHP 002</title>

            <h4 style="text-align: center;">PHP</h4>
             <?php
            // declaracion de variables
                $numVar1 = 10;
                $numVar2 = 7;
                $numVar3 = 0.9;
                $numVar4 = 9.9;
                $txt1 = 'Como';
                $txt2 = 'Dice';
                $txt3 = 'Papi';
                $txt4 = 'Bicho';
                $txt5 = '_Siiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiuuuuuuuuuuuu';


            // creacion de la operacion (suma)
                 $suma = $numVar1 + $numVar2;

             // declaracion del resultado
                echo 'La suma de enteros es ' . $suma;
            ?> <hr>
             <?php
            // creacion de la operacion (suma de decimales)
                $suma2 = $numVar3 + $numVar4;

            // declaracion del resultado
                echo 'La suma de decimales es ' . $suma2;
                ?><hr>
                <?php
            // creacion de la operacion (multiplicacion)
                $multiplicaion = $numVar1 * $numVar2;
            
            // declaracion del resultado
                echo 'La multiplicaion de enteros es ' . $multiplicaion;
                ?><hr>
                <?php
            // creacion de la operacion (multiplicacion de decimales)
                $multiplicaion2 = $numVar3 * $numVar4;
            
            // declaracion del resultado
                echo 'La multiplicaion de decimales es ' . $multiplicaion2;
                ?><hr>
                <?php
            // creacion de la concatenacion
                $text_complet = $txt1 . $txt2 . $txt3 . $txt4 . $txt5;

            // declaracion del resultado
                echo 'La concatenacion de texto es ' . $text_complet;
                ?><r>



        </body>
    </html>