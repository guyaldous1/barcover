<?php

/* Template name: Premiums */

get_header();

?>

	<section class="bc-container container">
		<div class="user-generated">
			<?php
			if(have_posts()){
					while(have_posts()){
					the_post();
					the_content();
				}
			}
			?>
			<?php

			if( have_rows('links') ):

				while ( have_rows('links') ) : the_row();

				echo '<div class="user-generated-link"> ';

				if(get_sub_field('content'))
				{
					the_sub_field('content');
				}

				if(get_sub_field('button_text') && get_sub_field('link'))
				{	
					$link = get_sub_field('link');
					$text = get_sub_field('button_text');
					echo '<a class="btn bc-btn-primary" href="'.$link.'">'.$text.'</a>';		
				}
				
				echo '</div>';

				endwhile;

			else :

				// no rows found

			endif;

			?>
		</div>	
	</section>



<?php

get_footer();

?>