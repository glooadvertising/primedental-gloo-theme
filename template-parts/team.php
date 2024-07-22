<?php 
    $argsDenitst = [
        'post_type' => 'staff-member',
        'team' => 'dentists',
        // 'orderby' => 'date',
        'order' => 'ASC'
    ];

    // The Query.
    $the_query_dentists = new WP_Query( $argsDenitst );
?>

<?php if( $the_query_dentists->have_posts() ) { ?>

<div class="team-wrapper w-full my-16 flex">
    <div class="relative left-col flex flex-col xl:flex-row xl:items-start xl:gap-12 flex-1 text-inherit mx-0 2xl:mx-12 3xl:mx-48">
        <h3 class="flex text-3xl uppercase font-light mb-6 w-1/5 xl:sticky xl:top-6">Dentists</h3>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-16 lg:flex-1">
            <?php while ( $the_query_dentists->have_posts() ) {?>
            <?php $the_query_dentists->the_post();?>
            <article class="profile-card grid">
                <img src="<?php echo get_the_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/resources/images/avatar.jpg'; ?>" alt="" class="w-full rounded-md aspect-square <?php echo get_the_post_thumbnail() ? null : 'mix-blend-multiply'; ?>">
                <div class="profile-info w-full grid px-2">
                    <h1 class="font-bold uppercase mt-3 text-sm"><?php the_title(); ?></h1>
                    <p class="uppercase text-xs"><?php the_field('role')?></p>
                    <div class="bio hidden">
                        <?php the_content(); ?>
                    </div>
                </div>
            </article>
            <?php }  ?>
        </div>
    </div>
</div>
<?php } else { ?>
    
<?php wp_reset_postdata(); }?>

<!--  -->

<?php 
    $argsHygenists = [
        'post_type' => 'staff-member',
        'team' => 'hygienists',
        // 'orderby' => 'date',
        'order' => 'ASC'
    ];

    // The Query.
    $the_query_hygenists = new WP_Query( $argsHygenists );
?>

<?php if( $the_query_hygenists->have_posts() ) { ?>

<div class="team-wrapper w-full my-16 flex">
    <div class="relative left-col flex flex-col xl:flex-row xl:items-start xl:gap-12 flex-1 text-inherit mx-0 2xl:mx-12 3xl:mx-48">
        <h3 class="flex text-3xl uppercase font-light mb-6 w-1/5 xl:sticky xl:top-6">Hygienists</h3>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-16 lg:flex-1">
            <?php while ( $the_query_hygenists->have_posts() ) {?>
            <?php $the_query_hygenists->the_post();?>
            <article class="profile-card grid">
                <img src="<?php echo get_the_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/resources/images/avatar.jpg'; ?>" alt="" class="w-full rounded-md aspect-square <?php echo get_the_post_thumbnail() ? null : 'mix-blend-multiply'; ?>">
                <div class="profile-info w-full grid px-2">
                    <h1 class="font-bold uppercase mt-3 text-sm"><?php the_title(); ?></h1>
                    <p class="uppercase text-xs"><?php the_field('role')?></p>
                    <div class="bio hidden">
                        <?php the_content(); ?>
                    </div>
                </div>
            </article>
            <?php } ?>
        </div>
    </div>
</div>
<?php } else { ?>
    
<?php }?>


<!--  -->

<?php 
    $argsAdmin = [
        'post_type' => 'staff-member',
        'team' => 'administrative',
        // 'orderby' => 'date',
        'order' => 'ASC'
    ];

    // The Query.
    $the_query_admin = new WP_Query( $argsAdmin );
?>

<?php if( $the_query_admin->have_posts() ) { ?>

    <div class="team-wrapper w-full my-16 flex">
    <div class="relative left-col flex flex-col xl:flex-row xl:items-start xl:gap-12 flex-1 text-inherit mx-0 2xl:mx-12 3xl:mx-48">
        <h3 class="flex text-3xl uppercase font-light mb-6 w-1/5 xl:sticky xl:top-6">Admin</h3>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-16 lg:flex-1">
            <?php while ( $the_query_admin->have_posts() ) {?>
            <?php $the_query_admin->the_post();?>
            <article class="profile-card grid">
                <img src="<?php echo get_the_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/resources/images/avatar.jpg'; ?>" alt="" class="w-full rounded-md aspect-square <?php echo get_the_post_thumbnail() ? null : 'mix-blend-multiply'; ?>">
                <div class="profile-info w-full grid px-2">
                    <h1 class="font-bold uppercase mt-3 text-sm"><?php the_title(); ?></h1>
                    <p class="uppercase text-xs"><?php the_field('role')?></p>
                    <div class="bio hidden">
                        <?php the_content(); ?>
                    </div>
                </div>
            </article>
            <?php } ?>
        </div>
    </div>
</div>
<?php } else { ?>
    
<?php }?>
