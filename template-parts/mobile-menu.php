<div id="mobile-menu" class="menu-visible menu-hidden flex items-center justify-center bg-lavender/90 text-white z-10 rounded-xl lg:hidden">
    <nav class="mobile-menu">
        <ul class="grid uppercase 2xl">
            <li><a href="<?php echo site_url('/'); ?>" class="<?php echo $slug == '' ? '!font-semibold' : null; ?>">Home</a></li>
            <li><a href="<?php echo site_url('/about'); ?>" class="<?php echo $slug == 'about' ? '!font-semibold' : null; ?>">About</a></li>
            <li><a href="<?php echo site_url('/services'); ?>" class="<?php echo $slug == 'services' ? '!font-semibold' : null; ?>">Services</a></li>
            <li><a href="<?php echo site_url('/contact'); ?>" class="<?php echo $slug == 'contact' ? '!font-semibold' : null; ?>">Contact</a></li>
            <li><a href="" id="closeMobileMenu">Close</a></li>
        </ul>
    </nav>
    <?php get_template_part('template-parts/book-online'); ?>
</div>