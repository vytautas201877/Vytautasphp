
<?php 
$fuel_price = 1.3;
$fuel =7.5;
$nuvaziuoti_km = rand (10, 10000);
$litrai = $nuvaziuoti_km * $fuel /100;
$reikia_pinigu =$nuvaziuoti_km * $fuel/100*$fuel_price;
print $nuvaziuoti_km ."km--  " . $reikia_pinigu .  "  eur--  " . $litrai . " litrai";
$src = 'https://g3.dcdn.lt/images/pix/880x550/Kr_IhOGsxeU/ramunas-karbauskis-79349521.jpg';
?>
<html>
    <title>
        
    </title>
    <body>
        <img src = "<?php print $src?>">
        
        <p>
            
        </p>
          
        
    </body>
    
</html>