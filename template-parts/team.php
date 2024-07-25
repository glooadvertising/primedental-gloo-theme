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
                <?php get_template_part('template-parts/profile-card'); ?>
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
                <?php get_template_part('template-parts/profile-card'); ?>
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
                <?php get_template_part('template-parts/profile-card'); ?>
            <?php } ?>
        </div>
    </div>
</div>
<?php } else { ?>
    
<?php }?>
