<?php

  $slug = $_GET['slug'];

  include 'data.php';

   ?>

   <!DOCTYPE html>
   <html lang="it" dir="ltr">
     <head>
       <link rel="stylesheet" href="css/app.css">
       <meta charset="utf-8">
       <title>BlogPress - <?php echo $slug; ?></title>
     </head>
     <body>

       <?php foreach ($posts as $post) { ?>
         <?php if ($post['slug'] == $slug) { ?>
           <div class="container">

             <div class="post">
               <div class="titolo">

                   <h1><?php echo $post['title']; ?></h1>

               </div>
               <div class="giorno-pubblicazione">
                 <p><?php echo date($post['published_at']); ?></p>
               </div>
               <div class="contenuto">
                 <p class="testo-contenuto"><?php echo trim($post['content']); ?></p>
               </div>
               <div class="tag">
                 <p class="tag-contenuto"><?php echo var_dump($post['tag']); ?></p>
               </div>
             </div>


           </div>
         <?php } ?>
       <?php } ?>



     </body>
   </html>
