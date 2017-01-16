<?php
/**
 * Template Name: Nytt recept
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

            <main id="main" class="site-main" role="main">
                      <?php if ( have_posts() ) : ?>
                        <?php /* Start the Loop */ ?>
                        <?php while ( have_posts() ) : the_post(); ?>                           
                            <?php global $user_ID; get_currentuserinfo(); ?>
                            <?php if($user_ID) { ?>
                                <div class="add-recept">
                                    <?php  
                                        acf_form( $options = array(
                                            'post_id'       => 'new_post',
                                            'new_post'      => array(
                                                'post_type'     => 'recept',
                                                'post_status'   => 'publish'
                                            ),
                                            'post_title'    => true,
                                            'submit_value'  => 'Skapa nytt recept'
                                    ));?>
                                </div>
                            <?php } else { ?>
                                <h2>Du måste vara inloggad för denna sida</h2>
                            <?php } ?>
                            
                        <?php endwhile; ?>
                            <?php the_posts_navigation(); ?>
                        <?php else : ?>
                            <?php get_template_part( 'loop-templates/content', 'none' ); ?>
                        <?php endif; ?>
            </main><!-- #main -->              
    	    
            
        </div> <!-- .row -->      
    </div><!-- Container end -->
</div><!-- Wrapper end -->
<?php get_footer(); ?>