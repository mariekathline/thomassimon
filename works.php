<?php
/*
Template Name: Réalisations
*/

get_header();
get_header('min'); ?>

<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		?>

		<ul class="workpost content">
		<?php
				$recentPosts = new WP_Query();
				$recentPosts->query('showposts=3');
		?>

		<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
			<li>
					<h3><a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a></h3>
					<span>Publié le : <?php the_time('l j F Y'); ?></span>
					<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail('medium', array(
									'alt' => $title,
									'title' => $title)
								);
							}
					?>
					<p><?php the_excerpt(); ?></p>
				</li>
		<?php endwhile; wp_reset_query(); ?>


<?php } // end while
} // end if
?>

<?php get_footer(); ?>
