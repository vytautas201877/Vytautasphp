<?php
$fridge = ['Jogurtas', 'Kebabas', 'Alus', 'Sugede vaisiai', 'Supuves avokadas'];
$i = rand(0, 4);
$text = $fridge[$i].'=elementas======'.$i ;
//$text .= $i;
?>
<html>
    <body>
        <h1>Saldytuvo Turinys</h1>
        <p><?php print $text ?></p>
    </body>
</html>