<?php

function primo($num){
    if ($num==1) {
        return false;
    }
    if ($num ==2){
        return true;
    }
    $cont=0;
    for($i=2;$i<=$num;$i++)
    {
        if($num%$i==0)
        {
            if(++$cont>1)
            //Incrementa $cont en uno, y luego retorna $cont
                return false;
        }
    }
    return true;
}
