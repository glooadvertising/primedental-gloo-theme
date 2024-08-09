<?php
$argsDenitst = [
    'post_type' => 'staff-member',
    'team' => 'dentists',
    // 'orderby' => 'date',
    'order' => 'ASC'
];

// The Query.
$the_query_dentists = new WP_Query($argsDenitst);
?>

<?php if ($the_query_dentists->have_posts()) { ?>

    <div class="team-wrapper w-full grid grid-cols-4 bg-lavender/30 py-16 px-6 md:px-12">
        <div class="relative left-col grid xl:flex-row xl:items-start flex-1 text-inherit lg:col-start-2 col-span-4">
            <h3 class="flex text-3xl text-lavender font-bold mb-6 mr-6">Dentists</h3>

            <div class="grid xs:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-8 md:gap-16 lg:flex-1">
                <?php while ($the_query_dentists->have_posts()) { ?>
                    <?php $the_query_dentists->the_post(); ?>
                    <?php get_template_part('template-parts/profile-card'); ?>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } else { ?>
<?php wp_reset_postdata();
} ?>
<!--  -->

<?php
$argsHygenists = [
    'post_type' => 'staff-member',
    'team' => 'hygienists',
    // 'orderby' => 'date',
    'order' => 'ASC'
];

// The Query.
$the_query_hygenists = new WP_Query($argsHygenists);
?>

<?php if ($the_query_hygenists->have_posts()) { ?>

    <div class="team-wrapper w-full grid grid-cols-4 bg-lavender/20 py-16 px-6 md:px-12">
        <div class="relative left-col grid xl:flex-row xl:items-start flex-1 text-inherit lg:col-start-2 col-span-4">
            <h3 class="flex text-3xl text-lavender font-bold mb-6 mr-6">Hygienists</h3>

            <div class="grid xs:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-8 md:gap-16 lg:flex-1">
                <?php while ($the_query_hygenists->have_posts()) { ?>
                    <?php $the_query_hygenists->the_post(); ?>
                    <?php get_template_part('template-parts/profile-card'); ?>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } else { ?>

<?php } ?>
<div class="flex relative ml-auto right-0">
    <img src="<?php echo get_template_directory_uri() ?>/resources/images/thumb-left-sage.svg" alt="" class="w-32 lg:w-48 rotate-180 relative -my-[80%]">
</div>

<!--  -->

<?php
$argsAdmin = [
    'post_type' => 'staff-member',
    'team' => 'administrative',
    // 'orderby' => 'date',
    'order' => 'ASC'
];

// The Query.
$the_query_admin = new WP_Query($argsAdmin);
?>

<?php if ($the_query_admin->have_posts()) { ?>

    <div class="team-wrapper w-full grid grid-cols-4 bg-lavender/10 py-16 px-6 md:px-12">
        <div class="relative left-col grid xl:flex-row xl:items-start flex-1 text-inherit lg:col-start-2 col-span-4">
            <h3 class="flex text-lavender text-3xl font-bold mb-6 mr-6">Admin</h3>

            <div class="grid xs:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-8 md:gap-16 lg:flex-1">
                <?php while ($the_query_admin->have_posts()) { ?>
                    <?php $the_query_admin->the_post(); ?>
                    <?php get_template_part('template-parts/profile-card'); ?>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } else { ?>

<?php } ?>