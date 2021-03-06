<?php
/**
 * The template part for displaying a message that posts cannot be found.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy *
 * @package wp_theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

  <header class="content-none-header">
		<h2 class="mg-t-xl pd-h-sm fs-lg"><?php esc_html_e( 'Nothing Found', 'wp_theme' ); ?></h2>
	</header>

	<div class="page-content">

    <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

      <p>
      <?php 
        printf( 
        wp_kses( 
          __( 
            'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 
            'wp_theme' 
          ), 
          array( 
            'a' => array( 
              'href' => array(),
            ),
          ) 
        ), 
        esc_url( admin_url( 'post-new.php' ) ) ); 
      ?>
			</p>

		<?php elseif ( is_search() ) : ?>

			<p>
        <?php 
          esc_html_e( 
            'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 
            'wp_theme' 
          );
        ?>
      </p>

			<?php get_search_form(); ?>

		<?php else : ?>

			<p>
        <?php 
          esc_html_e( 
            'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 
            'wp_theme' 
          ); 
        ?>
      </p>

			<?php get_search_form();?>

		<?php endif; ?>
	</div><!-- .page-content -->
