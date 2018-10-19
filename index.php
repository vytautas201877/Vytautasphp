<?php
$mug_img = "https://www.displayfakefoods.com/store/pc/catalog/2311-lg.jpg";
$wc_img = "https://www.redrockdecals.com/media/catalog/product/cache/1/image/a77218673b5816e3a3c5af58dbd919ab/7/0/7018_wc.jpg";
$out_img ="https://www.emojimeaning.com/img/img-apple-160/1f92e.png";
$darken = 0.1;
$beer_price = 3.49;
$total = $beer_price;
$time_per_beer = 60;
$total_time = 0;
date_default_timezone_set('Europe/vilnius');
?>
<html>
    <head>
        <style>
            .div1 {
                background-image: url(<?php print $mug_img; ?>);
                background-size: cover;
                width: 100px;
                height: 100px;
            }
            .div2 {
                width: 100px;
                height: 100px;
                position: relative;
                top: -100px;
            }
            .wc {
                width: 100px;
                height: 100px;
                background-image: url(<?php print $wc_img; ?>);
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <?php for ($x = 1; $x < 8; $x++): ?>
            <div>
                <span>Bokalas nr. <?php print ($x); ?></span>
                <span>|| Total spent so far: <?php print $total;$total += $beer_price;?> €</span>
                <span>|| Isgerimo laikas: <?php print date('G:i', strtotime("+$total_time minutes"));$total_time += $time_per_beer;?></span>
                <div class="div1" style="filter: blur(<?php print ($x-1); ?>px);"></div>
                <div class="div2" style="background-color: rgb(0,0,0,<?php print $darken; $darken += 0.05;?>);"></div>
                <?php if ($x % 2 == 0): ?>
                    <div class="wc"></div>
                <?php endif; ?>
            </div>
        <?php endfor; ?>
        <div> img src = <?php print $out_img; ?> </div>
    </body>
</html>



Collapse 