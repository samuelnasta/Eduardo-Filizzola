<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>

</head>
<body>
<!--[if IE]>
<img src="<?php bloginfo('template_directory'); ?>/images/bg.jpg" class="bg">
<![endif]-->

<h5 id="logo">Filizzola</h5>

<div class="container_12" id="container">
	<h1 id="nome"><img style="float: none;" alt="" src="/images/tit-nome.png"></h1>
	<div class="grid_10">
		<a id="icon-youtube" href="http://www.youtube.com/user/eduardofilizzolasant" target="_blank">YouTube</a>
		<a id="icon-facebook" href="http://www.facebook.com/eduardofilizzola" target="_blank">Facebook</a>
	</div>
	<div class="clearfix"></div>

	<div class="grid_4" id="menu">
		<ul>
			<?php wp_list_pages('title_li=&exclude=157,185,186,187,188,189,190&depth=2'); ?>
		</ul>
	</div>

	<div class="push_4 grid_8 <?php if(is_front_page()) echo 'home' ;?>" id="content">
		<div>