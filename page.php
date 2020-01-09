<?php get_header(); ?>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">

            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>

                    <div class="blog-post">
                        <h2 class="blog-post-title">
                            <a href=" <?php the_permalink(); ?> ">
                                <?php the_title(); ?>
                            </a>
                        </h2>


                        <?php the_content(); ?>
                    </div>
                    <!-- /.blog-post -->

                <?php endwhile; ?>
            <?php else : ?>
                <p> <?php __('No Page found'); ?> </p>
            <?php endif; ?>






        </div>
        <!-- /.blog-main -->



        <?php get_footer(); ?>