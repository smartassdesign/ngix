<?php if ( is_user_logged_in() ) { ?>

<?php echo do_shortcode ( '[jobs]' ); ?>

<?php } else { ?>

<h1 class="large">Please log in...</h1>
<h4>The job board is provided exclusively for CTP alumni..</h4>

<?php echo do_shortcode ( '[login_form]' ); ?>

<?php } ?>   
