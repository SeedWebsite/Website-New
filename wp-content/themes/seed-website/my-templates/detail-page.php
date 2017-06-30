<?php
/*
 * Template Name: Detail-Page
 * Description: A generic design to be used as a detail page.
 */

 get_header(); ?>
 

<script src="http://localhost:8888/seed-website/wp-content/themes/seed-website/js/animate.js"></script>

<?php $backgroundimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

<body>

<!-- Masthead
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<div style="background-color: #F2F7F9; padding-bottom: 2%; padding-top: 8%;">
	<div class="container">
		<div class="row">
			<div class="two-thirds column" style="background-color: white; padding: 2rem 4rem;">
				<h1 style="text-transform: none;"><?php the_title(); ?></h1>
				<div class="bar" data-aos="bar"></div>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; else: ?>
				<?php endif; ?>
			</div>
			<div class="one-third column">
				<img alt="Google-Partner-Agency" width="100%" height="auto" src="http://www.seedpublicity.co.uk/wp-content/uploads/2016/03/PartnerBadge-151030.png">
				<div style="background-color: white; padding: 2rem 4rem;">
					<h5>Related Services</h5>
					<?php query_posts('post_type=post&post_status=publish&posts_per_page=1&offset=1&category=$cat_ID'); ?>
						<?php if( have_posts() ): ?>
							<?php while( have_posts() ): the_post(); ?>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							<?php endwhile; ?>
						<?php endif; wp_reset_query(); ?>	
				</div>

				<div style="background-color: white; padding: 2rem 4rem; margin-top: 2rem;">
					<h6>Contact us</h6>
					<p class="small"><a href="tel:01273286616"><i class="fa fa-phone fa-fw" aria-hidden="true"></i> +44 (0)1273 286 616</a><br>
					<a href="mailto:hello@seedpublicity.co.uk"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i> hello@seedpublicity.co.uk</a><br></p>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Breadcrumbs
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<div style="background-color: #F2F7F9; padding-bottom: 2%;">
	<div class="container" style="background-color: white;">
		<div class="row">
				<div style="background-color: white; padding: 2rem 4rem;" class="row">
					<p style="font-size: 1.4rem; font-weight: 600; text-transform: uppercase;"><a title="seo blog" href="<?php echo get_permalink( $post->post_parent ); ?>"><i class="fa fa-arrow-left" aria-hidden="true"></i> BACK TO <?php echo get_the_title( $post->post_parent ); ?></a></p>
				</div>
		</div>
	</div>
</div>
<?php include "contact-form.php"; ?>
</body>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<?php get_footer() ; ?>