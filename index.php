<html>
   <body>
       <?php for ($i = 0; $i < 70; $i = $i + 10): ?>
           <div style ="background-color: hsl(120, 60%, <?php print 70 - $i; ?>%);">
               <img style="filter: blur(<?php print $i ?>px)" class="IMG" src ="https://ichef.bbci.co.uk/news/660/cpsprodpb/E4CB/production/_95717585_happy.jpg
">
           </div>
       <?php endfor; ?>
   </body>
</html>