<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */
?>
<?php acf_form_head(); ?>
<?php get_header(); ?>
<div class="wrapper" id="single-wrapper">
    
    <div  id="content" class="container">

        <div class="row">
        
            <div id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area">
                
                <main id="main" class="site-main" role="main">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'loop-templates/content', 'single' ); ?>

                        <?php the_post_navigation(); ?>

                        <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                        ?>
                        
                    <?php endwhile; // end of the loop. ?>

                        <?php acf_form( $options = array(
            'id'                    => 'ad-form',
            'post_id'               => false,
            'new_post'              => false,
            'field_groups'          => false,
            'fields'                => false,
            'post_title'            => false,
            'post_content'          => false,
            'form'                  => true,
            'submit_value'          => __("Uppdatera recept", 'acf'),
            'label_placement'       => 'top',
            'instruction_placement' => 'label',
            'field_el'              => 'div',
            'uploader'              => 'wp',
            'honeypot'              => true
            )); ?>
                </main><!-- #main -->
                
            </div><!-- #primary -->
        
        <?php get_sidebar(); ?>

        </div><!-- .row -->
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>
