<?php
$Fridge = [
    "pienas" => 1,
    "duona" => 2,
    "agurkas" => 3,
    "kiausai" => 5
];
$index = array_keys($Fridge);
$randindx = rand(0, count($index) - 1);
$randFridgeElement = $index[$randindx];
$text = "Produktas=" . $randFridgeElement . "-" . $Fridge[$randFridgeElement] . "eur";
?>
<html>
    <body>
        <h1>Ar viska turiu saldytuve?</h1>
        <p><?php print $text ?></p>
    </body>
</html>