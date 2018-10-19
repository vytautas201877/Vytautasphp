
<?php 
$distance_km = rand (10, 1300);
$fuel_price = 1.3;
$fuel_cons =7.5;
$my_money = 100;
$tank_size = 40;
$tank_distance_km = $tank_size / $fuel_cons *100;
$pilti_kartu = $distance_km /($tank_size / $fuel_cons *100) ;

$money_distance_km = $my_money /$fuel_price /$fuel_cons *100;
$src = 'https://i.ebayimg.com/images/g/osQAAOSwbwlXBS-T/s-l300.jpg';
$foto ='https://image.shutterstock.com/image-vector/symbol-icon-yellow-unhappy-face-260nw-410279539.jpg';
if ($distance_km<=$money_distance_km):
    print "galima nuvaziuoti,sekmingos keliones" ; 
  else:
    print "neuztenka pinigu kelionei";
  $pilti_kartu = 0;
  endif;
?>
<html>
    <title>        
    </title>
    <body>
        <img src = "<?php print $src?>">
        <img src = "<?php print $foto?>">
        <p><?php print 'Keliones atstumas km ='. ceil ($distance_km)   ?></p> 
        <p><?php print "Galima nuvaziuoti su pilnu baku km=" . ceil($tank_distance_km) ?></p>
        <p><?php print "Pinigu uzteks nuvaziuoti km=" . ceil ($money_distance_km)  ?></p>
         <p><?php print 'uzpilta kartu=' . ceil($pilti_kartu)    ?></p> 
        
    </body>    
</html>