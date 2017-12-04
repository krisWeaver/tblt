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


<div class="container">
    <section id="primary" class="content-area col-sm-12">
        <main id="main" class="site-main" role="main">

            <div class="row">
                <div class="col-md-4">
                    <div class="recent-blog">
                        <?php
                            $args = array(
                                     'category_name' => 'blog',
                                    'posts_per_page' => 1,
                            );

                            $recent_posts = wp_get_recent_posts( $args );
                            ?>
                            <ul>
                                <?php
                                    foreach( $recent_posts as $recent_post ){
                                        echo '<a href=" ' . get_permalink( $recent_post["ID"] ). ' "><h3>'. $recent_post['post_title'] . '</h3></a>';
                                        echo '<br />';
                                        echo $recent_post['the_content'];
                                        echo get_the_excerpt();
                                    }
                                    wp_reset_query();
                                ?>
                            </ul>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="featured-player">
                        Content Goes Here
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="twitter">
                        <a class="twitter-timeline" href="https://twitter.com/beerleaguetrib?ref_src=twsrc%5Etfw" data-tweet-limit=3>Tweets by BeerLeagueTribune</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>

        </main><!-- #main -->
    </section><!-- #primary -->
</div> <!-- End of regular Container  -->

<?php
get_footer();
