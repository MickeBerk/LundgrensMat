<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

?>

<article id="post-0" class="post no-results not-found">

	<header class="page-header">

		<h2 class="page-title"><?php _e( 'Här fanns det inget recept!', 'understrap' ); ?></h2>

	</header><!-- .page-header -->

	<div class="page-content">

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'understrap' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'understrap' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'Den här familjen verkar inte ha lagt upp något recept än.' ); ?></p>


		<?php endif; ?>

	</div><!-- .page-content -->
	
</article><!-- .no-results -->
