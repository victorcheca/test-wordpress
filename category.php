
<?php get_header(); ?>
  
    <div class="container">
        <div >

        <?php get_template_part('components/page-title'); ?>

            <?php
                $category_description = category_description();
                if ( ! empty( $category_description ) )
                echo '<div class="archive-meta">' . $category_description . '</div>';
                get_template_part( 'loop', 'category' );
                    

            ?>

        </div>
    </div>
  
 
 <?php get_footer(); ?>