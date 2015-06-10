<?php
/**
 * Template Name: CHANGE THIS
 *
 *	This is an example using Skeleton
 *
 */
?>

<?php get_header(); ?>

<div class="container">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<div class="row">	

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<div class="six columns">
					<h1><?php the_title(); ?></h1>
				</div>	

				<div class="six columns entry">
					<?php the_content(); ?>
				</div>

			</article>

		</div>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>

</div>	

<?php /* get_footer(); */?> 