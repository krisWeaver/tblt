<?php
get_header(); ?>

<h1>Featured Beer Leaguers</h1>

</div> <!--  End content id  -->

<br />

<?php
$args = array(
             'post_type' => 'featured_players',
        'posts_per_page' => 20,
);

$the_query = new WP_Query($args);
?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();?>
        <ul>
            <li>
                <h3>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
                <?php if( has_post_thumbnail() ){
                    the_post_thumbnail( 'medium' );
                } ?>

            </li>
        </ul>
    <?php endwhile; ?>

<?php endif; ?>

<?php wp_reset_query(); ?>

<?php
get_footer();
