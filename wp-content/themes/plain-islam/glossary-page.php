<?php /* Template Name: Glossary page */ get_header(); ?>

<!-- 	<div class="header-hero-image top-section" >
		<h1><?php the_title(); ?></h1>
	</div> -->

	<main role="main" class="m-top">
		<!-- section -->
		<section>

			<div class="wrapper wrapper--small wow fadeInDown">

				<h1><?php the_title();?></h1>
				<span class="underline wow fadeInDown"></span>

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<div class="text-container">
						<?php the_content(); ?>
					</div>

				<?php endwhile; ?>

				<?php endif; ?>

				<?php wp_reset_query();?>



				<?php $glossary = new WP_Query( array(
           		'post_type' => 'glossary', 'posts_per_page' => -1,  'order' => 'ASC')); ?>

				<?php while ($glossary->have_posts() ) : $glossary->the_post(); ?>

					<div class="glossary-container">
						<h3 class="wow fadeInDown"><?php the_title();?></h3>
						<div class="indent wow fadeInDown"><?php the_content();?></div>
					</div>

				<?php endwhile;?>

			</div>
	

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
