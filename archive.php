<?php get_header(); ?>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <h3 class="pb-4 mb-4 font-italic border-bottom">
                E-live try One
            </h3>

            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>

                    <?php get_template_part('content', get_post_format()); ?>

                <?php endwhile; ?>
            <?php else : ?>
                <p> <?php __('No Posts found'); ?> </p>
            <?php endif; ?>


        </div>
        <!-- /.blog-main -->



        <?php get_footer(); ?>