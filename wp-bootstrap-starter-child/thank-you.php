<?php
/**
* Template Name: Thank You
 */

get_header(); ?>

<div class="content-area col-sm-12 col-md-12 col-lg-8">

    <?php the_content(); ?>

    <p>If you would like to share your favorite beer league story click <a href="#" data-toggle="modal" data-target="#share">here</a> </p>

    <?php include'story.php';  ?>

    <p>Follow us on our social media outlets!</p>

    <a href="https://www.facebook.com/The-Beer-League-Tribune-484862358539112/" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
    <a href="https://twitter.com/beerleaguetrib" target="_blank"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>

</div>

<?php
get_footer();
