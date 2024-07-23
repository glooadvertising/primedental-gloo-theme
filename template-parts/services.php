<?php 
    $argsServices = [
        'post_type' => 'service',
        // 'team' => 'dentists',
        // 'orderby' => 'date',
        'order' => 'ASC'
    ];

    // The Query.
    $the_query_services = new WP_Query( $argsServices );
?>

<?php if( $the_query_services->have_posts() ) { ?>

<div class="team-wrapper w-full my-16 flex">
    <div class="relative left-col flex flex-col xl:flex-row xl:items-start xl:gap-12 flex-1 text-inherit mx-0 2xl:mx-12 3xl:mx-48">
        <div class="hidden xl:flex xl:mb-6 w-1/5 xl:sticky xl:top-6"></div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-16 lg:flex-1">
            <?php while ( $the_query_services->have_posts() ) {?>
            <?php $the_query_services->the_post();?>
            <a href="<?php the_permalink();?>" class="group">
                <article class="profile-card grid group-hover:bg-white/10 group-hover:rounded-md hover:ring-1 hover:ring-white/25 hover:ring-offset-transparent hover:ring-offset transition-all text-center">
                    <img src="<?php echo get_the_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/resources/images/placeholder-square.jpg'; ?>" alt="" class="w-full object-cover rounded-md aspect-square group-hover:grayscale transition-all group-hover:rounded-b-none <?php echo get_the_post_thumbnail() ? null : 'mix-blend-multiply'; ?>">
                    <div class="profile-info w-full grid px-2">
                        <h1 class="font-bold uppercase my-5 text-sm"><?php the_title(); ?></h1>
                </article>
            </a>
            <?php } ?>
        </div>
    </div>
</div>
<?php } else { ?>
    
<?php wp_reset_postdata(); }?>