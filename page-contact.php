<?php get_header(); ?>

<?php 
    $pages = ['about']
?>

<div class="flex items-center justify-center h-full">
	<div class="px-4 md:px-12 py-24 pb-36 lg:py-36 rounded-xl <?php echo is_page($pages) ? 'bg-light-lavender text-lavender' : 'bg-sage text-white'; ?> h-full <?php echo get_field('show_sidebar') ? 'md:pr-0' : 'w-full'; ?> flex flex-col justify-start items-start relative">
        <?php global $post; if ( is_page() && $post->post_parent ) { ?>
            <?php get_template_part('template-parts/breadcrumbs'); ?>
        <?php } ?>
		<div class="flex w-full lg:w-lg xl:w-xl mx-auto gap-8 relative text-inherit">
			<div class="left-col flex flex-col flex-1 text-inherit mx-0 2xl:mx-12 3xl:mx-48">
                <h1 class="text-4xl uppercase font-normal mb-6"><?php the_title();?></h1>
                <div class="grid md:grid-cols-2 gap-16 relative">
                    <div class="form-container">
                        <div class="page-content font-light">
                            <?php the_content(); ?>
                            <?php echo do_shortcode('[wpforms id="71"]'); ?>
                            <!--?php get_template_part('template-parts/contact-form'); ?-->
                        </div>
                    </div>
                    <div class="px-4 pt-12 md:p-12 pb-16 bg-white/10 rounded-lg info-container flex flex-col gap-8 text-inherit font-light sticky top-0 ring-1 ring-white/25">
                        <div class="page-content pb-8 border-b border-white/50">
                            <h2 class="text-xl uppercase font-semibold mb-2">Contact Details</h2>
                            <div class="flex flex-col">
                                <p>9 Gregory Street, Sandy Bay, TAS 7005, Australia</p>
                                <p>To book your appointment call <a href="tel:0362235514">(03) 6223 5514</a> or write to</p>
                                <p><a href="mailto:reception1@primedental.com.au">reception1@primedental.com.au</a></p>

                            </div>
                        </div>
                        <div class="page-content pb-8 border-b border-white/50">
                            <h2 class="text-xl uppercase font-semibold mb-2">Opening Hours</h2>
                            <p>Monday – Thursday 8am – 6.00pm</p>
                        </div>
                        <div class="page-content pb-8 border-b border-white/50">
                            <h2 class="text-xl uppercase font-semibold mb-2">How To Find Us</h2>
                            <div class="flex flex-col">
                                <p>If you haven’t been to see us before You will find us at 9 Gregory Street in the heart of Sandy Bay in a beautifully restored heritage listed building. There is ample parking in and around Gregory Street as well as designated patient parking at the rear of the building.</p>
                                <p>There is a taxi rank just a few steps from our front door. Bus stop 9 either from the city or from the south is located on Sandy Bay Road.</p>
                            </div>
                        </div>
                        <div class="page-content pb-8 border-b border-white/50">
                            <h2 class="text-xl uppercase font-semibold mb-2">Parking</h2>
                            <p>Free parking is available on site.</p>
                        </div>
                        <div class="page-content">
                            <h2 class="text-xl uppercase font-semibold mb-2">Public Transport</h2>
                            <p>There is a bus stop located at the corner of Gregory Street and Sandy Bay road.</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php if( get_field('show_sidebar') ) { ?>
            <aside class="right-col hidden h-full relative w-96 md:flex md:flex-col">
                <?php get_template_part('template-parts/page-side-menu'); ?>
            </aside>
            <?php } ?>
		</div>
        <?php get_template_part('template-parts/back-to-top'); ?>
	</div>
</div>

<?php get_footer(); ?>
