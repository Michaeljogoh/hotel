<?php
/**

 *
 * @package Hotel Center Lite
 */
?>

<header>
   <h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'hotel-center-lite' ); ?></h1>
</header>
<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
  <p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'hotel-center-lite' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
<?php elseif ( is_search() ) : ?>
<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'hotel-center-lite' ); ?></p>
<?php get_search_form(); ?>
<?php else : ?>
<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'hotel-center-lite' ); ?></p>
<?php get_search_form(); ?>
<?php endif; ?>