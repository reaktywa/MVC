<?php
$nazwa_pliku="WlasnoscIntelektualna.pdf";
$utworzony = getdate(filemtime($nazwa_pliku));
print_r($utworzony);
?>
