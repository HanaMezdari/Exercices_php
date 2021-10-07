<?php
     $fid = fopen ("file.txt", "r");
     while ($ligne = fgets($fid, 256))
    {
          $tab = explode (" ", $ligne);
         echo $tab[0] . " " . $tab[1] . " " . $tab[2]. "<BR>";
    }
    fclose($fid);
?>
