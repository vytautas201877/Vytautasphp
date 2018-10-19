<?php
$fridge= array("Jogurtas", "Kebabas", "Alus", "Sugede vaisiai", "supuves avokadas");
?>
<html>
    <body>
        <h1>Saldytuvo turinys</h1>
        <?php for($i = 0; $i<5;$i++):?>
        <p><?php print $fridge[$i];?></p>
        <?php endfor;?>
    </body>
</html>