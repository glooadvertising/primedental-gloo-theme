<?php get_header(); ?>

<?php
$pages = ['about']
?>

<div class="flex items-center justify-center">
    <div class="px-6 md:px-8 py-24 pb-36 lg:py-36 rounded-xl h-full grid lg:grid-cols-3 xl:grid-cols-4 grid-rows-2 justify-start items-start relative">
        <?php global $post;
        if (is_page() && $post->post_parent) { ?>
            <?php get_template_part('template-parts/breadcrumbs'); ?>
        <?php } ?>
        <div class="grid w-full lg:w-lg xl:w-xl mx-auto gap-6 relative text-inherit col-span-4 row-span-1 md:row-span-2 z-10">
            <div class="relative left-col grid xl:grid-cols-4 text-inherit">
                <h1 class="flex text-4xl text-lavender uppercase font-normal mb-6 mr-6"><?php the_title(); ?></h1>
                <div class="page-content font-light col-span-2">
                    <?php the_content(); ?>
                </div>
                <?php if (get_field('show_sidebar')) { ?>
                    <aside class="right-col hidden relative xl:inline-block">
                        <?php get_template_part('template-parts/page-side-menu'); ?>
                    </aside>
                <?php } ?>
            </div>
        </div>
        <?php if (!is_page('privacy-policy')) { ?>
            <div class="invisible-square flex absolute w-[90%] sm:w-2/3 md:w-1/4 max-h-full aspect-square overflow-hidden right-0 bottom-0 row-start-2 md:row-start-auto">
                <img src="<?php echo get_the_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/resources/images/home-page.jpg'; ?>" alt="" class="absolute right-0 top-0 w-full aspect-square object-cover mask">
            </div>
        <?php }; ?>

    </div>
</div>

<div class="flex items-center justify-center">
    <div class="rounded-xl h-full <?php echo get_field('show_sidebar') ? 'lg:pr-0' : 'w-full'; ?> flex flex-col justify-start items-start relative">
        <?php is_page('about') ? get_template_part('template-parts/team') : null; ?>
    </div>
</div>
<?php is_page('services') ? get_template_part('template-parts/services') : null; ?>

<?php get_footer(); ?>