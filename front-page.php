

    <?php get_header(); ?> 
    
    <?php get_template_part('components/page-title'); ?>
    <?php get_template_part('components/page-breadcrumbs'); ?>

    <div class="content container"> 
    <?php if (have_posts()) : ?> 
        <?php while (have_posts()) : the_post(); ?> 
        
        
        <?php get_template_part('components/page-content'); ?>

            
        <?php endwhile; ?> 
        
   
    <?php else : ?> 
        <h2 class="center">Not Found</h2> 
        <p class="center">Sorry, but you are looking for something that isn't here.</p> 
    <?php endif; ?> 
    </div> 




    <?php get_footer(); ?> 
