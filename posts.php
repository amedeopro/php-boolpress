<?php

  include 'data.php';
  include 'function.php';

 ?>


 <!DOCTYPE html>
 <html lang="it" dir="ltr">
   <head>
     <link rel="stylesheet" href="css/app.css">
     <meta charset="utf-8">
     <title>BoolPress - Posts</title>
   </head>
   <body>

       <!-- <?php
          $baseUrl = 'http://localhost';
          $baseUrl .= $_SERVER["REQUEST_URI"];

          var_dump($baseUrl);

      ?> -->

     <div class="container">
       <?php foreach ($posts as $post) { ?>
       <div class="post">
         <div class="titolo">
           <a href="http://localhost/php-boolpress/post-detail.php?slug=<?php echo $post['slug']; ?>">
             <h1><?php echo $post['title']; ?></h1>
           </a>
         </div>
         <div class="giorno-pubblicazione">
           <p>Pubblicato il <?php $date = DateTime ::createFromFormat("d/m/Y H:i:s",$post['published_at']); echo $date->format('d F ')?> alle
           <?php echo $date->format('H') ?></p>
         </div>
         <div class="estratto">
           <?php echo substr($post['content'],0,150); ?>...
         </div>
       </div>

       <?php } ?>
     </div>

   </body>
 </html>
