<html>
  <head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <link href="<?php echo BASE_URL; ?>/public/css/main.css" rel="stylesheet" type="text/css">

    <title><?php echo $article->title; ?></title>

  </head>
  　　
  <body>

    <nav class="navbar navbar-default navbar-fixed-top" style="opacity: .9" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">部落格</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="/">Blog</a></li>
                <li><a href="https://github.com/xiaominge" target="_blank">GitHub</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>

<div class="row" style="padding: 70px 0px 100px 0px;">
  <div class="container center-block">
    <div class="col-md-2" style="width:18%;"></div>
    <div class="col-md-8 col-sm-12" style="width:64%; border: 1px solid LightGrey; padding:5% 5% 5% 5%;">
      <h2><?php echo $article->title; ?></h2>
      <?php echo $article->content; ?>
    </div>
    <div class="col-md-2" style="width:18%;"></div>
  </div>
  </div>
  </body>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</html>
