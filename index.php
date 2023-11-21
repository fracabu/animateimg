<?php get_header();?>

<main class='container'>

    <!-- wp_loop -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

    <!-- loop content -->
    <article>
        <a href='<?php the_permalink(); ?>'>

            <!-- wp-thumnail -->
            <?php the_post_thumbnail(
    'large',
    array(
        'class' => 'img-res',
        'alt' => get_the_title()
    )
);
?>
            <h3><?php the_title();
?></h3>
            <?php the_excerpt();
?>

        </a>
    </article>

    <?php endwhile;
?>
    <p>
        <?php previous_post_link( 'Older posts' );
?> - <?php next_post_link( 'Newer posts' );
?>
    </p>
    <?php else : ?>
    <p>
        <?php esc_html_e( 'Sorry, no posts matched your criteria.', 'slug-theme' );
?>
    </p>
    <?php endif;
?>

</main>

<?php get_footer();
?>