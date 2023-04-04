<?php get_header(); ?>

<div class="post">
    <div class="container">
        <div class="post_wrapper">
            <h1> <?php the_title(); ?></h1>
            <?php echo get_the_post_thumbnail(); ?>
            <p><?php echo get_the_date('M d, Y') ?></p>
            <p><?php the_excerpt(); ?></p>
            <p><?php the_content(); ?></p>
        </div>
    </div>
</div>

<?php get_footer(); ?>