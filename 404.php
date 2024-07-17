<?php get_header(); ?>
<div class="flex items-center justify-center h-full">
	<div class="px-12 py-16 rounded-xl bg-light-lavender text-lavender h-full w-full flex justify-start items-center relative">
		<div class="flex flex-col justify-start w-full lg:w-lg xl:w-xl mx-auto">
			<h1 class="text-3xl lg:text-7xl tracking-tight uppercase font-extralight text-lavender mb-6">404</h1>
			<div class="flex flex-col items-start page-content font-light gap-4">
				<p class="text-2xl"><?php _e( 'Sorry, the page you are looking for could not be found.', 'tailpress' ); ?></p>
				<a href="<?php echo get_bloginfo( 'url' ); ?>" class="btn">
					<?php _e( 'Go Home', 'tailpress' ); ?>
				</a>
            </div>
		</div>
		<svg viewBox="0 0 307 468" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 right-0 h-[50%] fill-lavender">
			<path d="M307 0.0950855V468H233.909C105.311 468 0 362.743 0 234C0 105.257 105.216 0 233.909 0H307V0.0950855Z"/>
		</svg>

	</div>
</div>

<?php get_footer(); ?>