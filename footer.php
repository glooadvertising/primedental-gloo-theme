
</main>

</div>
<footer id="colophon" class="mx-8 site-footer py-12" role="contentinfo">
	<?php do_action( 'tailpress_footer' ); ?>

	<div class="pb-6 text-center text-lavender text-xs flex justify-between uppercase border-b border-sage">
		<a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-extrabold text-lg uppercase">
			<img src="<?php echo get_template_directory_uri(); ?>/resources/images/prime-dental_logo.svg" alt="<?php echo get_bloginfo( 'name' ); ?> Logo" class="w-28">
		</a>

		<!-- &copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?> -->
		<div class="flex flex-col items-end gap-1">
			<p>Mon - Thu 8.00am - 6.00pm   /   <a href="tel:(03) 6223 5514">(03) 6223 5514</a></p>
			<p><a href="#">9 Gregory Street, Sandy Bay</a></p>
			<p><a href="mailto:reception1@primedental.com.au" class="lowercase">reception1@primedental.com.au</a></p>
			<div class="socials flex items-center gap-3 mt-3">
				<a href="https://www.facebook.com/PrimeDentalTas" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/resources/images/facebook.svg" alt="Facebook" class="w-6">
				</a>
				<a href="https://www.linkedin.com/pub/jim-rushton/51/a94/539" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/resources/images/linkedin.svg" alt="LinkedIn" class="w-6">
				</a>
				<a href="https://www.youtube.com/watch?v=VOHJp7VbKAo" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/resources/images/youtube.svg" alt="YouTube" class="w-6">
				</a>
			</div>

		</div>
	</div>
	<div class="text-sage text-xs flex justify-between uppercase pt-6">
		<p><a href="<?php echo site_url('/privacy-policy'); ?>">Privacy Policy</a></p>
		<div>
			
			<p>Site by <a href="https://glooadvertising.com.au" target="_blank">Gloo</a></p>
		</div>
	</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
