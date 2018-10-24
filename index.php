<?php
$text = "Iveskite skaiciu";
if (isset($_POST["vardas"])) {
    $vardas = $_POST["vardas"];

    $text = "pakelta kvadratu=" . kvadratas($vardas);
} else {
    echo "Neivesti duomenys";
}
function kvadratas($vardas) {
    return $vardas ** 2;
}
?>
<html>
    <style>

    </style>
    <body>
        <form action="index.php" method="POST">
            <h1> Skaicius:<br></h1>
            <input name="vardas" type="text" ><br>

            <input type="submit">
        </form>
        <?php print $text ?>
    </body> 
</html>