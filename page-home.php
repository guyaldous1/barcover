<?php

/* Template name: Home Page */

get_header();
?>

	<div class="home-banner" style="background-image: url(<?php if( get_field('home_banner_image') ): the_field('home_banner_image'); endif; ?>)">
		<div>
			<p>
				<?php if( get_field('banner_text') ): the_field('banner_text'); endif; ?>
			</p>
			<a class="btn bc-btn-tertiary" href="<?php if( get_field('banner_button_link') ): the_field('banner_button_link'); endif; ?>"><?php if( get_field('banner_button_text') ): the_field('banner_button_text'); endif; ?></a>
		</div>
	</div>
	<section class="bc-container">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 join-cta">
					<?php if( get_field('left_area_text') ): the_field('left_area_text'); endif; ?>
					<a class="btn bc-btn-primary" href="<?php if( get_field('left_area_button_link') ): the_field('left_area_button_link'); endif; ?>"><?php if( get_field('left_area_button') ): the_field('left_area_button'); endif; ?></a>
				</div>
				<div class="col-sm-8 testimonial">
					<span class="quote">&ldquo;</span>
					<?php if( get_field('testimonial') ): the_field('testimonial'); endif; ?>
					<p class="testimonial-author">
						<?php if( get_field('testimonial_author') ): the_field('testimonial_author'); endif; ?>
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="full-width-cta">
		<p><?php if( get_field('cta_1_text') ): the_field('cta_1_text'); endif; ?></p>
		<a class="btn bc-btn-secondary" href="<?php if( get_field('cta_1_button_link') ): the_field('cta_1_button_link'); endif; ?>"><?php if( get_field('cta_1_button_text') ): the_field('cta_1_button_text'); endif; ?></a>
	</section>
	<section class="bc-container features">
		<div class="container">
			<h3>Bar Cover Features</h3>
			<div class="row">				
				<!--<div class="col-sm">-->
				<!--	<img src="<?php echo get_template_directory_uri(); ?>/img/clock.svg" alt="" class="barcover-icon">				-->
				<!--	<p><?php if( get_field('feature_item_1') ): the_field('feature_item_1'); endif; ?></p>-->
				<!--</div>-->
				<div class="col-sm">
					<img src="<?php echo get_template_directory_uri(); ?>/img/wallet.svg" alt="" class="barcover-icon">
					<p><?php if( get_field('feature_item_2') ): the_field('feature_item_2'); endif; ?></p>	
				</div>
				<div class="col-sm">
					<img src="<?php echo get_template_directory_uri(); ?>/img/user.svg" alt="" class="barcover-icon">
					<p><?php if( get_field('feature_item_3') ): the_field('feature_item_3'); endif; ?></p>				
				</div>
				<div class="col-sm">
					<img src="<?php echo get_template_directory_uri(); ?>/img/bonus.svg" alt="" class="barcover-icon">
					<p><?php if( get_field('feature_item_4') ): the_field('feature_item_4'); endif; ?></p>
				</div>
			</div>
		</div>
	</section>
	<section class="full-width-cta">
		<p><?php if( get_field('cta_2_text') ): the_field('cta_2_text'); endif; ?></p>
		<a class="btn bc-btn-secondary" href="<?php if( get_field('cta_2_button_link') ): the_field('cta_2_button_link'); endif; ?>"><?php if( get_field('cta_2_button_text') ): the_field('cta_2_button_text'); endif; ?></a>
	</section>
	<section class="bc-container home-contact">
		<h4>Contact us</h4>
		<div class="contact-primary">
			<div>
				<span>P</span>
				<a href="tel:<?php if( get_field('phone', 'option') ): the_field('phone', 'option'); endif; ?>">
					<?php if( get_field('phone') ): the_field('phone'); endif; ?>
				</a>
			</div>
			<div>
				<span>E</span>
				<a href="mailto:<?php if( get_field('email', 'option') ): the_field('email', 'option'); endif; ?>">
					<?php if( get_field('email', 'option') ): the_field('email', 'option'); endif; ?>
				</a>
			</div>
		</div>
		<div class="contact-secondary">
			<div>
				<p>
					Postal
				</p>
				<p>
					Office Address
				</p>
			</div>
			<div>
				<p>
					<?php if( get_field('dx', 'option') ): the_field('dx', 'option'); endif; ?>
				</p>
				<a target="_blank" href="https://www.google.com.au/maps?q=<?php if( get_field('address', 'option') ): the_field('address', 'option'); endif; ?>&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjh_PH_p53bAhVEjJQKHcw4A2QQ_AUICigB">
					<?php if( get_field('address', 'option') ): the_field('address', 'option'); endif; ?>
				</a>		
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/img/umbrella-men.svg" alt="" class="umbrella-men">
	</section>


<?php
get_footer();
?>