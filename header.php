<html>
<head>
	
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/style.css">
	<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/font-awesome.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php body_class();?>>
	<header>
		<nav>
			<div class="container">
				<a class="topLogo" href="<?php echo site_url(); ?>">Logo</a>
				
				<div class="rightNav">
				<?php wp_nav_menu( array( 'theme_location' => 'new-menu', 'menu' => 'Primary', 'menu_class' => 'topLink') ); ?>
				</div>
				<div class="mobileToggle"><span class="fa fa-bars"></span></div>
				<div class="clearFloat"></div>
			</div>
		</nav>
		<?php if(!is_front_page()):?>
	</header>
	<?php endif; ?>