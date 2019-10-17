<html>
    <head>
        <title>Hola Mundo</title>
    </head>
    <body>
        <?php
            $mensaje='adios mundo';
            echo '<p>hola mundo</p>';
            $mensaje2='cruel';
            $texto=$mensaje . ' ' . $mensaje2;
            echo $texto.'<br>';

            $texto2= "{$mensaje} {$mensaje2}"; //solo comillas dobles
            echo $texto2."<br>";

            $num1=10;
            $num2=5;
            $resta=$num1-$num2;
            echo 'la resta de ' . $num1 . ' y ' . $num2 . ' es= ' . $resta . "<br>";
            $multi=$num1*$num2;
            echo 'la resta de '.$num1.' y '.$num2.' es= '.$multi."<br>";
            $mayor=esMayor($num1,$num2);
            echo $mayor."<br>";



            $texto1='texto1';
            $texto2='texto2';
            $cadena=unir($texto1='definitivo',$texto2);
            echo $cadena."<br>";


            $arr=array('Paris','Berlin','Amsterdam','Praga');
            $posicion=3;
            echo getValor($arr,$posicion);


            function getValor($arr,$posicion){
                return $arr[$posicion];
            }

            function esMayor($num1,$num2){
                $mayor=$num1>$num2;
                return $mayor;
            }

            function unir($texto1,$texto2){
                return $cadena=$texto1.$texto2;
            }
        ?>
    </body>
</html>