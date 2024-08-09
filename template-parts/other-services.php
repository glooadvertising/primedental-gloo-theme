<?php
$argsServices = [
    'post_type' => 'service',
    'post__not_in' => [get_the_ID()],
    // 'team' => 'dentists',
    // 'orderby' => 'date',
    'order' => 'ASC'
];

// The Query.
$the_query_services = new WP_Query($argsServices);
?>

<?php if ($the_query_services->have_posts()) { ?>


    <div class="relative hidden lg:inline-block">
        <nav class="sticky top-12">
            <h3 class="text-lavender font-bold uppercase mb-4">See other services</h3>
            <ul>
                <?php while ($the_query_services->have_posts()) { ?>
                    <?php $the_query_services->the_post(); ?>

                    <li class="text-lavender font-bold border-b border-0 border-dotted border-charcoal hover:font-medium hover:border-current transition-all uppercase">
                        <a href="<?php the_permalink(); ?>" class="block p-3 pr-6 pl-0 truncate"><?php the_title(); ?></a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </div>

<?php wp_reset_postdata();
} ?>