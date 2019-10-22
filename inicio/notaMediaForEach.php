<html>
<head>
    <title>nota media foreach</title>
</head>
<body>

<?php
$estudiantes=[
        'amaia'=>'6.5',
        'ane'=>'7.5',
        'maite'=>'5.2',
        'lorea'=>'9.2',
        'markel'=>'6.8',
        'urtzi'=>'8.4',
];
imprimir($estudiantes);
function imprimir($grupos){
    echo '<ul>';
        foreach ($grupos as $key=>$valor){
            echo '<li>';
            echo 'la nota media de '.$key.' es '.$valor;
            echo '</li>';
        }
    echo '</ul>';
}
?>
</body>
</html>