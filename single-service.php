<?php get_header(); ?>

<?php 
    $postypes = ['service']
?>

<div class="flex items-center justify-center h-full">
	<div class="px-6 md:px-12 py-24 pb-36 lg:pr-0 lg:py-36 rounded-xl <?php echo is_singular($postypes) ? 'bg-light-lavender text-lavender' : 'bg-sage text-white'; ?> h-full <?php echo get_field('show_sidebar') ? 'lg:pr-0' : 'w-full'; ?> flex flex-col justify-start items-start relative">
        <?php global $post; if ( is_page() && $post->post_parent ) { ?>
            <?php get_template_part('template-parts/breadcrumbs'); ?>
        <?php } ?>
		<div class="flex w-full lg:w-lg xl:w-xl mx-auto gap-8 xl:gap-16 relative text-inherit">
			<div class="relative left-col flex flex-col 2xl:flex-row 2xl:items-start 2xl:gap-12 flex-1 text-inherit mx-0">
                <h1 class="flex text-2xl sm:text-3xl text-wrap lg:text-nowrap xl:text-wrap uppercase font-normal mb-6 xl:w-1/4 xl:sticky xl:top-6"><?php the_title();?></h1>
                <div class="page-content font-light xl:flex-1">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php if( is_singular('service') ) { ?>
            <aside class="right-col hidden h-full relative w-64 lg:flex md:flex-col">
                <?php get_template_part('template-parts/other-services'); ?>
            </aside>
            <?php } ?>
		</div>
        <?php is_page('about') ? get_template_part('template-parts/team') : null; ?>
        <?php is_page('services') ? get_template_part('template-parts/services') : null; ?>

        <?php get_template_part('template-parts/back-to-services'); ?>
        <?php get_template_part('template-parts/back-to-top'); ?>
	</div>
</div>

<?php get_footer(); ?>
