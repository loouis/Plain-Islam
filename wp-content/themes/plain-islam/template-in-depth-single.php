<?php /* Template Name: In-depth - single */ get_header(); ?>

	<div class="header-hero-image top-section" >
		<h1>Gender equality</h1>
	</div>

	<main role="main">
		<!-- section -->
		<section>
			
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<div class="wrapper wrapper--small">

				<div class="author-details">

					<div class="person_image">
						<img src="<?php bloginfo(template_url); ?>/img/person_image.jpg" alt="">
					</div>

					<div class="person-name-title">

						<div class="person_name">
							Dr Usama Hasan
						</div>

						</br>

						<div class="person_title">
							lecturer in science, engineering & astronomy at Middlesex University and at the Cambridge Muslim College.
						</div>
					</div>

				</div>

				<?php the_content(); ?>

			</div>
		
		<?php endwhile; ?>

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
