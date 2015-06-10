<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php // wp_head(); // wordpress head functions ?>
        
<!-- Link to HTML5 Boilerplate (Node.js) -->
<!-- And get its stylesheet -->
		<link href="<?php theHTML5BoilerplateDirectory(); ?>css/normalize.css" rel="stylesheet">
        
<!-- Link to Skeleton (Node.js) -->
<!-- And get its stylesheets -->
		<link href="<?php theSkeletonDirectory(); ?>css/skeleton.css" rel="stylesheet">
		<link href="<?php theActiveThemeDirectory(); ?>css/main.css" rel="stylesheet">
        
<!-- Link to HTML5 Boilerplate (Node.js) -->
<!-- And get modernizr -->

		<script src="<?php theHTML5BoilerplateDirectory(); ?>js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        
<!-- Link to Responsive Grid jQuery Plugin -->

    </head>


	<body <?php body_class(); ?>>
		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->


<!-- Basic Page Needs -->
  <meta charset="utf-8">
  <title>Harry Seaton | Tickets </title>
  <meta name="description" content="">
  <meta name="TOMSHARMAN.COM" content="">

<!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- FONT -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

<body>

  <!-- Nav-->
  <div class="container"  id="nav-id">
    <div class="row">
        <div class="three columns" id="nav-logo" href="home">
            <a href="home"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/05/hslogo.jpg" href="home" width="100%"></a>
        </div>
                <div class="nine columns">
                    <div class="nav">
                <a href="tickets" class="nav-text" id="tickets-icon"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/05/tickets-icon.png" alt="Tickets" height="40em"></a>
                <a href="watch" class="nav-text" id="watch-icon"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/05/watch-icon.png" alt="Watch" height="35em"></a>
                <a href="connect" class="nav-text" id="connect-icon"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/05/connect-icon.png" alt="Connect" height="40em"></a>
                    </div>
                </div>
      </div>
    </div>
    