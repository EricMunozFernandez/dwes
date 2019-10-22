<html>
<head>
    <title>Agenda Contactos Do While</title>
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

echo '<table>';
echo '<tr>';
    echo '<th>';
    echo 'nombre';
    echo '</th>';
    echo '<th>';
    echo 'apellido';
    echo '</th>';
    echo '<th>';
    echo 'telefono';
    echo '</th>';
    echo '<th>';
    echo 'email';
    echo '</th>';
echo '</tr>';

$z=0;
do{
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
while($z<count($contactos));
echo'</table>';
?>
</body>
</html>
