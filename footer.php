
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>


</div>
<footer id="colophon" class="site-footer py-12" role="contentinfo">
	<?php do_action( 'tailpress_footer' ); ?>

	<div class="container mx-auto pb-6 text-center text-lavender text-xs flex justify-between uppercase border-b border-sage">
		<a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-extrabold text-lg uppercase">
			<img src="<?php echo get_template_directory_uri(); ?>/resources/images/prime-dental_logo.svg" alt="<?php echo get_bloginfo( 'name' ); ?> Logo" class="w-[120px]">
		</a>

		<!-- &copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?> -->
		<div class="flex flex-col items-end">
			<p>Mon - Thu 8.00am - 6.00pm   /   <a href="tel:(03) 6223 5514">(03) 6223 5514</a></p>
			<p><a href="#">9 Gregory Street, Sandy Bay</a></p>
			<p><a href="mailto:reception1@primedental.com.au" class="lowercase">reception1@primedental.com.au</a></p>

		</div>
	</div>
	<div class="container mx-auto text-center text-sage text-xs flex justify-between uppercase pt-6">
		<p><a href="#">Privacy Policy</a></p>
		<div>
			
			<p>Site by <a href="https://glooadvertising.com.au" target="_blank">Gloo</a></p>
		</div>
	</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
