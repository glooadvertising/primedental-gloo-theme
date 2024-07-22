<?php 
    $argsServices = [
        'post_type' => 'service',
        'post__not_in' => [get_the_ID()],
        // 'team' => 'dentists',
        // 'orderby' => 'date',
        'order' => 'ASC'
    ];

    // The Query.
    $the_query_services = new WP_Query( $argsServices );
?>

<?php if( $the_query_services->have_posts() ) { ?>


<h3 class="text-xs text-current/50 font-bold uppercase mb-4">See other services</h3>
<nav class="sticky top-12">
    <ul>
        <?php while ( $the_query_services->have_posts() ) {?>
        <?php $the_query_services->the_post();?>

        <li class="text-inherit font-light border-b border-0 border-current hover:font-medium hover:border-current transition-all uppercase">
            <a href="<?php the_permalink(); ?>" class="block p-3 pr-6 pl-0 truncate"><?php the_title(); ?></a>
        </li>
        <?php }?>
    </ul>
</nav>

<?php wp_reset_postdata(); } ?>
    
