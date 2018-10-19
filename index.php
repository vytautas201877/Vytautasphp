<?php
$fridge = ["Jogurtas", "Kebabas", "Alus", "Sugede vaisiai", "supuves avokadas"];
$noriu = ["Kebabas", "Alus", "Pica", "traktorius"];
$tekstas = null;
foreach ($noriu as $kazkas) {
    if (in_array ($kazkas, $fridge)) {
        $tekstas .= "$kazkas: Turiu \n";
    } else {
        $tekstas .= "$kazkas: Neturiu :-) \n";
    }
}
?>
<html>
    <body>
        <h1>Ar viska turiu saldytuve?</h1>
        <p><?php print nl2br($tekstas); ?></p>
    </body>
</html>