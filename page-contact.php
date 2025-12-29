<?php

/* Template name: Contact */

get_header();
?>

	<section class="bc-container container contact">
		<div class="row">
			<div class="col-sm contact-content">
				<div class="user-generated">
					<?php
					if(have_posts()){
							while(have_posts()){
							the_post();
							the_content();
						}
					}
					?>
					<div class="contact-methods">
						<div>
							<p class="purple">
								P
							</p>
							<p class="purple">
								E
							</p>
							<p class="purple">Postal:<br>
							</p>
						</div>
						<div>
							<?php if( get_field('phone','option') ): ?>
								<p>
									<a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>	
								<p>
							<?php endif; ?>
							<?php if( get_field('email','option') ): ?>
								<p>
									<a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>	
								<p>
							<?php endif; ?>

					<?php if( get_field('postal','option') ): ?>
								<?php if( get_field('postal', 'option') ): the_field('postal', 'option'); endif; ?>
					<?php endif; ?>
						</div>
					</div>
					<?php if( get_field('address','option') ): ?>
						<p class="address">
							<p class="purple-address">Office Address:</p>
							<a target="_blank" href="https://www.google.com.au/maps?q=<?php if( get_field('address', 'option') ): the_field('address', 'option'); endif; ?>&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjh_PH_p53bAhVEjJQKHcw4A2QQ_AUICigB">
								<?php if( get_field('address', 'option') ): the_field('address', 'option'); endif; ?>
							</a>
						</p>
					<?php endif; ?>

				</div>
			</div>
			<div class="col-sm">
				<div class="contact-form">
					<?php echo do_shortcode('[contact-form-7 id="35" title="Contact form"]'); ?>
				</div>
			</div>
		</div>
	</section>



<?php
get_footer();
?>