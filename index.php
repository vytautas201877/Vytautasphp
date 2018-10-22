<?php
$products = ['kebabas' => 2.50, 'alus' => 1.89, 'burokai' => 1.50];

?>

<html>
    <head>
        <title>Produktai</title>
        <style>
            .products {
                width: 150px;
                height: 150px;
            }
            .kebabas {
                background-image: url(https://foodout.lt/uploads/dishes/thumb_type1_noid_151231105642_758808d6c22af0b9af63df51a31d898f.png);
            }
            .alus {
                background-image: url(https://g2.dcdn.lt/images/pix/file59627425_6747ce14.jpg);
            }
            .burokai {
                background-image: url(http://www.dietosmeniu.lt/data/ingredients/large/burokeliai.jpg);
            }
        </style>
    </head>
    <body>
        <?php foreach($products as $key => $value): ?>
        <div class="products <?php print $key; ?>">
            <?php print $value; ?>
        </div>
        <?php endforeach; ?>
    </body>
</html>