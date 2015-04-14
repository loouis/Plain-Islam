<?php /* Template Name: Single text layout */ get_header(); ?>

	<!-- <div class="header-hero-image top-section" >
		<h1><?php the_title(); ?></h1>
	</div> -->

	<main role="main" class="m-top">
		<!-- section -->
		<section >
			
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<div class="wrapper wrapper--small wow fadeInDown">
				<h1><?php the_title();?></h1>
				<span class="underline wow fadeInDown"></span>
				<div class="text-container wow fadeInDown">
					<?php the_content(); ?>	
				</div>

			</div>
		
		<?php endwhile; ?>

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
