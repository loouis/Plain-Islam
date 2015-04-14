<?php /* Template Name: In-depth - single */ get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<!-- 	<div class="header-hero-image top-section" >
		<h1><?php the_title();?></h1>
	</div> -->

	<main role="main" class="m-top">
		<!-- section -->
		<section class="no-pad-bottom">

			<div class="wrapper wrapper--small wow fadeInDown">

				<div class="author-details">

					<div class="person_image wow fadeInDown">
						<?php the_post_thumbnail('headshot');?>
					</div>

					<div class="person-name-title wow fadeInDown">

						<div class="person_name wow fadeInDown">
							<?php the_field('person_name');?>
						</div>

						<div class="person_title wow fadeInDown">
							<?php the_field('person_title');?>
						</div>
					</div>

				</div>

				<h1><?php the_title();?></h1>

				<span class="underline wow fadeInDown"></span>
				
				<div class="text-container wow fadeInDown">
					<?php the_content(); ?>
				</div>
			</div>
		
		<?php endwhile; ?>

		<?php endif; ?>

		<div class="nex-prev-posts">
			<ul class="single-article-next-prev-nav">
				<a href="<?php echo get_permalink(get_adjacent_post()); ?>" class="previous-post"><li>Previous</li></a>
				<li><a href="<?php bloginfo(url);?>/#in-depth" class="see-all-blog-posts">View all</a></li>
				<a href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>" class="next-post"><li class="next-post">Next</li></a>
			</ul>
		</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
