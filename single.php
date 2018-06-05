<?php get_header(); ?>
<?php get_header('min'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<section class="halfHeight">
      <ul class="wordpress">
				<h2>Ceci est un article</h2>
        <?php the_title(); ?>
        <?php the_author_posts_link(); ?>
				<?php the_post_thumbnail('articleimage'); ?>
        <?php the_content(); ?>
      </ul>

	</section>


<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>



<?php get_footer(); ?>
