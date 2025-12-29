<?php

/* Template name: Make a claim */

get_header();

?>
	<section class="bc-container container">
		<div class="steps-container">
			<div class="container">
				<h3 class="m-5" >Make a claim with Bar Cover</h3>
				<div class="user-generated">
					<?php
					if(have_posts()){
							while(have_posts()){
							the_post();
							the_content();
						}
					}
					?>
				</div>
				<div class="row steps justify-content-center">
					<div class="col-sm-4 step">
						<span class="step-no">
							1
						</span>
						<p>
							Download and complete our Claim Form
						</p>
						<a href="" class="btn bc-btn-primary">DOWNLOAD</a>
					</div>
					<div class="col-sm-4 step">
						<span class="step-no">
							2
						</span>
						<p>
							Submit your complete Claim online or via post
						</p>
						<a href="" class="btn bc-btn-primary">SUBMIT CLAIM</a>
					</div>
				</div>
			</div>
		</div>
		<div class="submissions">
			<h3>Claim submissions</h3>
			<?php echo do_shortcode('[contact-form-7 id="37" title="Claim submissions"]'); ?>
		</div>
	</section>


<?php

get_footer();

?>