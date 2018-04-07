
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="A blog by Remco van Essen, covering both code struggles and hopefully some fixes!">
    <meta name="author" content="Remco van Essen">
    <link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">

<?php wp_head(); ?>
  </head>

  <body>
    <div class="blog-masthead">
    <nav class="blog-nav">
      <a class="blog-nav-item active" href="#">Home</a>
      <?php wp_list_pages( '&title_li=' ); ?>
    </nav>
  </div>
</div>
