<?php
/*
 * Template Name: Blog-Page
 * Description: This is the blog page template that we'll use to display blog posts.
 */

 get_header(); ?>
 

<script src="/wp-content/themes/seed-website/js/animate.js"></script>

<?php $backgroundimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

<body>

<!-- Masthead
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div style="background-color: #F2F7F9; padding-top: 8%;">
	<span itemscope itemtype="http://schema.org/Article">
	<meta itemprop="dateModified" content="<?php the_modified_time('d F Y'); ?>"/>
	<div class="container">
		<div class="row">
			<div class="two-thirds column" style="background-color: white; padding: 2rem 4rem;">
				<div style="border-bottom: solid #f7f7f7 2px;" class="row">
					<p><a style="font-size: 1.4rem; font-weight: 800; text-transform: uppercase; float: left;" href="/resources/"><i class="fa fa-caret-left" aria-hidden="true"></i>  BACK TO ARTICLES</a></p>
				</div>
				<h1 itemprop="headline" style="text-transform: none;"><?php the_title(); ?></h1>
				<div class="bar" data-aos="bar"></div>
					<div class="row">
						<span style="font-size: 1.4rem; font-weight: 400; text-transform: uppercase;" itemprop="datePublished" id="authorship"><i class="fa fa-clock-o" aria-hidden="true"></i>  <?php the_time('d F Y'); ?></span>  <a id="authorship"><span itemprop="author" itemscope itemtype="http://schema.org/Person"><span style="font-size: 1.4rem; font-weight: 400; text-transform: uppercase;" itemprop="name"><i class="fa fa-user" aria-hidden="true"></i> <?php the_author_link(); ?></span></span></a>
					</div>
					<div itemprop="articleBody" style="margin-top: 2rem;" class="row">
						<span itemprop="image" itemscope itemtype="https://schema.org/ImageObject">

						<img width="100%" height="auto" src="<?php the_post_thumbnail_url('full'); ?>"><meta itemprop="url" content="<?php the_post_thumbnail_url(); ?>"><meta itemprop="width" content="300"><meta itemprop="height" content="200"></span>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
						<?php endwhile; else: ?>
						<?php endif; ?>
						<?php include "my-templates/contact-form-cta.php"; ?>
					</div>
				</div>
				<div class="one-third column">
					<img style="margin-bottom: 1rem;" alt="Google-Partner-Agency" width="100%" height="auto" src="http://www.seedpublicity.co.uk/wp-content/uploads/2016/03/PartnerBadge-151030.png">
					<div style="background-color: white; padding: 2rem 2rem; padding-left: 4rem;">
						<img alt="digital marketing services" src="http://www.seedpublicity.co.uk/wp-content/uploads/2017/03/digital-marketing-services.png" width="100%" height="auto">
						<h6 style="text-transform: uppercase;"><b>DIGITAL MARKETING Services</b></h6>
						<ul class="small" style="list-style:none; margin-bottom: -1rem;">
							<li><a href="/services/PPC/"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Search Marketing (PPC)</a></li>
							<li><a href="/services/ppc/"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Paid Search (PPC)</a></li>
							<li><a href="/services/social-media/" ><i class="fa fa-hand-o-right" aria-hidden="true"></i> Social Advertising</a></li>
						</ul>
					</div>
					<div style="background-color: white; padding: 2rem 2rem; padding-left: 4rem; margin-top: 2rem;">
						<h6 style="text-transform: uppercase;"><b>Latest thoughts</b></h6>
						<?php
						global $post;
						$category = get_the_category($post->ID);
						$category = $category[0]->cat_ID;
						$myposts = get_posts(array('numberposts' => 6, 'offset' => 0, 'category' => 1, 'post_status'=>'publish', 'order'=>'rand', 'orderby'=>'date' ));
						foreach($myposts as $post) :
						setup_postdata($post);
						?>
						<p class="grow small"><a href="<?php the_permalink(); ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> 
						<?php the_title(); ?></a></p>
						<?php endforeach; ?>
						<?php wp_reset_query(); ?>
						<p class="small"><a style="font-weight: 800; text-transform: uppercase;" title="PPC FAQs" href="/resources/"><i class="fa fa-caret-right" aria-hidden="true"></i> View all</a></p>
					</div>
					<div style="background-color: white; padding: 2rem 2rem; padding-left: 4rem; margin-top: 2rem;">
						<h6 style="text-transform: uppercase;"><b>SEO FAQs</b></h6>
						<?php
						global $post;
						$category = get_the_category($post->ID);
						$category = $category[0]->cat_ID;
						$myposts = get_posts(array('numberposts' => 3, 'offset' => 0, 'category' => 2, 'post_status'=>'publish', 'order'=>'rand', 'orderby'=>'rand' ));
						foreach($myposts as $post) :
						setup_postdata($post);
						?>

						<p class="grow small"><a href="<?php the_permalink(); ?>"><i class="fa fa-leaf" aria-hidden="true"></i> 
						<?php the_title(); ?></a></p>
						<?php endforeach; ?>
						<?php wp_reset_query(); ?>
						<p class="small"><a style="font-weight: 800; text-transform: uppercase;" title="seo blog" href="/seo-faqs/"><i class="fa fa-caret-right" aria-hidden="true"></i> View all</a></p>
						</ul>
					</div>
					<div style="background-color: white; padding: 2rem 2rem; padding-left: 4rem; margin-top: 2rem;">
						<h6 style="text-transform: uppercase;"><b>PPC FAQs</b></h6>
						<?php
						global $post;
						$category = get_the_category($post->ID);
						$category = $category[0]->cat_ID;
						$myposts = get_posts(array('numberposts' => 5, 'offset' => 0, 'category' => 6, 'post_status'=>'publish', 'order'=>'rand', 'orderby'=>'rand' ));
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
					<div style="background-color: white; padding: 2rem 4rem; margin-top: 2rem;">
						<a href="/us/"><img alt="digital marketing team" src="http://www.seedpublicity.co.uk/wp-content/uploads/2017/03/team-3.png" width="100%" height="auto"></a>
						<h6 style="text-transform: uppercase; text-align: center;"><b>Ready to start dominating Google?</b></h6>
						<p style="text-align: center; margin-bottom: -0.5rem;"><a href="mailto:hello@seedpublicity.co.uk" class="button button-primary">E-Mail Us</a></p>
						<p class="small center"><em>Email us by clicking the button above and we'll get started!</em></p>
					</div>
					<div style="background-color: white; padding: 2rem 4rem; margin-top: 2rem;">
					<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
					    <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
						    <img style="margin-bottom: -1rem;" alt="Seed Publicity Logo" src="http://www.seedpublicity.co.uk/wp-content/uploads/2017/05/logo-dark.png" width="35" height="auto">
						    <meta itemprop="url" content="http://www.seedpublicity.co.uk/wp-content/uploads/2017/05/logo-dark.png">
						    <meta itemprop="width" content="35">
						    <meta itemprop="height" content="35">
					    </div>
					    <meta itemprop="name" content="Seed">
					</div>
						<p><b>T:</b> 01273 286 161<br><b>E:</b> hello@seedpublicity.co.uk</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</span>
</div>

<?php include "blog-list.php"; ?>

</body>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<?php get_footer() ; ?>