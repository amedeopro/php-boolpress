<?php

  $slug = $_GET['slug'];

  include 'data.php';

  foreach ($posts as $post) {
    if ($post['slug'] == $slug) {
      echo $post['title'];
    }
  }

 ?>
