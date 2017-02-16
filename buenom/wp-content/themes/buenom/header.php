<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta charset="<?php bloginfo(charset); ?>">
	<title><?php bloginfo(name); ?> - <?php bloginfo(description); ?></title>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>">
</head>
<body>
<div id="load">
	<img src="<?php bloginfo(template_url); ?>/assets/images/loading.gif" alt="Loading site">
</div>
<script>
	window.onload = function(){loadSite(-1);};
</script>
<div id="toggle">
	<a href="#"><img src="<?php echo get_theme_mod('m1_logo'); ?>" alt="<?php bloginfo('name') ?>"></a>
	<?php wp_nav_menu(array('
		theme_location'=>'toggle',
		'container_class'=>'nav-toggle',
		));?>
	<button onclick="location.href=''" title="Fechar" id="close-toggle" class="dashicons-no"></button>
</div>
<div id="layout">
	<header class="header">
		<button id="btn-toggle" onclick="location.href=''" title="Menu" class="icon">
				<span></span>
				<span></span>
				<span></span>
		</button>
		<div class="logo">
			<a href="<?php bloginfo(home); ?>" title="<?php bloginfo('name') ?>">
				<h1><?php bloginfo(name); ?></h1>
				<p><?php bloginfo(description); ?></p>
				<img src="<?php echo get_theme_mod('m1_logo'); ?>" alt="<?php bloginfo('name') ?>">
			</a>
		</div>
		<?php wp_nav_menu(array('theme_location'=>'header','container_class'=>'navbar'));?>
		<button onclick="location.href='core/admin'" title="Ir para" class="icon"></button>
		<button onclick="location.href=''" title="Ir para" class="icon"></button>
	</header>
	</br></br></br></br></br></br></br>
	</br></br></br></br></br></br></br>
	</br></br></br></br></br></br></br>
	</br></br></br></br></br></br></br>
	</br></br></br></br></br></br></br>
	</br></br></br></br></br></br></br>
	</br></br></br></br></br></br></br>