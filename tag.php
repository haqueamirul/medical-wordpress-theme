<?php
/**
 * The template for displaying Tag pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medisoft1.2
 */

get_header(); ?>

<section class="blog_section sec_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-7">

            <?php if ( have_posts() ) : ?>

            <header class="archive-header">
                <h1 class="archive-title"><?php printf( __( 'Tag Archives: %s', 'pietergoosen' ), single_tag_title( '', false ) ); ?></h1>

                <?php
                    // Show an optional term description.
                    $term_description = term_description();
                    if ( ! empty( $term_description ) ) :
                        printf( '<div class="taxonomy-description">%s</div>', $term_description );
                    endif;
                ?>
            </header><!-- .archive-header -->

            <?php
                $counter = 1; //Starts counter for post column lay out

                // Start the Loop.
                while ( have_posts() ) : the_post();

        ?>
                <div class="entry-column<?php echo ( $counter%2  ? ' left' : ' right' ); ?>">

                    <?php get_template_part( 'content', get_post_format() ); ?>

                </div>  

        <?php   

            $counter++; //Update the counter

            endwhile;

        else :
                    // If no content, include the "No posts found" template.
                get_template_part( 'content', 'none' );

                endif;
            ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();