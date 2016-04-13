<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="<?= THEME_URL; ?>/assets/css/base.css">
	<link rel="stylesheet" href="<?= THEME_URL; ?>/assets/css/gridset.css">
	<link rel="stylesheet" href="<?= THEME_URL; ?>/assets/css/select2.min.css">
	<link rel="stylesheet" href="<?= THEME_URL; ?>/style.css">
	<link rel="stylesheet" href="<?= THEME_URL; ?>/assets/css/responsive.css">

	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>

	<!-- JS
	================================================== -->
	<script src="<?= THEME_URL; ?>/assets/js/select2.min.js"></script>
	<script src="<?= THEME_URL; ?>/assets/js/scripts.js"></script>

	<!-- HTML 5 SUPPORT
	================================================== -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->


</head>
<body <?php body_class(); ?>>


<!-- Google analytics -->
<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59581671-14', 'auto');
  ga('send', 'pageview');

</script>


<!-- =================================================
		header
================================================== -->
<header>
	
	<div class="container">

		<div class="row">

			<div class="span12">

				<?php $header_logo = get_field('header-logo', 'option');  ?>

				<a href="<?= SITE_URL; ?>"><img src="<?php echo $header_logo['url']; ?>" alt="<?php echo $header_logo['alt']; ?>"></a>

				<h1><?php the_field('header-title', 'option'); ?></h1>

				<h2><?php the_field('header-subtitle', 'option'); ?></h2>

			</div>

		</div>

	</div>

</header>

	