<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wplayout
 */

?>

	</div><!-- #content -->
    <div class="container">
        <div class="row">
            <footer id="colophon" class="site-footer" role="contentinfo">
                <div class="site-info">
                    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wplayout' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'wplayout' ), 'WordPress' ); ?></a>
                    <span class="sep"> | </span>
                    <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'wplayout' ), 'wplayout', '<a href="http://simonpatrat.com/" rel="designer">Simon Patrat</a>' ); ?>
                </div><!-- .site-info -->
            </footer><!-- #colophon -->
        </div>
    </div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
