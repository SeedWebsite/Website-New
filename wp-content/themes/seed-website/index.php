<?php
/*
 * Template Name: Blog-Page
 * Description: This is the blog page template that we'll use to display blog posts.
 */

 get_header(); ?>
 
 <!-- Home Masthead
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="Resources-background" style="padding-top:15%;">
	<div class="container">
	    <div class="row space">
			<div class="twelve columns middle center mobile-middle mobile-padding">
				<h1 class="space">RESOURCES</h1>
				<h4 class="space">The latest digital marketing trends, insights and research transformed into powerful, actionable and digestible insights.</h4>
				<a class="hover" data-scroll href="#top"><img data-aos="fade-up" src="http://www.seedpublicity.co.uk/wp-content/uploads/2017/01/down-arrow.png" alt="down-arrow" width="100px" height="auto"></a>
				<div id="top"></div>
			</div>
	    </div>
	</div>
</div>

<!-- Latest thoughts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<div class="new-background">
	<div class="container space">
		<div class="row space">
			<div class="one-half column">
				<h2><b>SEO & PPC Resources</b></h2>
				<div class="bar" data-aos="bar"></div>
				<ul style="list-style:none;">
					<li><a style="text-transform: uppercase;" title="seo faqs" href="/seo-faqs/"><i class="fa fa-caret-right" aria-hidden="true"></i> SEO FAQS</a></li>
					<li><a style="text-transform: uppercase;" title="ppc faqs" href="/ppc-faqs/"><i class="fa fa-caret-right" aria-hidden="true"></i> PPC FAQS</a></li>
				</ul>
			</div>
			<div class="one-half column">
				
			</div>
		</div>
		<div class="row space">
			<div class="two-thirds column">
				<h2><b>Latest articles</b></h2>
				<div class="bar" data-aos="bar"></div>
			</div>
			<div class="one-third column">
				
			</div>
		</div>
		<div class="row space">
				<div data-aos="fade-up" class="one-third-blog">
					<?php query_posts('post_type=post&post_status=publish&posts_per_page=30&orderby=date&cat=1'); ?>
					<?php if( have_posts() ): ?>
					<?php while( have_posts() ): the_post(); ?>
					<a href="<?php the_permalink(); ?>" style="color: white;">
					<div class="grow overlay mobile-blog space">
						<a style="margin-bottom: 0; bottom: 0;" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						<div class="blog-box space">
							<p style="text-align: center; text-transform: uppercase; font-size: 1.2rem;" ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
						</div>
					</div>
				</a>
			</div>
			<div data-aos="fade-up"  class="one-third-blog">
			</div>
			<div data-aos="fade-up"  class="one-third-blog">
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</div>

<?php endif; wp_reset_query(); ?>
		
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="/wp-content/themes/seed-website/js/animate.js"></script>
<script src="/wp-content/themes/seed-website/js/smoothscroll.js"></script>

<?php get_footer() ; ?>