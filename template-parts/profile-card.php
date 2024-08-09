<article id="<?php the_ID(); ?>" class="profile-card grid group cursor-pointer transition-all">
    <img src="<?php echo get_the_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/resources/images/avatar.jpg'; ?>" alt="" class="w-full rounded-full transition-all group-hover:border group-hover:border-lavender/25 aspect-square <?php echo get_the_post_thumbnail() ? null : 'mix-blend-multiply'; ?>">
    <div class="profile-info w-full grid px-4 transition-all text-lavender">
        <h1 class="font-extrabold capitalize mt-3 text-xl leading-5"><?php the_title(); ?></h1>
        <!-- <p class="uppercase text-xs mb-3"><?php the_field('role') ?></p> -->
        <dialog id="<?php the_ID(); ?>" class="page-content px-4 md:px-12 pt-4 md:pt-12 p-24 mt-4 lg:m-auto m-auto rounded-lg max-w-['calc(100% - 4rem)'] md:max-w-2xl bg-lavender/70 text-white backdrop:bg-lavender/50 backdrop:backdrop-blur-md">
            <span class="grid md:flex mb-6 gap-6 items-end">
                <img src="<?php echo get_the_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/resources/images/avatar.jpg'; ?>" alt="" class="w-full md:w-32 rounded-full aspect-square <?php echo get_the_post_thumbnail() ? null : 'mix-blend-multiply'; ?>">
                <span>
                    <h1 class="font-bold uppercase mt-3 text-md text-light-lavender"><?php the_title(); ?></h1>
                    <p class="uppercase text-xs"><?php the_field('role') ?></p>
                </span>
            </span>
            <?php the_content(); ?>
            <button class="close-button btn absolute" type="button" onclick=closeModal()>Close</button>
        </dialog>
    </div>
</article>