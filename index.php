<?php
$text=vardas; 
?>
<html>
    <style>
       
    </style>
    <body>
        <form action="index.php" method="POST">
  Vardas:<br>
  <input name="vardas" type="text" ><br>
  
  <input type="submit">
</form>
        <?php print $text?>
    </body> 
</html>