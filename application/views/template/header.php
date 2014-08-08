
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
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap-3.2.0-dist/css/bootstrap.css" rel="stylesheet">
	<script src="assets/plugins/jquery-2.1.1.min.js"></script>
	<script src="assets/plugins/handlebars-v1.3.0.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/plugins/jquery-2.1.1.min.js"></script>
    <script src="assets/bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
  </head>

  <body>
    <?php if(!$this->session->userdata('ssotoken'))
    { ?>
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
    <?php }else{ ?>
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
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">Meal</a></li>
            <!-- <li><a href="#contact">Projects</a></li> -->
             <li><a href="newsLetters">News Letter</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Activities <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Events</a></li>
                <li><a href="#">Announcement</a></li>
                <li><a href="#">Poll</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a id="logout" href="#">Log out</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <?php } ?>
    <!-- Static navbar -->
   <script>
       $("#logout").on("click", function(){
            $.ajax({
                url: "<?php echo config_item('base_url_api');?>rcian/logout",
            }).done(function( msg ) {
                window.location.href = ".";
          });
       })
       
   </script>