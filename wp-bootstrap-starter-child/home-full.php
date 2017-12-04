<?php
/**
* Template Name: Full Website Home Page
 */

get_header(); ?>

    <section id="home-hero-image" class="container-fluid">
        <!-- Hero Image -->
        <div class="home-hero-image">

            <div class="row">
                <div class="col-sm-12">
                    <div class="hero-image-headline">
                        <h1><?php the_field('hero_image_headline'); ?></h1>
                    </div>
                </div> <!-- End col-sm-12 -->
            </div> <!-- End Row -->

            <div class="row">
                <div class="col-sm-2 extra"></div>
                <div class="col-lg-8 col-sm-12">
                    <div class="hero-image-text">
                        <?php the_field('hero_image_text'); ?>
                    </div>
                </div>
                <div class="col-sm-2 extra"></div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="hero-button">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#share">Share Your Story Now</button>
                        <?php include 'story.php'; ?>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div> <!-- End content id -->

<?php
get_footer();
