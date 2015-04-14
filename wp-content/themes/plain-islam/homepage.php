<?php /* Template Name: Homepage */ get_header(); ?>

	<main role="main">
		
		<section id="hero-slider" class="top-section">
			<ul class="bx-slider">
				<li>
					<div class="wrapper">
						<div class="text-slider">
							<blockquote>"None of you truly believes until he loves for his brother what he loves for himself"</blockquote>
							<cite>
								<span class="quotes-icon">
									
								</span>
								<p>Prophet Muhammad</p>
							</cite>
						</div><!-- /text-slider -->

						<div class="slider-image">
							
						</div>
					</div>
				</li>
				<li>
					<div class="wrapper">
						<div class="text-slider">
							<blockquote>"None of you truly believes until he loves for his brother what he loves for himself"</blockquote>
								<cite>
									<span class="quotes-icon">
										
									</span>
									<p>Prophet Muhammad</p>
								</cite>
						</div>
					</div>
				</li>
				<li>
					<div class="wrapper">
						<div class="text-slider">
							<blockquote>"None of you truly believes until he loves for his brother what he loves for himself"</blockquote>
								<cite>
									<span class="quotes-icon">
										
									</span>
									<p>Prophet Muhammad</p>
								</cite>
						</div>
					</div>
				</li>
				<li>
					<div class="wrapper">
						<div class="text-slider">
							<blockquote>"None of you truly believes until he loves for his brother what he loves for himself"</blockquote>
								<cite>
									<span class="quotes-icon">
										
									</span>
									<p>Prophet Muhammad</p>
								</cite>
						</div>
					</div>
				</li>
			</ul>
	
		</section>

		<section id="bite-size">
			<div class="wrapper">
				<h2>Bite-size</h2>
				<span class="underline"></span>
				<p>This website aims to provide information on Islam and Muslims to non-specialist audiences in a way that is clear, simple and accessible. Begin here by clicking on any topic.</p>				
				
				<?php $bitesize = new WP_Query( array(
           			'post_type' => 'bite-size', 'posts_per_page' => -1,  'order' => 'ASC')); ?>

				<ul>

				<?php while ($bitesize->have_posts() ) : $bitesize->the_post(); ?>

					<li>
						<a href="<?php the_permalink(); ?>">
							 <?php the_post_thumbnail(); // Fullsize image for the single post ?>
							<div class="bite-size__title"><?php the_title();?></div>
						</a>
					</li>

				<?php endwhile; ?>


					
				</ul>

			</div>
			<div class="load-more-container">
				<div class="load-more-container load-more-container__filler"></div>
			</div>
			<a href="#" class="bite-size__view-more-button button">view more</a>

		</section><!-- //bite-size -->

		<section id="home-video-intro">
			<div class="wrapper">
				<a href="#" id="homepage-video-button">
					<div class="play-button">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 90 90" enable-background="new 0 0 90 90" xml:space="preserve"><g><g><path fill="#FFFFFF" d="M45,0C20.1,0,0,20.1,0,45s20.1,45,45,45s45-20.1,45-45S69.8,0,45,0z M61.4,49.1l-21.1,14c-2.6,1.7-4.7,0.6-4.7-2.5V31.3c0-3.1,2.1-4.3,4.7-2.5l21.1,14C64,44.6,64,47.4,61.4,49.1z"/></g></g></svg>
					</div>
					<p>Quick and easy 1 minute videos about Islam and Muslims</p>
				</a>
			</div>
		</section><!-- //home-video-intro -->

		<section id="in-depth">
			<h3>Need a little more depth?</h2>
			<span class="underline"></span>
			<p>Topics written by experts in their field</p>

			<ul>
				<a href="">
					<li>
						<h4>Gender equality</h4>
						<p>The issue of women's rights in Islam is a key arena of the debate…</p>
					</li>
				</a>

				<a href="">
					<li>
						<h4>Law and morality</h4>
						<p>The law plays a central role in Islam and yet, the law is also the least…</p>
					</li>
				</a>
				<a href="">
					<li>
						<h4>Islam and science</h4>
						<p>Science and Islam are intimately linked. Islam not only places a high premium on science but positively…</p>
					</li>
				</a>
				<a href="">
					<li>
						<h4>Islam and the West in a post Sept. 11 world</h4>
						<p>The law plays a central role in Islam and yet, the law is also the least…</p>
					</li>
				</a>
			</ul>

			<p>
				<a href="#" class="in-depth__view-more-button button">view more</a>
			</p>

			<p class="small-text">The views expressed within these articles belong to the respective expert authors, they do not necessarily represent the views of the Islamic Society of Britain</p>

		</section><!-- //in-depth -->

	</main>

	<section id="video-lightbox" class="homepage-video-lightbox lightbox">
		<button class="close">
			<img src="<?php bloginfo(template_url);?>/img/close-button.png" alt="">
		</button>
		<div class="wrapper">
			
		</div>
	</section>

<?php get_footer(); ?>
