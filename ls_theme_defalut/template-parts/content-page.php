<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ls_theme_defalut
 */

?>
<div class="container mg4" style="padding-bottom: 10rem;">
    <div class="row">
        <div class="col-lg-12 col-12">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="font-size: 1.6rem;">
<!--                <header class="entry-header">-->
<!--                    --><?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
<!--                </header>-->

                <?php ls_theme_defalut_post_thumbnail(); ?>

                <div class="entry-content">
                    <?php
                    the_content();

                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ls_theme_defalut' ),
                            'after'  => '</div>',
                        )
                    );
                    ?>
                </div><!-- .entry-content -->

                <?php if ( get_edit_post_link() ) : ?>
                    <footer class="entry-footer">
                        <?php
                        edit_post_link(
                            sprintf(
                                wp_kses(
                                /* translators: %s: Name of current post. Only visible to screen readers */
                                    __( 'Edit <span class="screen-reader-text">%s</span>', 'ls_theme_defalut' ),
                                    array(
                                        'span' => array(
                                            'class' => array(),
                                        ),
                                    )
                                ),
                                wp_kses_post( get_the_title() )
                            ),
                            '<span class="edit-link">',
                            '</span>'
                        );
                        ?>
                    </footer><!-- .entry-footer -->
                <?php endif; ?>
            </article><!-- #post-<?php the_ID(); ?> -->
        </div>
    </div>
</div>
