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
                    <div class="three_latest_posts">
                        <?php 

                        $posts = get_posts(array(
                            'posts_per_page'    => 3,
                            'post_type'         => 'recept'
                        ));

                        if( $posts ): ?>
                            
                            <ul>
                                
                            <?php foreach( $posts as $post ): 
                                
                                setup_postdata( $post );
                                
                                ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
                                    <p><?php the_field('receptbeskrivning'); ?></p>
                                </li>
                           
                            <?php endforeach; ?>
                            
                            </ul>
                            
                            <?php wp_reset_postdata(); ?>

                        <?php endif; ?>
                    </div>
                    <?php
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