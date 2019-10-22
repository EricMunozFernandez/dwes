<html>
<head>
    <title>Agenda Contactos While</title>
</head>
<body>

<?php
    $contactos=[
        array(
            'nombre'=>'Amaia',
            'apellido'=>'Gorbea Jainaga',
            'telefono'=>'945010101',
            'email'=>'agorbea@php.net',
        ),
        array(
            'nombre'=>'Ane',
            'apellido'=>'Larrain Ogeta',
            'telefono'=>'945010101',
            'email'=>'alarrain@php.net',
        ),
        array(
            'nombre'=>'Maite',
            'apellido'=>'Murgiondo Lekue',
            'telefono'=>'945010102',
            'email'=>'mmurgiondo@php.net',
        ),
        array(
            'nombre'=>'Lorea',
            'apellido'=>'Aranceta Otxoa',
            'telefono'=>'945010102',
            'email'=>'laranceta@php.net',
        ),
        array(
            'nombre'=>'Markel',
            'apellido'=>'Gurrutxaga Abarra',
            'telefono'=>'945010102',
            'email'=>'mgurrutxaga@php.net',
        ),
        array(
            'nombre'=>'Urtzi',
            'apellido'=>'Iriondo Baiona',
            'telefono'=>'945010102',
            'email'=>'uriodo@php.net',
        ),
    ];
    $clavesArray=array_keys($contactos[0]);

    $x=0;
    echo '<table>';
    echo '<tr>';
    while($x<count($clavesArray)){
        echo '<th>';
        echo $clavesArray[$x];
        echo '</th>';
        $x++;
    }
    echo '</tr>';

    $z=0;
    while($z<count($contactos)){
        echo '<tr>';
            echo'<td>';
            echo $contactos[$z]['nombre'];
            echo '</td>';
            echo'<td>';
            echo $contactos[$z]['apellido'];
            echo '</td>';
            echo'<td>';
            echo $contactos[$z]['telefono'];
            echo '</td>';
            echo'<td>';
            echo $contactos[$z]['email'];
            echo '</td>';
        echo '</tr>';
        $z++;
    }
    echo'</table>';
?>
</body>
</html>