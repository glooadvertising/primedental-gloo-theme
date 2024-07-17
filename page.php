<?php get_header(); ?>
<?php 
    $pages = ['about']
?>
<div class="flex items-center justify-center h-full">
	<div class="px-6 md:pl-12 md:pr-0 py-24 rounded-xl <?php echo is_page($pages) ? 'bg-light-lavender text-lavender' : 'bg-sage text-white'; ?> h-full w-full flex flex-col justify-start items-start relative">
    <?php
        global $post; if ( is_page() && $post->post_parent ) { ?>
            <nav class="bg-white/25 w-full h-12 flex items-center px-6 md:px-12 absolute top-0 left-0 right-0 gap-4 uppercase text-xs"><span>uno</span> / <span>dos</span> / <span>tres</span></nav>
        <?php } ?>
		<div class="flex w-full lg:w-lg xl:w-xl mx-auto gap-8 relative">
			<div class="left-col flex flex-col flex-1">
                <h1 class="text-3xl uppercase font-normal mb-6"><?php the_title();?></h1>
                <div class="page-content font-light">
                    <?php the_content(); ?>
                </div>
            </div>
            <aside class="right-col hidden h-full relative w-72 md:flex md:flex-col">
                <?php get_template_part('template-parts/page-side-menu'); ?>
            </aside>
		</div>
	</div>
</div>

<?php get_footer(); ?>
