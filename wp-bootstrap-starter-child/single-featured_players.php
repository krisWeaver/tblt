<?php
/**
* Template Name: Featured Player
 */

get_header(); ?>

</div> <!-- End content id -->

<div class="container featured-beer-leaguer">
    <div class="row">
        <div class="col-sm-12">
            <h1> Featured Beer Leaguer : <?php the_title(); ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h3>Team: <?php the_field('team_name'); ?></h3>
            <h3>Position: <? the_field('position'); ?></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <p><?php the_field('intro_text');  ?></p>
            <br />
            <p><?php the_field('question_group_1'); ?></p>
            <p><?php the_field('question_group_2'); ?></p>
        </div>
    </div>


 </div>


 <?php
 get_footer();
