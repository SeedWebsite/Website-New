<?php
/*
 * Single Post Template: Behavoural Economics Page
 * Description: This part is optional, but helpful for describing the Post Template
 */

 get_header(); ?>
 

<script src="/wp-content/themes/seed-website/js/animate.js"></script>

<?php $backgroundimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

<body>

<?php
$category_query_args = array(
    'cat' => $catid
);

$category_query = new WP_Query( $category_query_args );
?>

<!-- Masthead
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<div style="background-color: #F2F7F9; padding-bottom: 2%; padding-top: 8%;">
	<div class="container">
		<div class="row">
			<div class="two-thirds column" style="background-color: white; padding: 2rem 4rem;">
			<a style="font-size: 1.4rem; font-weight: 800; text-transform: uppercase;" title="seo blog" href="http://www.seedpublicity.co.uk/behavioural-economics/"><i class="fa fa-arrow-left" aria-hidden="true"></i> BACK TO BEHAVIOURAL ECONOMICS</a>
				<h1 style="text-transform: none;"><?php the_title(); ?></h1>
				<div class="bar" data-aos="bar"></div>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; else: ?>
				<?php endif; ?>
				<a style="font-size: 1.4rem; font-weight: 800; text-transform: uppercase;" title="seo blog" href="http://www.seedpublicity.co.uk/behavioural-economics/"><i class="fa fa-arrow-left" aria-hidden="true"></i> BACK TO BEHAVIOURAL ECONOMICS</a>

			</div>
			<div class="one-third column">
				<div style="background-color: white; padding: 2rem 4rem;">
				<a href="/us/"><img alt="digital marketing team" src="http://www.seedpublicity.co.uk/wp-content/uploads/2017/03/team-3.png" width="100%" height="auto"></a>
					<h6 style="text-transform: uppercase;"><b>Ask our team</b></h6>
					<p class="small"><a href="tel:01273286616"><i class="fa fa-phone fa-fw" aria-hidden="true"></i> +44 (0)1273 286 616</a><br>
					<a href="mailto:hello@seedpublicity.co.uk"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i> hello@seedpublicity.co.uk</a><br></p>
				</div>
				<div style="background-color: white; padding: 2rem 4rem; margin-top: 2rem;">
					<h6><b>Other Biases</b></h6>
					<?php
					global $post;
					$category = get_the_category($post->ID);
					$category = $category[0]->cat_ID;
					$myposts = get_posts(array('category__in' => array($category), 'post_status'=>'publish', 'order'=>'ASC', 'orderby'=>'rand' ));
					foreach($myposts as $post) :
					setup_postdata($post);
					?>

					<p><a href="<?php the_permalink(); ?>"><i class="fa fa-leaf" aria-hidden="true"></i> 
					<?php the_title(); ?></a></p>
					<?php endforeach; ?>
					<?php wp_reset_query(); ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

</body>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<?php get_footer() ; ?>