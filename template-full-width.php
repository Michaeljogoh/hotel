<?php
/**
 
 *
 * @package 
 */

get_header(); ?>

<div class="container">
<div class="pagelayout_area">
     <section class="site-maincontentarea fullwidth">               
            <?php while( have_posts() ) : the_post(); ?>
				  <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>    
                   <div class="entry-content">
                            <?php the_content(); ?>
                            <?php
                                wp_link_pages( array(
                                'before' => '<div class="page-links">' . __( 'Pages:', 'hotel-center-lite' ),
                                'after'  => '</div>',
                                ) );
                            ?>
                            <?php
                                //If comments are open or we have at least one comment, load up the comment template
                                if ( comments_open() || '0' != get_comments_number() )
                                    comments_template();
                                ?>
                </div><!-- entry-content -->
            <?php endwhile; ?>                    		
    </section><!-- section-->   
</div><!-- .pagelayout_area --> 
</div><!-- .container --> 
<?php get_footer(); ?>