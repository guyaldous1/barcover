<?php

/* Template name: Home Page */

get_header();
?>

	<div class="content">
		<div class="main-body">
			<div class="home-banner" style="background-image: url(<?php if( get_field('home_banner_image') ): the_field('home_banner_image'); endif; ?>)">
				<div class="text-box">
					<p>
						Bar Cover is sickness and accident income protection insurance for practicing barristers in Australia.
					</p>
					<a href="">Learn More</a>
				</div>
			</div>
			<section class="landing-box">
				<div class="join-cta">
					<h3>
						How to join  Bar Cover
					</h3>
					<p>
						Simply submit a Proposal form. You will receive a no-obligation offer within two weeks.
					</p>
					<a class="btn-purple" href="">JOIN NOW</a>
				</div>
				<div class="landing-testimonials">
					<div class="landing-testimonial">
						<p>
							I was having fun trampolining with my kids when I came down on the metal edge. It broke my leg and tore ligaments in my knee.
						</p>
						<p>
							My legal practice came to an abrupt halt with hospital and a knee reconstruction. It was six months before I could walk again without crutches. 
						</p>
						<p>
							Bar Cover provided me with uninterrupted cash flow from day one until I got back to work. Their safety net was there when I needed it.
						</p>
						<p class="testimonial-author">
							Bridie Nolan, Barrister, 12 Wentworth Selborne Chambers
						</p>
					</div>
				</div>
			</section>
			<section class="full-width-cta">
				<div>
					<p>
						Are you a Reader? We offer <strong>free</strong> cover.
					</p>
					<a class="btn-clear" href="">Learn More</a>
				</div>
			</section>
			<section class="features">
				<div class="container">
					<h3 class="m-5" >Bar Cover Features</h3>
					<div class="row">
						
						<div class="col-sm">
							<img src="<?php echo get_template_directory_uri(); ?>/img/clock.svg" alt="" class="barcover-icon">				
							<p>
								No waiting period on claims
							</p>
						</div>
						<div class="col-sm">
							<img src="<?php echo get_template_directory_uri(); ?>/img/wallet.svg" alt="" class="barcover-icon">
							<p>
								Benefits up to  $10,000/week
							</p>	
						</div>
						<div class="col-sm">
							<img src="<?php echo get_template_directory_uri(); ?>/img/user.svg" alt="" class="barcover-icon">
							<p>
								Cover up to 74 years old*
							</p>				
						</div>
						<div class="col-sm">
							<img src="<?php echo get_template_directory_uri(); ?>/img/bonus.svg" alt="" class="barcover-icon">
							<p>
								Exclusive loyalty bonuses
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="full-width-cta">
				<div>
					<p>
						Are you a practicing Barrister? Get a <strong>quote</strong> now.
					</p>
					<a class="btn-clear" href="">Get Started</a>
				</div>
			</section>
			<section class="home-contact">
				<div class="contact m-5">
					<h4>Contact us</h4>
					<div class="contact-primary">
						<span>P</span><a href="tel:94138481"><?php if( get_field('phone') ): the_field('phone'); endif; ?></a>
						<span>E</span><a href="mailto:office@bsaf.com.au"><?php if( get_field('email') ): the_field('email'); endif; ?></a>
					</div>

					<div class="contact-secondary">
						<div>
							<p>
								DX
							</p>
							<p>
								Office Address
							</p>
						</div>
						<div>
						<p>
							<?php if( get_field('dx') ): the_field('dx'); endif; ?>
						</p>
						<p>
							<?php if( get_field('address') ): the_field('address'); endif; ?>
						</p>
						</div>
					</div>
				</div>
			</section>


<?php
get_footer();
?>