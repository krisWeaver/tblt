<?php
get_header(); ?>

<h1>Featured Beer Leaguers</h1>

</div> <!--  End content id  -->

<br />

<div class="featured-player-intro">
    <p>
        This page will feature all types of Beer League players from all over and with various backgrounds.
        Check back constantly for new articles!
    </p>
</div>



<?php
$args = array(
             'post_type' => 'featured_players',
        'posts_per_page' => 20,
);

$the_query = new WP_Query($args);
?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();?>
        <div class="col-md-4 featured-player">
            <h3>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h3>
            <div class="featured-thumbnail">
                <?php if( has_post_thumbnail() ){
                    the_post_thumbnail( 'medium' );
                } ?>
            </div>
            <div class="featured-excerpt">
                <?php
                    $summary = get_field('intro_text');
                    $excerpt = wp_trim_words($summary, $num_words = 50, $more = '...');
                    echo $excerpt;
                ?>
            </div>
            <div class="view-full-article-button">
                <a href="<?php the_permalink(); ?>" class="btn btn-primary article-button">View Full Article</a>
            </div>

        </div>
    <?php endwhile; ?>

<?php endif; ?>

<?php wp_reset_query(); ?>

<?php
get_footer();
