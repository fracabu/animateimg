<?php get_header();
?>

<main class = 'container'>
<!-- wp_loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<!-- loop content -->
<article>

<a href = "<?php echo esc_url(home_url('/')); ?>">

<?php the_content( esc_html__( 'Read More...', 'slug-theme' ) );
?>
</article>
<?php endwhile;
?>
<?php else : ?>
<p><?php esc_html_e( 'Sorry, no posts matched your crtieria. ', 'slug-theme' );
?></p>
<?php endif;
?>





</main>

<?php get_footer();
?>