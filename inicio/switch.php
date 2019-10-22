<html>
<head>
    <title>switch</title>
</head>
<body>

<?php
    $dia=4;
    diaSemana($dia);

    function diaSemana($dia){
        switch ($dia){
            case 1:
                echo 'el dia 1 es lunes';
                break;
            case 2:
                echo 'el dia 2 es martes';
                break;
            case 3:
                echo 'el dia 3 es miercoles';
                break;
            case 4:
                echo 'el dia 4 es jueves';
                break;
            case 5:
                echo 'el dia 5 es viernes';
                break;
            case 6:
                echo 'el dia 6 es sabado';
                break;
            case 7:
                echo 'el dia 7 es domino';
                break;
            default:
                echo $dia.' no es un dia de la semana';
                break;
        }
    }
?>
</body>
</html>
