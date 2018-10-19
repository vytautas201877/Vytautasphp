<?php
$fridge = array("Jogurtas", "Kebabas", "Alus", "Sugede vaisiai", "supuves avokadas");
$noriu = ["Kebabas", "Alus", "Pica", "traktorius"];
$tekstas = '';
foreach ($fridge as $nr => $kazkas) {
    if (in_array($kazkas, $noriu)) {
        unset ($fridge[$nr]);
    }
}
foreach ($fridge as $ka){
    $tekstas.=$ka;
}
var_dump($fridge)
 ?>
    
<html>
    <body>
        <h1>Ar viska turiu saldytuve?</h1>
        <p><?php print ($tekstas); ?></p>
    </body>
</html>