<html>
  <head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="<?php echo BASE_URL; ?>/public/css/main.css" rel="stylesheet" type="text/css">

    <title><?php echo $article->title; ?></title>

  </head>
  　　
  <body>

    <h2><?php echo $article->title; ?></h2>

    <?php echo $article->content; ?>

  </body>

</html>
