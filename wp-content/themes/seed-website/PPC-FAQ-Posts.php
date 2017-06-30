<?php
/*
 * Single Post Template: PPC-FAQ
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

<div style="background-color: #F2F7F9; padding-bottom: 4%; padding-top: 8%;">
	<div class="container">
		<div class="row">
			<div class="two-thirds column" style="background-color: white; padding: 2rem 4rem;">
				<div style="border-bottom: solid #f7f7f7 2px;" class="row">
					<p><a style="font-size: 1.4rem; font-weight: 800; text-transform: uppercase; float: left;" href="/PPC-faqs/"><i class="fa fa-caret-left" aria-hidden="true"></i>  BACK TO PPC FAQS</a></p>
				</div>
				<h1 style="text-transform: none;"><?php the_title(); ?></h1>
				<div class="bar" data-aos="bar"></div>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; else: ?>
				<?php endif; ?>
				<div style="border-top: solid #f7f7f7 2px;" class="row">
					<div class="one-half column">
						<p><a style="font-size: 1.4rem; font-weight: 800; text-transform: uppercase; float: left;" href="/PPC-faqs/"><i class="fa fa-caret-left" aria-hidden="true"></i>  BACK TO PPC FAQS</a></p>
					</div>
					<div class="one-half column">
						<p style="font-size: 1.4rem; font-weight: 800; text-transform: uppercase; float: right; text-align: right;"><a style="font-weight: 800;"><b><?php next_post_link('<strong>%link</strong>'); ?> <i class="fa fa-caret-right" aria-hidden="true"></i></b></a></p>
					</div>
				</div>
			</div>
			<div class="one-third column">
				<div style="background-color: white; padding: 2rem 2rem; padding-left: 4rem;">
				<img alt="digital marketing services" src="http://www.seedpublicity.co.uk/wp-content/uploads/2017/03/digital-marketing-services.png" width="100%" height="auto">
					<h6 style="text-transform: uppercase;"><b>DIGITAL MARKETING Services</b></h6>
					<ul class="small" style="list-style:none; margin-bottom: -1rem;">
						<li><a href="/services/PPC/"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Search Marketing (PPC)</a></li>
						<li><a href="/services/ppc/"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Paid Search (PPC)</a></li>
						<li><a href="/services/social-media/" ><i class="fa fa-hand-o-right" aria-hidden="true"></i> Social Advertising</a></li>
					</ul>
				</div>
					<div style="background-color: white; padding: 2rem 4rem; margin-top: 2rem;">
						<a href="/us/"><img alt="digital marketing team" src="http://www.seedpublicity.co.uk/wp-content/uploads/2017/03/team-3.png" width="100%" height="auto"></a>
						<h6 style="text-transform: uppercase; text-align: center;"><b>Ready to start dominating Google?</b></h6>
						<p style="text-align: center; margin-bottom: -0.5rem;"><a href="mailto:hello@seedpublicity.co.uk" class="button button-primary">E-Mail Us</a></p>
						<p class="small center"><em>Email us by clicking the button above and we'll get started!</em></p>
					</div>
				<div style="background-color: white; padding: 2rem 2rem; padding-left: 4rem; margin-top: 2rem;">
					<h6 style="text-transform: uppercase;"><b>Other PPC FAQs</b></h6>
					<?php
					global $post;
					$category = get_the_category($post->ID);
					$category = $category[0]->cat_ID;
					$myposts = get_posts(array('numberposts' => 3, 'offset' => 0, 'category__in' => array($category), 'post_status'=>'publish', 'order'=>'rand', 'orderby'=>'rand' ));
					foreach($myposts as $post) :
					setup_postdata($post);
					?>

					<p class="grow small"><a href="<?php the_permalink(); ?>"><i class="fa fa-rocket" aria-hidden="true"></i> 
					<?php the_title(); ?></a></p>
					<?php endforeach; ?>
					<?php wp_reset_query(); ?>
					<p class="small"><a style="font-weight: 800; text-transform: uppercase;" title="PPC FAQs" href="/PPC-faqs/"><i class="fa fa-caret-right" aria-hidden="true"></i> View all</a></p>
					</ul>
				</div>
				<div style="background-color: white; padding: 2rem 2rem; padding-left: 4rem; margin-top: 2rem;">
					<h6 style="text-transform: uppercase;"><b>Latest thoughts</b></h6>
					<?php
					global $post;
					$category = get_the_category($post->ID);
					$category = $category[0]->cat_ID;
					$myposts = get_posts(array('numberposts' => 3, 'offset' => 0, 'category' => 1, 'post_status'=>'publish', 'order'=>'rand', 'orderby'=>'date' ));
					foreach($myposts as $post) :
					setup_postdata($post);
					?>

					<p class="grow small"><a href="<?php the_permalink(); ?>"><i class="fa fa-rocket" aria-hidden="true"></i> 
					<?php the_title(); ?></a></p>
					<?php endforeach; ?>
					<?php wp_reset_query(); ?>
					<p class="small"><a style="font-weight: 800; text-transform: uppercase;" title="PPC FAQs" href="/PPC-faqs/"><i class="fa fa-caret-right" aria-hidden="true"></i> View all</a></p>
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