<?php
$fridge = [];

$nusipirkau = ['cola' => '2.50', 'viskis' => '10.99', 'vodka' => '5.99', 'kiwi' => '1.99', 'citrina' => '0.99', 'alus' => '1.99'];
$pirkau = ['cola' => '2.50', 'kiwi' => '1.99', 'citrina' => '0.99'];

function shuffle_assoc($my_array) {
    $keys = array_keys($my_array);

    shuffle($keys);

    foreach ($keys as $key) {
        $new[$key] = $my_array[$key];
    }
    return $new;
}
?>
<html>
    <body>
        <h2>
            Produktus i saldytuva sudejau tokia tvarka:
        </h2>
        <?php foreach (shuffle_assoc($pirkau) as $key => $value) : ?>
            <div>
                <?php print "$key uz $value"; ?>
            </div>
        <?php endforeach; ?>
    </body>
</html>