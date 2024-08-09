<?php
$argsServices = [
    'post_type' => 'service',
    // 'team' => 'dentists',
    // 'orderby' => 'date',
    'order' => 'ASC'
];

// The Query.
$the_query_services = new WP_Query($argsServices);
?>

<?php if ($the_query_services->have_posts()) { ?>

    <div class="team-wrapper w-full flex items-center bg-sage/20 py-32 px-6 md:px-8">
        <div class="relative left-col grid grid-cols-4 xl:grid-cols-8 xl:flex-row flex-1 text-inherit mx-0">
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8 md:col-start-2 col-span-4 xl:col-span-5 xl:col-start-3">
                <?php while ($the_query_services->have_posts()) { ?>
                    <?php $the_query_services->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="group">
                        <article class="profile-card grid transition-all text-center">
                            <div class="bg-sage group-hover:bg-lavender w-full rounded-full aspect-square transition-all flex justify-center items-center">
                                <img src="<?php echo get_field('service_icon') ? get_field('service_icon') : get_template_directory_uri() . '/resources/images/placeholder-square.jpg'; ?>" alt="" class="max-w[60%] max-h-[60%]">

                            </div>
                            <div class="profile-info w-full grid px-2">
                                <h1 class="font-bold capitalize my-5 text-xl text-lavender leading-5"><?php the_title(); ?></h1>
                        </article>
                    </a>
                <?php } ?>
            </div>
        </div>
        <div class="absolute left-0 z-0 hidden md:inline-block">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/thumb-right-lavender.svg" alt="" class="w-48">
        </div>
    </div>
<?php } else { ?>

<?php wp_reset_postdata();
} ?>