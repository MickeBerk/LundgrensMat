<?php
/**
 * Template Name: Startsida
 *
 * Template for displaying startsida
 *
 * @package understrap
 */

get_header(); ?>

<div class="wrapper" id="full-width-page-wrapper">
    <div  id="content" class="container-fluid">
    <div class="col-md-12 main-bg-wrapper">
        <div class="main-bg"></div>
    </div>
        
	   <div id="primary" class="col-md-12 content-area">

            <main id="main" class="site-main" role="main">

                <?php while ( have_posts() ) : the_post(); ?>
                    
                    <?php get_template_part( 'loop-templates/content', 'page' ); ?>

                    <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || get_comments_number() ) :

                            comments_template();
                        
                        endif;
                    ?>

                <?php endwhile; // end of the loop. ?>

            </main><!-- #main -->

	    </div><!-- #primary -->
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>