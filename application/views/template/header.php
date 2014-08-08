
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../favicon.ico"> -->

    <title>RCians</title>
    <link href="<?php echo config_item('base_url');?>assets/css/style.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo config_item('base_url');?>assets/bootstrap-3.2.0-dist/css/bootstrap.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo config_item('base_url');?>assets/plugins/jquery-2.1.1.min.js"></script>
    <script src="<?php echo config_item('base_url');?>assets/bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-static-top navbar-rcians" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">RCians</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" data-toggle="modal" data-target="#loginModal">Log in</a></li>
             <li><a href="#" data-toggle="modal" data-target="#registerModal">Register</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>