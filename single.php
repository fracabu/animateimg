<?php get_header();
?>

<main class = 'container'>
<!-- wp_loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<!-- loop content -->
<article>

<h1><?php the_title();
?></h1>

<p><?php the_time( 'j M, Y' );
?></p>
<?php the_post_thumbnail( 'large', array( 'class' => 'img-res mb-1', 'alt' => get_the_title() ) );
?>

<?php the_content( esc_html__( 'Read More...', 'slug-theme' ) );
?>
</article>
<?php endwhile;
?>

<?php else : ?>
<p><?php esc_html_e( 'Sorry, no posts matched your criteria. ', 'slug-theme' );
?></p>
<?php endif;
?>

</main>

<?php get_footer();
?>

