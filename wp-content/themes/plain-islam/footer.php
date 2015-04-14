


			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Islamic Society of Britain
				</p>
				<!-- /copyright -->

				<div class="scroll-to-top">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve"><polyline fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="7.1,24 19.8,11.3 32.5,24 "/></svg>
				</div>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<section id="lightbox" class="lightbox contact-lightbox">

			<div class="wrapper">

			<button class="close">
				<img src="<?php bloginfo(template_url);?>/img/close-button.png" alt="">
			</button>

				<div class="contact-details">
					 <?php echo do_shortcode('[contact-form-7 id="35" title="Lightbox contact form"]')?>  
				</div>

			</div>
		</section>

		<script src="<?php bloginfo(template_url);?>/js/lib/bxslider.js"></script>
		<script src="<?php bloginfo(template_url);?>/js/lib/fitvids.js"></script>

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
