<?php get_header(); ?>

<?php
$postypes = ['service']
?>

<div class="flex items-center justify-center">
    <div class="px-6 md:px-8 py-24 pb-36 lg:py-36 rounded-xl h-full <?php echo get_field('show_sidebar') ? 'lg:pr-0' : 'w-full'; ?> grid grid-cols-4 grid-rows-2 justify-start items-start relative">
        <?php global $post;
        if (is_page() && $post->post_parent) { ?>
            <?php get_template_part('template-parts/breadcrumbs'); ?>
        <?php } ?>
        <div class="grid w-full lg:w-lg xl:w-xl mx-auto gap-6 relative text-inherit col-span-4 md:col-span-3 row-span-1 md:row-span-2">
            <div class="relative left-col grid xl:grid-cols-3 text-inherit">
                <h1 class="flex text-4xl text-lavender uppercase font-normal mb-6 mr-6"><?php the_title(); ?></h1>
                <div class="page-content font-light col-span-2">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <div class="invisible-square flex absolute w-[90%] sm:w-2/3 md:w-1/4 max-h-full aspect-square overflow-hidden right-0 bottom-0 row-start-2 md:row-start-auto">
            <img src="<?php echo get_the_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/resources/images/home-page.jpg'; ?>" alt="" class="absolute right-0 top-0 w-full aspect-square object-cover mask">
        </div>

    </div>
</div>

<div class="team-wrapper w-full flex items-center bg-sage/20 py-32 px-6 md:px-8">
    <div class="relative left-col grid grid-cols-4 xl:grid-cols-8 xl:flex-row flex-1 text-inherit mx-0">
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8 md:col-start-2 col-span-4 xl:col-span-6 xl:col-start-3">
            <div class="page-content font-light col-span-3">

                <?php echo get_field('content_follow-up') ?>
            </div>
            <?php get_template_part('template-parts/other-services'); ?>
        </div>
    </div>
    <div class="hidden md:flex md:items-center md:justify-center absolute left-0 z-0">
        <img src="<?php echo get_field('service_icon'); ?>" alt="" class="absolute z-10 w-28">
        <img src="<?php echo get_template_directory_uri(); ?>/resources/images/thumb-right-lavender.svg" alt="" class="w-48">
    </div>

</div>



<?php get_footer(); ?>