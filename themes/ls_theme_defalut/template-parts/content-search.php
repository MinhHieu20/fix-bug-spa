<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ls_theme_defalut
 */
?>
<div id="post-<?php the_ID(); ?>" class="beautify-program-list__item col-lg-3 col-md-3">
    <div class="beautify-program-list__item--image <?php if(wp_is_mobile()) {echo 'wh-100';} ?>">
    <?php ls_theme_defalut_post_thumbnail(); ?>
    </div>
    <div class="beautify-program-list__item--text">
        <?php the_title( sprintf( '<h2 class="beautify-program-list__item--text--title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

        <?php if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta">
                <?php
                ls_theme_defalut_posted_on();
                ls_theme_defalut_posted_by();
                ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>
    </div><!-- .entry-header -->
    <div class="beautify-program-list__item--text">
        <p class="beautify-program-list__item--text--desc">
            <?php echo get_the_excerpt(); ?>
        </p>
    </div><!-- .entry-summary -->
</div><!-- #post-<?php the_ID(); ?> -->

