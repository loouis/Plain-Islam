<?php get_header(); ?>

	<main role="main" class="m-top">
	<!-- section -->
	<section class="no-pad-bottom">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<div class="wrapper wrapper--small">

				<h1><?php the_title();?></h1>

				<span class="underline"></span>

				<div class="text-container">
					<?php the_content(); // Dynamic Content ?>
				</div>

		
			</div>


		<?php endwhile; ?>

		<?php endif;?>
		
		<div class="nex-prev-posts">
			<ul class="single-article-next-prev-nav">
				<a href="<?php echo get_permalink(get_adjacent_post()); ?>" class="previous-post"><li>Previous</li></a>
				<li><a href="<?php bloginfo(url);?>/bite-size" class="see-all-blog-posts">View all</a></li>
				<a href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>" class="next-post"><li class="next-post">Next</li></a>
			</ul>
		</div>


	</section >
	<!-- /section -->
	</main>



<?php get_footer(); ?>
