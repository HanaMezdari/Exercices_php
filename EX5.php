<?php

function Stars($row_length,$column_length)
{
    $row_length = 10;
     $column_length = 15;
    for ($row = 1; $row <= $row_length; $row++) {
        for ($column = 1; $column <= $column_length; $column++) {
           // I have used an extra space for pretty formatting. 
            echo "*&nbsp;";
        }
        echo '<br>';
    }  
}

?>