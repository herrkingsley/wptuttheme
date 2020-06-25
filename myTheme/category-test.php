<?php get_header(); ?>
    <section class="page-wrap">
        <div class="container">

            
        <h1><?php echo single_cat_title(); ?></h1>
            
            <?php get_template_part('includes/section', 'archive'); ?> 

            <span class="next_prev"><?php previous_posts_link(); ?>
            <?php next_posts_link(); ?></span>

        </div>
    </section>
<?php get_footer(); ?>