<?php
/**
* Template Name: Signed In Story Form
 */

 get_header();

?>
</div> <!-- End content id -->

<div class='row'>
    <div class='col-md-12'>
        <h1><?php the_title(); ?></h1>
    </div>
</div>

<div class='row'>
    <div class='col-md-12'>

        <?php
         if (!is_user_logged_in() ){
             echo do_shortcode('[ninja_form id=2]');
         } else {
             the_content();
         }
        ?>

    </div>
</div>

<?php
get_footer();
