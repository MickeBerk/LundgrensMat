<?php
/**
 * Template Name: Lägg till recept
 *
 * Template for displaying a page där du kan lägga til recept
 *
 * @package understrap
 */
acf_form_head();
get_header(); ?>

<div class="wrapper" id="archive-wrapper">
    
    <div  id="content" class="container">

        <div class="row">
        
    	    <div id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area">
               
            <main id="main" class="site-main" role="main">

                      <?php if ( have_posts() ) : ?>

                        <header class="page-header">
                            <?php
                                the_archive_title( '<h1 class="page-title">', '</h1>' );
                                the_archive_description( '<div class="taxonomy-description">', '</div>' );
                            ?>
                        </header><!-- .page-header -->

                        <?php /* Start the Loop */ ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            
                            <?php global $user_ID; get_currentuserinfo(); ?>
                            <?php if($user_ID) { ?>
                                <?php get_template_part( 'loop-templates/content-recept' ); ?>
                            <?php } else { ?>
                                <h2>Du måste vara inloggad för denna sida</h2>
                            <?php } ?>
                            
                            
                            <?php get_template_part( 'loop-templates/content', get_post_format() ); ?>
                            
                            

                        <?php endwhile; ?>

                            <?php the_posts_navigation(); ?>

                        <?php else : ?>

                            <?php get_template_part( 'loop-templates/content', 'none' ); ?>

                        <?php endif; ?>

            </main><!-- #main -->
               
    	    </div><!-- #primary -->

        <?php get_sidebar(); ?>

    </div> <!-- .row -->
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>
