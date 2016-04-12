<?php get_header(); ?>


<!-- =================================================
		main
================================================== -->
<main>

	<div class="container">

		<div class="row">

			<div class="span12">

				<p class="intro">
					<?php the_field('form-intro', 'option'); ?>
				</p>

			</div>

		</div>
		<!-- END row -->

		<div class="row">

			<div class="span12 half">


				<!-- Ninja form -->
				<?php

					if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); }
					
				?>

				<div class="wrap">

					<h3>Płatność</h3>

					<div class="details">
							
						<p>Przelew na konto: &nbsp;</p>

						<strong><?php the_field('account-number', 'option'); ?></strong>

					</div>

					<div class="details">

						<p>Tytuł przelewu: &nbsp;</p>

						<strong>magazyn PNT</strong>

					</div>

					<h3>Dziękujemy</h3>

				</div>

			</div>
			<!-- END span12 -->

			<div class="img-bear"></div>

		</div>
		<!-- END row -->

	</div>
	
</main>

<?php get_footer(); ?>