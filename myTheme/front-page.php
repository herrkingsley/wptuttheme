<?php get_header(); ?>

    <section class="page-wrap">
        <div class="container">

            <h1><?php the_title();?></h1>
            
            <!-- Sectioner kan användas för att inte det ska bli så mycket kod på varje sida. -->
            <?php get_template_part('includes/section', 'content'); ?> 

        </div>
    </section>
<?php get_footer(); ?>