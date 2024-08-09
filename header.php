<?php
// Get the current post or page's slug
$slug = get_post_field('post_name', get_post());
?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php get_template_part('template-parts/mobile-menu'); ?>
	<div class="wrapper min-h-screen auto-rows-[auto_1fr]">
		<section class="p-6 md:px-8 <?php echo is_home() ? "bg-lavender" : null; ?>">
			<header class="py-4 md:py-8 flex items-end justify-between relative z-10">
				<a href="<?php echo site_url('/'); ?>">
					<img src="<?php echo is_home() ? get_template_directory_uri() . "/resources/images/prime-dental_logo-inv.svg" : get_template_directory_uri() . "/resources/images/prime-dental_logo.svg"; ?>" alt="<?php bloginfo('name'); ?> Logo" class=" w-28 lg:w-36">
				</a>
				<div class="menu-group gap-3 hidden lg:flex">
					<nav class="main-menu <?php echo is_home() ? "main-menu-home" : null; ?>">
						<ul class="flex">
							<li><a href="<?php echo site_url('/'); ?>" class="<?php echo $slug == '' ? '!font-semibold' : null; ?>">Home</a></li>
							<li><a href="<?php echo site_url('/about'); ?>" class="<?php echo $slug == 'about' ? '!font-semibold' : null; ?>">About</a></li>
							<li><a href="<?php echo site_url('/services'); ?>" class="<?php echo $slug == 'services' ? '!font-semibold' : null; ?>">Services</a></li>
							<li><a href="<?php echo site_url('/patient-information'); ?>" class="<?php echo $slug == 'patient-information' ? '!font-semibold' : null; ?>">Patient information</a></li>
							<li><a href="<?php echo site_url('/contact'); ?>" class="<?php echo $slug == 'contact' ? '!font-semibold' : null; ?>">Contact</a></li>
						</ul>
					</nav>
					<a href="https://primedental.dentr.net/" target="_blank" class="btn">Book appointment</a>
				</div>
				<?php get_template_part('template-parts/burger'); ?>
			</header>
		</section>
		<main class="relative <?php echo is_home() ? "bg-lavender" : null; ?>">