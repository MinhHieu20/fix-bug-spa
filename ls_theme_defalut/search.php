<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ls_theme_defalut
 */

get_header();
?>
    <div class="content search-page">
        <div class="grid wide dp-blockPC mb-15">
            <div class="beautify row">
                <div class="col-lg-12 col-md-12">
                    <header class="page-header">
                        <h1 class="page-title">
                            <?php
                            /* translators: %s: search query. */
                            printf( esc_html__( 'Search Results for: %s', 'ls_theme_defalut' ), '<span>' . get_search_query() . '</span>' );
                            ?>
                        </h1>
                    </header><!-- .page-header -->
                </div>
                <div class="beautify-program col-lg-12 col-md-12">
                    <div class="beautify-program-list row">
                        <?php if ( have_posts() ) : ?>
                            <?php
                            /* Start the Loop */
                            while ( have_posts() ) :
                                the_post();

                                /**
                                 * Run the loop for the search to output the results.
                                 * If you want to overload this in a child theme then include a file
                                 * called content-search.php and that will be used instead.
                                 */
                                get_template_part( 'template-parts/content', 'search' );

                            endwhile;

                            the_posts_navigation();

                        else :

                            get_template_part( 'template-parts/content', 'none' );

                        endif;
                        ?>
                    </div>
                </div>
        </div><!-- #main -->
        </div>
    </div>
<?php
get_footer();
