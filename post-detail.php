<?php

  $slug = $_GET['slug'];

  include 'data.php';
  include 'data-comments.php';

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
               <div class="immagine">
                 <img src="<?php echo $post['image']; ?>" alt="">
               </div>
               <div class="titolo">

                   <h1><?php echo $post['title']; ?></h1>

               </div>
               <div class="giorno-pubblicazione">
                 <p><?php echo date($post['published_at']); ?></p>
               </div>
               <div class="contenuto">
                 <p class="testo-contenuto"><?php echo $post['content']; ?></p>
               </div>
               <div class="tag">
                 <?php foreach($posts as $row => $innerArray){ ?>
                   <?php foreach($innerArray as $innerRow => $value){ ?>
                     <?php foreach ($value as $key => $tag) { ?>
                        <p class="tag-contenuto"><?php echo $tag; ?></p>
                     <?php } ?>

                   <?php } ?>

                 <?php } ?>

               </div>
             </div>

             <div class="commenti">
               <h3>Commenti:</h3>
               <?php foreach ($comments as $slugs => $comment){ ?>
                 <?php if ($slugs == $slug) { ?>
                 <?php foreach ($comment as $key => $value) { ?>
                   <p>Nome: <?php echo $value['name']; ?></p>
                   <p>Email: <?php echo $value['email']; ?></p>
                   <p>Commento: <?php echo $value['body']; ?></p>
                   <br>
               <?php } ?>
               <?php } ?>
             <?php } ?>
             </div>


           </div>
         <?php } ?>
       <?php } ?>



     </body>
   </html>
