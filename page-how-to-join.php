<?php

/* Template name: How to join */

get_header();
?>

<!-- Steps container is used in both this page template and page-make-a-claim.php -->

	<section class="bc-container steps-container">
		<div class="container">
			<?php
			while ( have_posts() ) :
					the_post();

					the_title( '<h3 class="page-title m-5">', '</h3>' );
			?>
			<div class="row steps justify-content-center">	

				<?php

				// check if the repeater field has rows of data
				if( have_rows('steps') ):

				 	// loop through the rows of data
				    while ( have_rows('steps') ) : the_row();
				    	
				    	if(get_post_field('post_name') == 'how-to-apply' && get_sub_field('step_number') == 2){
				    		//prop form on how to apply
				    		$link_url = get_field('proposal_form', 'options');
				    	} elseif (get_post_field('post_name') == 'make-a-claim' && get_sub_field('step_number') == 1) {
				    		//claim form on make a claim
				    		$link_url = get_field('claim_form', 'options');
				    	} else {
				    		$link_url = get_sub_field('step_button_link');
				    	}
				    ?>
				    <div class="col-sm-4 step">

				        <span class="step-no">
				        <?php the_sub_field('step_number'); ?>
				    	</span>
				    	<p><?php the_sub_field('step_text'); ?></p>

				    	<a href="<?= $link_url; ?>" class="btn bc-btn-primary"><?php the_sub_field('step_button_text'); ?></a>
				    </div>
				       <?php
				    endwhile;

				else :

				    // no rows found

				endif;

				?>

			</div>
			<div class="row justify-content-center">
			<div class="col"><?php the_field('conclusion_text'); ?></div>	
			</div>
		</div>
	</section>
	<section id="page_lower" class="bc-container container">
		<div class="user-generated">
			<?php
					the_content();
				endwhile;	
			?>
		</div>
	</section>

<?php
get_footer();
?>