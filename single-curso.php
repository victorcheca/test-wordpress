

<?php get_header(); ?> 
    
    <?php get_template_part('components/page-title'); ?>

    <div class="content container"> 

    
    <?php 
    
    
        if (have_posts()) : ?> 

        <?php while (have_posts()) : the_post(); ?> 
                

            <?php if (get_field('precio')) { ?>
            <h5>Precio: <?php the_field('precio'); ?></h5>
            <?php } ?>
            <?php if (get_field('duracion')) { ?>
            <h5>Duración <?php the_field('duracion'); ?></h5>
            <?php } ?>
            <?php get_template_part('components/page-content'); ?>
            
            <!-- Aquí he añadido esta línea solo para single php -->
            <p class="postmetadata">Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p> 
            
        <?php endwhile; ?> 
        <div class="navigation"> 
            <div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div> 
            <div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div> 
        </div> 
        
        <?php else : ?> 
            <h2 class="center">Not Found</h2> 
            <p class="center">Sorry, but you are looking for something that isn't here.</p> 
        <?php endif; ?> 
        </div> 




    <?php get_footer(); ?> 


  