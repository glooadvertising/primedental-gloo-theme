<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head();?>
</head>
<body <?php body_class();?>>
	<div class="wrapper min-h-screen auto-rows-[auto_1fr_auto]">
		<section class="mx-8">
			<header class="py-8 flex items-end justify-between">
				<a href="<?php echo site_url('/'); ?>">
					<img src="<?php echo get_template_directory_uri()?>/resources/images/prime-dental_logo.svg" alt="<?php bloginfo('name'); ?> Logo">
				</a>
				<div class="menu-group gap-3 hidden lg:flex">
					<nav class="main-menu">
						<ul class="flex">
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Contact</a></li>
						</ul>
					</nav>
				<a href="#" class="btn">Book appointment</a>
				</div>
			</header>
		</section>
		<main class="mx-8">
