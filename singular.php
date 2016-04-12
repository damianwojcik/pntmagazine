<?php get_header(); ?>


<!-- =================================================
		main
================================================== -->
<main>

	<div class="container">

		<div class="row">

			<div class="span4">

				<div class="img-bear rotated animation-element" data-anim="slide_right"></div>

			</div>

			<div class="span8 animation-element" data-anim="fade" data-delay="2000">


				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php the_content() ?>

				<?php endwhile; endif; ?>


			</div>
			<!-- END span12 -->

		</div>

	</div>
	
</main>


<?php get_footer(); ?>