<?php get_header(); ?>

<div id="main-welcome" class="flex items-center justify-center h-full min-h-[800px] relative z-10 overflow-hidden">
	<div class="px-6 md:px-12 py-16 rounded-xl text-white h-full w-full grid md:grid-cols-2 lg:place-content-center">
		<div class="flex flex-col lg:w-lg xl:w-xl mx-auto 2xl:mx-12 3xl:mx-48">
			<h1 class="text-5xl lg:text-7xl font-extralight text-white mb-6">We keep <br>everybody <br>smiling!</h1>
			<p>Prime Dental are a practice with a commitment to preventive dentistry and total patient care. Comprising a team of dentists, hygienists, and a professional support staff, Prime Dental is a general practice and dental implant centre, delivering results of the highest quality.</p>
		</div>
	</div>
</div>
<div class="invisible-square flex absolute w-[85%] sm:w-2/3 md:w-1/2 max-h-full aspect-square overflow-hidden right-0 bottom-0">
	<img src="<?php echo get_the_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/resources/images/home-page.jpg'; ?>" alt="" class="absolute right-0 top-0 w-full aspect-square object-cover mask">
</div>
<img src="<?php echo get_template_directory_uri(); ?>/resources/images/thumb-right-green.svg" alt="" class="absolute left-0 top-1/2 w-48 opacity-85 md:opacity-1 backdrop:blur-md">

<?php get_footer(); ?>