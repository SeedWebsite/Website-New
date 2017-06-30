<?php
/*
 * Single Post Template: Detail-Page
 * Description: A generic design to be used as a detail page.
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
	<div class="container space">
		<div class="row">
			<div class="two-thirds column" style="background-color: white; padding: 2rem 4rem;">
				<h1 style="text-transform: none;"><?php the_title(); ?></h1>
				<div class="bar" data-aos="bar"></div>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; else: ?>
				<?php endif; ?>
				<?php include "my-templates/contact-form-cta.php"; ?>
			</div>
			<div class="one-third column">
				<a href="https://www.google.com/partners/?hl=en-GB#a_profile;idtf=7951858590;"><img class="hide-mobile mobile-padding" alt="Google-Partner-Agency" width="100%" height="auto" src="http://www.seedpublicity.co.uk/wp-content/uploads/2016/03/PartnerBadge-151030.png"></a>
				<div style="background-color: white; padding: 2rem 2rem; padding-left: 4rem;">
				<img alt="digital marketing services" src="http://www.seedpublicity.co.uk/wp-content/uploads/2017/03/digital-marketing-services.png" width="100%" height="auto">
					<h6 style="text-transform: uppercase;"><b>DIGITAL MARKETING Services</b></h6>
					<ul class="small" style="list-style:none; margin-bottom: -1rem;">
						<li><a href="/services/seo/"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Search Marketing (SEO)</a></li>
						<li><a href="/services/ppc/"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Paid Search (PPC)</a></li>
						<li><a href="/services/social-media/" ><i class="fa fa-hand-o-right" aria-hidden="true"></i> Social Advertising</a></li>
					</ul>
				</div>
				<div style="background-color: white; padding: 2rem 4rem; margin-top: 2rem;">
					<h6><b>Related <?php single_cat_title(); ?> services</b></h6>
					<?php
					global $post;
					$category = get_the_category($post->ID);
					$category = $category[0]->cat_ID;
					$myposts = get_posts(array('numberposts' => 6, 'offset' => 0, 'category__in' => array($category), 'post_status'=>'publish', 'order'=>'ASC', 'orderby'=>'rand' ));
					foreach($myposts as $post) :
					setup_postdata($post);
					?>

					<p class="small"><a href="<?php the_permalink(); ?>"><i class="fa fa-check" aria-hidden="true"></i> 
					<?php the_title(); ?></a></p>
					<?php endforeach; ?>
					<?php wp_reset_query(); ?>
					</ul>
				</div>
				<div style="background-color: white; padding: 2rem 4rem; margin-top: 2rem;">
				<a href="/us/"><img alt="digital marketing team" src="http://www.seedpublicity.co.uk/wp-content/uploads/2017/03/team-3.png" width="100%" height="auto"></a>
					<h6 style="text-transform: uppercase;"><b>Ask our team</b></h6>
					<p class="small"><a href="tel:01273286616"><i class="fa fa-phone fa-fw" aria-hidden="true"></i> +44 (0)1273 286 616</a><br>
					<a href="mailto:hello@seedpublicity.co.uk"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i> hello@seedpublicity.co.uk</a><br></p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include "my-templates/cta.php"; ?>
</body>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<?php get_footer() ; ?>