
<?php 
	// Get the current post or page's slug
	$slug = get_post_field( 'post_name', get_post() );
?>


<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head();?>
</head>
<body <?php body_class();?>>
	<div class="wrapper min-h-screen auto-rows-[auto_1fr]">
		<section class="mx-8">
			<header class="py-8 flex items-end justify-between">
				<a href="<?php echo site_url('/'); ?>">
					<img src="<?php echo get_template_directory_uri()?>/resources/images/prime-dental_logo.svg" alt="<?php bloginfo('name'); ?> Logo" class=" w-28 lg:w-36">
				</a>
				<div class="menu-group gap-3 hidden lg:flex">
					<nav class="main-menu">
						<ul class="flex">
							<li><a href="<?php echo site_url('/'); ?>" class="<?php echo $slug == '' ? '!font-semibold' : null; ?>">Home</a></li>
							<li><a href="<?php echo site_url('/about'); ?>" class="<?php echo $slug == 'about' ? '!font-semibold' : null; ?>">About</a></li>
							<li><a href="<?php echo site_url('/services'); ?>" class="<?php echo $slug == 'services' ? '!font-semibold' : null; ?>">Services</a></li>
							<li><a href="<?php echo site_url('/contact'); ?>" class="<?php echo $slug == 'contact' ? '!font-semibold' : null; ?>">Contact</a></li>
						</ul>
					</nav>
				<a href="https://primedental.dentr.net/" target="_blank" class="btn">Book appointment</a>
				</div>
				<?php get_template_part('template-parts/burger'); ?>
			</header>
		</section>
		<main class="mx-8">
