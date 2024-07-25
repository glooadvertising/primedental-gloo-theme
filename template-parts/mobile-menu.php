<div id="mobile-menu" class="menu-visible menu-hidden flex items-center justify-center bg-lavender text-white z-30 rounded-xl lg:hidden drop-shadow-2xl">
    <div id="closeMobileMenu" class="absolute top-4 right-4 cursor-pointer flex items-center justify-center gap-4 aspect-square w-16 bg-light-lavender/50 rounded-full opacity-50 hover:opacity-100 transition-all">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/arrow-back.png" alt="Close">
    </div>
    <nav class="mobile-menu">
        <ul class="grid uppercase 2xl">
            <li><a href="<?php echo site_url('/'); ?>" class="<?php echo $slug == '' ? '!font-semibold' : null; ?>">Home</a></li>
            <li><a href="<?php echo site_url('/about'); ?>" class="<?php echo $slug == 'about' ? '!font-semibold' : null; ?>">About</a></li>
            <li><a href="<?php echo site_url('/services'); ?>" class="<?php echo $slug == 'services' ? '!font-semibold' : null; ?>">Services</a></li>
            <li><a href="<?php echo site_url('/contact'); ?>" class="<?php echo $slug == 'contact' ? '!font-semibold' : null; ?>">Contact</a></li>
        </ul>
    </nav>
    <?php get_template_part('template-parts/book-online'); ?>
</div>