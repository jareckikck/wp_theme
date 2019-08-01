<?php
/**
 * Partial template for content in single.php
 *
 * @package projectic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="post__img mg-t-xl">
    <?= projectic_get_thumbnail('medium'); ?>
  </div>      

  <div class="post__content">
    <header class="entry-header mg-v-xl">            
      <h1 class=" main-title"> 
        <?php the_title(); ?>
      </h1>

      <div class="posted-on-details">
        <?php projectic_posted_on(); ?>       
      </div>      
    </header>
      
    <div class="wp-content mg-b-xl">
      <?php the_content(); ?>
    </div>
      
    <footer class="post__content--footer">
      <?php the_tags(__('Tags: ', 'projectic'), ', ', '<br>'); ?>
      
      <nav class="post-navigation">
        <?php projectic_prev_post() ?>
        <?php projectic_next_post() ?>
      </nav>

      <?php edit_post_link(); ?>
    </footer>
    
  </div>

</article>

<?php 
  // If comments are open or we have at least one comment, load up the comment template.
  if ( comments_open() || get_comments_number() ) :
    comments_template();
  endif;
?>