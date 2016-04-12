<!-- =================================================
		footer
================================================== -->

<?php $footer_logo = get_field('footer-logo', 'option');  ?>
<?php $icon_email = get_field('icon-email', 'option');  ?>

<footer>


	<div class="container">

		<div class="row">

			<div class="span5">

				<a href="http://pntmagazine.com" target="_blank"><img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>"></a>

			</div>

			<div class="span2">
				
				<ul>
					<li><span>Kontakt:</span></li>
					<li><a href="mailto:pnt@time4.pl"><img src="<?php echo $icon_email['url']; ?>" alt="<?php echo $icon_email['alt']; ?>"></a></li>
				</ul>

			</div>

			<div class="span5">

				<nav>

					<?php

					// check if the repeater field has rows of data
					if( have_rows('social-icons', 'option') ):

					 	// loop through the rows of data
					    while ( have_rows('social-icons', 'option') ) : the_row();

							$icon_web = get_sub_field('icon-web', 'option');
							$icon_facebook = get_sub_field('icon-facebook', 'option');
							$icon_instagram = get_sub_field('icon-instagram', 'option');
					?>

					<ul>

						<li><span>Więcej informacji znajdziesz tutaj:</span></li>
						<li class="email"><a href="mailto:pnt@time4.pl"><img src="<?php echo $icon_email['url']; ?>" alt="<?php echo $icon_email['alt']; ?>"></a></li>
						<li><a href="http://pntmagazine.com" target="_blank"><img src="<?php echo $icon_web['url']; ?>" alt="<?php echo $icon_web['alt']; ?>"></a></li>
						<li><a href="https://www.facebook.com/pntmagazine" target="_blank"><img src="<?php echo $icon_facebook['url']; ?>" alt="<?php echo $icon_facebook['alt']; ?>"></a></li>
						<li><a href="https://www.instagram.com/pntmagazine/" target="_blank"><img src="<?php echo $icon_instagram['url']; ?>" alt="<?php echo $icon_instagram['alt']; ?>"></a></li>
					</ul>

					<?php
					   endwhile;

					else :

					    // no rows found

					endif;

					?>

				</nav>

			</div>

		</div>

	</div>

</footer>
<!-- END footer -->

<section class="disclaimer">

	<div class="container">

		<div class="row">

			<div class="span12">

				<p>
					<?php the_field('disclaimer', 'option'); ?>
				</p>

			</div>

		</div>

	</div>

</section>
<!-- END section disclaimer -->


<!-- End Document
================================================== -->

<?php wp_footer(); ?>
</body>
</html>