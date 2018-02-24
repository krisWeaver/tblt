<?php
/**
* Template Name: Blog Home Page
*/

get_header(); ?>

<!-- Main Header Story -->

<?php
$args = array(
         'post_category' => 'blog',
        'posts_per_page' => 1,
);

$the_query = new WP_Query($args);
?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();?>
        <div class="col-md-12 featured-blog-image">


            <div class = "recent-articles" style = "background: linear-gradient(rgba(45, 45, 45, 0.7), rgba(150, 150, 150, 0.80)) ,url('<?php the_post_thumbnail_url(); ?>') ;">
                <div class = "article-title">
                    <h2>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
				</div>

                    <div class="featured-excerpt">
                        <?php
                            $summary = the_excerpt();
                            $excerpt = wp_trim_words($summary, $num_words = 30, $more = '...');

                            echo $excerpt;
                        ?>
                    </div>
                    <div class="view-full-article-button">
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary article-button">View Full Article</a>
                    </div>

            </div>

        </div>

    <?php endwhile; ?>

<?php endif; ?>

<?php wp_reset_query(); ?>



<?php
$args = array(
         'post_category' => 'blog',
        'posts_per_page' => 2,
                'offset' => 1
);

$the_query = new WP_Query($args);
?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();?>
        <div class="col-md-6 featured-blog-image half-blog">


            <div class = "recent-articles" style = "background: linear-gradient(rgba(45, 45, 45, 0.7), rgba(150, 150, 150, 0.80)) ,url('<?php the_post_thumbnail_url(); ?>') ;">
                <div class = "article-title">
                    <h2>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
				</div>

                    <div class="featured-excerpt">
                        <?php
                            $summary = the_excerpt();
                            $excerpt = wp_trim_words($summary, $num_words = 30, $more = '...');

                            echo $excerpt;
                        ?>
                    </div>
                    <div class="view-full-article-button">
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary article-button">View Full Article</a>
                    </div>

            </div>

        </div>

    <?php endwhile; ?>

<?php endif; ?>

<?php wp_reset_query(); ?>





<div class="go-to-blog-button col-md-12">
                    <div class="view-full-blog-button">
                        <a href="https://thebeerleaguetribune.com/blog/" class="btn btn-primary article-button">View More Articles</a>
                    </div>
</div>

<div class="insta-title col-md-12">
	<h3>Latest from Instagram</h3>
</div>

<div class="instagram col-md-12">

	<?php echo do_shortcode('[instagram-feed]'); ?>

</div>


<?php
get_footer();
