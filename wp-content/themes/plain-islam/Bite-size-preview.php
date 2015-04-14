<?php /* Template Name: bite-size preview layout */ get_header(); ?>

<!-- 	<div class="header-hero-image top-section" >
		<h1><?php the_title(); ?></h1>
	</div> -->

	<main role="main" class="m-top">
	
			
		<section id="bite-size" class="wow fadeInDown">
			<div class="wrapper wow fadeInDown">
				<h1>Bite-size</h1>
				<span class="underline wow fadeInDown"></span>
				<p>This website aims to provide information on Islam and Muslims to non-specialist audiences in a way that is clear, simple and accessible. Begin here by clicking on any topic.</p>				
				
				<?php $bitesize = new WP_Query( array(
           			'post_type' => 'bite-size', 'posts_per_page' => -1,  'order' => 'ASC')); ?>

				<ul>

					<?php while ($bitesize->have_posts() ) : $bitesize->the_post(); ?>

					<li class="wow fadeInDown">
						<a href="<?php the_permalink(); ?>">
							 <?php the_post_thumbnail(); // Fullsize image for the single post ?>
							<div class="bite-size__title "><?php the_title();?></div>
						</a>
					</li>

					<?php endwhile; ?>
					
				</ul>
				
			</div>

		</section><!-- //bite-size -->
	</main>

<?php get_footer(); ?>
