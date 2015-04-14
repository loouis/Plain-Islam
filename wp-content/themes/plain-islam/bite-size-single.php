<?php /* Template Name: bite size single layout */ get_header(); ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>


	<div class="header-hero-image top-section" >
		<h1><?php the_title(); ?></h1>
	</div>

	<main role="main">
		<!-- section -->
		<section>
			

			<div class="wrapper wrapper--small">

				<?php the_content(); ?>

			</div>
		
		<?php endwhile; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
