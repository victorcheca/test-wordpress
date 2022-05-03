
<?php
/*
Template Name: Page
*/
?>

<?php get_header(); ?> 
<?php get_template_part('components/page-title'); ?>
    
    <div class="content container"> 
    <?php if (have_posts()) : ?> 

        
        <?php while (have_posts()) : the_post(); ?> 
                
            
        
        <?php get_template_part('components/page-content'); ?>
        



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

