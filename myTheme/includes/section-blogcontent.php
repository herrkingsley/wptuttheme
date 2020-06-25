<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
   

    <?php 
    function authorName() {
        $fname = get_the_author_meta('first_name');
        $lname = get_the_author_meta('last_name');
        return "$fname $lname";
    }
    ?>

    <address class="author"><?php echo authorName(); ?></adress>
    <br>
    <time><?php echo get_the_date('d/m/Y H:i'); ?></time>
    


    <?php the_content(); ?>

    <?php var_dump(get_the_tags()); ?>
    <?php 
    $tags = get_the_tags();
    foreach($tags as $tag):?>
        <a class="badge badge-success" href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name;?></a>        
    <?php endforeach; ?>

    <!-- Categories -->
    <div class="cat">
        <?php 
        $categories = get_the_category();
        foreach($categories as $cat):?>
        <a href="../index.php?cat=<?php echo $cat->term_id; ?>"><?php echo $cat->name; ?></a>
        
        
        <?php endforeach; ?>
    </div>

<?php endwhile; else: endif; ?>