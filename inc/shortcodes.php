<?php


function proposal_form_func($atts = array(), $content = null) {

    $form_url = get_field('proposal_form', 'options');

    return '<a href="' . $form_url . '">' . $content . '</a>';

}

add_shortcode('proposalform', 'proposal_form_func');
?>
