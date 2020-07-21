<div class="blog-post">

    <!-- ******* Posts ******* -->

        <!-- Post Title -->
        <h2 class="blog-post-title">

            <!-- If single show only title -->
            <?php if(is_single()) : ?>

                <?php the_title(); ?>

            <!-- If index provide link to single -->
            <?php else : ?>

                <a href="<?php the_permalink(); ?>">

                    <?php the_title(); ?>

                </a>

            <?php endif; ?>

        </h2>

    <!-- ******* Meta ******* -->

        <!-- Post Date & Author -->
        <p class="blog-post-meta"><?php the_date(); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>

        <!-- Post Thumbnail -->
        <?php if(has_post_thumbnail()) : ?>

            <div class="post-thumb"><?php the_post_thumbnail(); ?></div>

        <?php endif; ?>

    <!-- ******* Content ******* -->

        <!-- If single show full content -->
        <?php if(is_single()) : ?>

            <?php the_content(); ?>

        <!-- If index provide excerpt -->
        <?php else : ?>

            <?php the_excerpt(); ?>

        <?php endif; ?>

    <!-- ******* Comments ******* -->

        <!-- If single show comments section -->
        <?php if(is_single()) : ?>

            <?php comments_template(); ?>

        <?php endif; ?>

</div>