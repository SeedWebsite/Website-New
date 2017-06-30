<?php
/*
 * Template Name: Case Studies
 * Description: Seed's case studies page.
 */

 get_header(); ?>
  
  <!-- Home Masthead
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="forrest-background mobile-padding" style="padding-top:15%;">
	<div class="container">
	    <div class="row">
			<div class="twelve columns middle center">
				<h1 class="space">We've enjoyed fantastic successes with our clients</h1> 
                    <div class="disappear">
				      <a class="hover" href="#top"><img data-aos="fade-up" src="http://www.seedpublicity.co.uk/wp-content/uploads/2017/01/down-arrow.png" width="100px" height="auto"></a>
                    </div>
				<div id="top"></div>
			</div>
	    </div>
	</div>
</div>

<!-- Case studies
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<div class="new-background">
	<div class="container space">
		<div class="row">
			<div class="two-thirds column">
				<h2>Recent projects we've worked on</h2>
				<div class="underline"></div>
				<p class="statement">We're lucky to have worked with some fantastic businesses. Here is some of our latest work that we've done for them, along with what we've achieved for them.</p>
			</div>
			<div class="one-third column">
				
			</div>
		</div>
			<div class="row">
				<div class="one-third-blog">
					<?php query_posts('post_type=post&post_status=publish&posts_per_page=32&orderby=date&cat=7'); ?>
					<?php if( have_posts() ): ?>
					<?php while( have_posts() ): the_post(); ?>
					<a href="<?php the_permalink(); ?>" style="color: white;">
					<div style="min-height: 213px;" class="grow overlay mobile-blog">
						<a style="margin-bottom: 0; bottom: 0;" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						<div class="blog-box space">
							<p style="text-align: center; text-transform: uppercase; font-size: 1.2rem;" ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
						</div>
					</div>
				</a>
			</div>
			<div class="one-third-blog">
			</div>
			<div class="one-third-blog">
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</div>

<?php endif; wp_reset_query(); ?>

<?php include "contact-form.php"; ?>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="/wp-content/themes/seed-website/js/animate.js"></script>
<script src="/wp-content/themes/seed-website/js/smoothscroll.js"></script>

<?php get_footer() ; ?>
