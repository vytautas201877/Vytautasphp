<?php
$atsakymai = ["taip", "ne", "galbut", "zopa"];
$text = "";
if (isset($_POST["vardas"]) && strlen($_POST["vardas"])>0) {
    $vardas = $_POST["vardas"];
    $text = $vardas . "? atsakymas:" . atsakymas($atsakymai);
} 

else {
   echo "Neivestas klausimas  ";
}

function atsakymas($atsakymai) {

    $randatsakymas = $atsakymai [rand(0, (count($atsakymai)) - 1)];
    return $randatsakymas;
}
?>
<html>
    <style>

    </style>
    <body>
        <form action="index.php" method="POST">
            <h1> Klausimas:<br></h1>
            <input name="vardas" type="text" ><br>             
            <input type="submit">
        </form>
<?php print $text ?>
    </body> 
</html>