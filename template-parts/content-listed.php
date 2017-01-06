<?php
/**
 * Template part for displaying posts in lists
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wplayout
 */

?>

<div class="col-xs-12 col-sm-12 col-md-12 column-size content-listed">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <figure class="post-thumbnail-figure">
            <?php the_post_thumbnail('post-item-thumb', array('class' => ' img-responsive')); ?>
        </figure>
        <header class="entry-header">
            <?php
            if ( is_single() ) :
                the_title( '<h1 class="entry-title">', '</h1>' );
            else :
                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            endif;

            if ( 'post' === get_post_type() ) : ?>
                <div class="entry-meta">
                    <?php wplayout_posted_on(); ?>
                </div><!-- .entry-meta -->
                <?php
            endif; ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php
            the_content( sprintf(
            /* translators: %s: Name of current post. */
                wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'wplayout' ), array( 'span' => array( 'class' => array() ) ) ),
                the_title( '<span class="screen-reader-text">"', '"</span>', false )
            ) );

            ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
            <?php wplayout_entry_footer(); ?>
        </footer><!-- .entry-footer -->
    </article><!-- #post-## -->
</div>

