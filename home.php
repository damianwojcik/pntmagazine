<?php get_header(); ?>


<!-- =================================================
		main
================================================== -->
<main>

	<div class="container">

		<div class="row">

			<div class="span6">

				<p class="intro">

					<?php the_field('form-intro', 'option'); ?>

				</p>


				<!-- Ninja form -->
				<?php

					if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); }
					
				?>
				

			</div>
			<!-- END span6-->

			<div class="span6">

				<?php

				if( have_rows('banners', 'option') ): ?>

					<ul class="list-banners">


					<?php while ( have_rows('banners', 'option') ) : the_row();

						$title = get_sub_field('title');
						$image = get_sub_field('image');
						$link = get_sub_field('link');

					?>


						<li><a href="<?php echo $link; ?>" target="_blank" style="background-image: url('<?php echo $image['url']?>');">

							<?php

								if(empty($image)){
									echo $title;
								}
								
							?>
							
						</a></li>

					<?php endwhile; ?>

				</ul>
				<!-- END list-banners -->

				<?php

				else :

				// no rows found

				endif;

				?>

				<div class="img-bear"></div>

			</div>
			<!-- END span6-->

		</div>
		<!-- END row -->

	</div>
	
</main>

<?php get_footer(); ?>