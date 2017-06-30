<?php
/*
 * Single Post Template: Case Study Detail Page
 * Description: A generic design to be used as a detail page.
 */

 get_header(); ?>

 <?php
$category_query_args = array(
    'cat' => $catid
);

$category_query = new WP_Query( $category_query_args );
?>

<!-- Masthead
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="new-background">
	<div class="container">
		<div class="row">
			<div class="twelve columns">
				<div style="padding-top: 4%;" class="row">
					<div style="border-bottom: solid #f7f7f7 2px;" class="row">
						<p><a style="font-size: 1.4rem; font-weight: 800; text-transform: uppercase;" href="/portfolio/"><i class="fa fa-caret-left" aria-hidden="true"></i>  BACK TO CASE STUDIES</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Page content
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<div class="container">
	<div class="row space">
		<div class="two-thirds column">
		<h1 itemprop="headline" style="text-transform: none;"><?php the_title(); ?></h1>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; else: ?>	
			<?php endif; ?>
		</div>
		<div class="one-third column">
			<h4 style="font-weight: bold;">View our case studies</h4>
				<?php
					global $post;
					$category = get_the_category($post->ID);
					$category = $category[0]->cat_ID;
					$myposts = get_posts(array('numberposts' => 6, 'offset' => 0, 'category' => 7, 'post_status'=>'publish', 'order'=>'rand', 'orderby'=>'date' ));
					foreach($myposts as $post) :
					setup_postdata($post);
					?>
			<ul>
				<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><i class="fa fa-caret-right" aria-hidden="true"></i>  <?php the_title(); ?></a>
			</ul>
			<?php endforeach; ?>
					<?php wp_reset_query(); ?>
			<div class="underline"></div>
			<div style="background-color: #F2F7FA; padding: 2rem 4rem; margin-top: 2rem;" style="position: fixed;">
				<a href="/us/"><img alt="digital marketing team" src="http://www.seedpublicity.co.uk/wp-content/uploads/2017/03/team-3.png" width="100%" height="auto"></a>
				<h6 style="text-transform: uppercase; text-align: center;"><b>Want to see what we can do for your business?</b></h6>
				<p style="text-align: center; margin-bottom: -0.5rem;"><a href="mailto:hello@seedpublicity.co.uk" class="button button-primary">E-Mail Us</a></p>
				<p class="small center"><em>Email us by clicking the button above and we'll get started!</em></p>
			</div>
		</div>
	</div>
</div>

<?php include "case-study-list.php"; ?>

<?php include "contact-form.php"; ?>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="/wp-content/themes/seed-website/js/animate.js"></script>
<script src="/wp-content/themes/seed-website/js/smoothscroll.js"></script>

<?php get_footer() ; ?>