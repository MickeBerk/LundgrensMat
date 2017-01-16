<?php
/**
 * The template for displaying all recepies
 * Template Name: Recept
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
                    <?php
					$query = new WP_Query( array('post_type' => 'recept', 'posts_per_page' => 5 ) );
					while ( have_posts() ) : the_post(); ?>
					<?php the_title(); ?>
					<div class="entry-content">
			<?php		
					// Detta visar featured image bilden
    				if ( has_post_thumbnail() ) {
      				the_post_thumbnail();
    				}
			?>
			<?php the_content(); ?>
					<img src="<?php the_field('receptbilder'); ?>" alt="" />
					<p><strong>Receptbeskrivning: </strong><?php the_field('receptbeskrivning'); ?></p>
					<p><strong>Antal portioner: </strong><?php the_field('hur_manga_portioner'); ?></p>
					<p><strong>Förberedelser: </strong><?php the_field('foreberedelser'); ?></p>
					<p><strong>Tillagningstid: </strong><?php the_field('tillagningstid'); ?></p>
			<?php		
			// Ingredienser
			if( have_rows('ingredienser') ): ?>
				<strong>Ingredienser: </strong>
    			<ul>
    				<?php while( have_rows('ingredienser') ): the_row(); ?>
        			<li><?php the_sub_field('ingrediens'); ?></li>
    			<?php endwhile; ?>
    			</ul>
			<?php endif; ?>
			<?php 
			// Gör så här
			if( have_rows('gor_sa_har') ): ?>
				<strong>Gör så här: </strong>
    			<ul>
    				<?php while( have_rows('gor_sa_har') ): the_row(); ?>
        			<li><?php the_sub_field('steg'); ?></li>
    			<?php endwhile; ?>
    			</ul>
				<?php endif; ?>
		<?php endwhile; ?>
		</div>

                </main><!-- #main -->
                
            </div><!-- #primary -->
        
        <?php get_sidebar(); ?>

        </div><!-- .row -->
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php /* get_footer(); */ ?>
