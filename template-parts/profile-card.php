<article id="<?php the_ID(); ?>" class="profile-card grid group cursor-pointer rounded-md hover:bg-lavender/10 hover:border hover:border-lavender/25 transition-all">
    <img src="<?php echo get_the_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/resources/images/avatar.jpg'; ?>" alt="" class="w-full rounded-md group-hover:rounded-b-none transition-all group-hover:grayscale aspect-square <?php echo get_the_post_thumbnail() ? null : 'mix-blend-multiply'; ?>">
    <div class="profile-info w-full grid px-4 transition-all">
        <h1 class="font-bold uppercase mt-3 text-sm"><?php the_title(); ?></h1>
        <p class="uppercase text-xs mb-3"><?php the_field('role')?></p>
        <dialog id="<?php the_ID(); ?>" class="page-content px-4 md:px-12 pt-4 md:pt-12 p-24 mt-4 lg:m-auto m-auto rounded-lg max-w-['calc(100% - 4rem)'] md:max-w-2xl bg-lavender text-white backdrop:bg-lavender/50"> 
            <span class="grid md:flex mb-6 gap-6 items-end">
                <img src="<?php echo get_the_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/resources/images/avatar.jpg'; ?>" alt="" class="w-full md:w-32 rounded-md aspect-square <?php echo get_the_post_thumbnail() ? null : 'mix-blend-multiply'; ?>">
                <span>
                <h1 class="font-bold uppercase mt-3 text-md text-light-lavender"><?php the_title(); ?></h1>
                <p class="uppercase text-xs"><?php the_field('role')?></p>
                </span>
            </span>
            <?php the_content(); ?>
            <button class="close-button btn absolute right-0" type="button" onclick=closeModal()>Close</button>
        </dialog>
    </div>
</article>