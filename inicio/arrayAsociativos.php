<html>
<head>
    <title>array Asociativo</title>
</head>
<body>

<?php

$asociativo=[
    'uno'=>'one',
    'dos'=>'two',
    'casa'=>'house',
    'coche'=>'car',
    'tren'=>'train'
];

echo 'la traduccion de uno es '.$asociativo['uno'].'<br>';
echo 'la traduccion de dos es '.$asociativo['dos'].'<br>';
echo 'la traduccion de casa es '.$asociativo['casa'].'<br>';
echo 'la traduccion de coche es '.$asociativo['coche'].'<br>';
echo 'la traduccion de tren es '.$asociativo['tren'].'<br><br><br><br>';



/*Emails*/

    $diccionario=[
        'usuario1'=>array(
            'nombre'=>'eric',
            'apellido'=>'munoz',
            'email'=>'eric.munoz@ikasle.egibide.org'),
        'usuario2'=>array(
            'nombre'=>'alex',
            'apellido'=>'pedraza',
            'email'=>'alex.pedraza@ikasle.egibide.org'),
        'usuario3'=>[
            'nombre'=>'jon',
            'apellido'=>'ramos',
            'email'=>'jon.ramos@ikasle.egibide.org'],
    ];

    $usuario='usuario2';

    $email='email';

    getDatos($diccionario,$usuario,$email);



    function getDatos($arrayAs,$usuario,$email){
        print_r($arrayAs[$usuario][$email]);
    }
?>
</body>
</html>
