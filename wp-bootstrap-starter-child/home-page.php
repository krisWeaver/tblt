<?php
/**
* Template Name: Home Page
 */

get_header(); ?>

			<section id="hero-image" class="container-fluid">
					<!-- Hero Image -->
					<div class="hero-image">

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


				<!-- Start of Content -->
				<div class="intro-text">

					<div class="row">
						<div class="col-sm-12">
							<div class="main-title">
						 		<h1><?php the_field('main_content_title'); ?></h1>
							</div>
						</div> <!-- End col sm 12 -->
					</div> <!-- End Row -->

					<div class="row">
						<div class="main-content col-md-12">
							<?php the_field('main_content'); ?>
						</div>
					</div> <!-- End Row -->

				</div> <!-- End Intro Text -->


				<div class="how-it-works">

					<div class="row">
						<div class="col-sm-12">
							<div class="sub-main-title">
								<h1><?php the_field('sub_main_content_title'); ?></h1>
							</div>
						</div>
					</div> <!-- End Row -->

					<div class="row">
						<div class="col-sm-6">
							<div class="block-title">
								<h3><?php the_field('left_content_block_title'); ?></h3>
							</div>
							<div class="block-content">
								<?php the_field('left_content_block_text'); ?>
							</div>
						</div> <!-- End col sm 6 -->
						<div class="col-sm-6">
							<div class="block-title">
								<h3><?php the_field('right_content_block_title'); ?></h3>
							</div>
							<div class="block-content">
								<?php the_field('right_content_block_text'); ?>
							</div>
						</div> <!-- End col sm 6 -->
					</div> <!-- End row -->

				</div> <!-- End How It Works -->

			</main><!-- #main -->
		</section><!-- #primary -->
	</div> <!-- End of regular Container  -->

	<div class="fluid-container">


				<div class="email-cta">

					<div class="container">
						<div class=row>
							<div class="col-sm-6">
								<h3><?php the_field('call_to_action'); ?></h3>
							</div>
							<div class="col-sm-6">
								<?php echo do_shortcode("[mc4wp_form id='46']"); ?> <!-- MC shortcode -->
							</div>
						</div>
					</div>

				</div>

				<div class="october">
					<h2>Full site launching in October!</h2>
				</div>

	</div>




<?php
get_footer();
