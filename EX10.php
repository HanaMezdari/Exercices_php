<?php

function table($nbr1, $nbr2)
{
    $table = '<table>';
    for($a=1; $a<=$nbr1; $a++){
        $table .= '<tr>';
        for($b=1; $b<= $nbr2;$b++){
            $table .='<td>'.$a*$b.'</td>';
        }
        $table .= '</tr>';
    }
    $table .= '</table>' ;
    return $table;
}
echo table(10,10);

?>