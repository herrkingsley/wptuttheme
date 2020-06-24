<?php
/* 
Template Name: Contact Us
*/
?>

<?php get_header(); ?>
    <div class="container">
        <h1><?php the_title();?></h1>
        
            <div class="row">
            
                <div class="col-lg-6">
                    placeholder form
                    <form action="">
                        <input type="text" placeholer="blabla"><br>
                        <input type="text" placeholer="blabla"><br>
                        <input type="text" placeholer="blabla"><br>
                        <button>skicka</button>
                    </form>
                </div>
                
                <div class="col-lg-6">
                    <!-- Lägger till content. -->
                    <?php get_template_part('includes/section', 'content'); ?> 
                </div>

            </div>



        
    </div>

<?php get_footer(); ?>

