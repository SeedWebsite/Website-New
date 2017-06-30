<?php
/*
 * Template Name: Blog-Page
 * Description: This is the blog page template that we'll use to display blog posts.
 */

 get_header(); ?>
 

<script src="/wp-content/themes/seed-website/js/animate.js"></script>

<!-- Masthead
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<div style="background-color: #F2F7F9;">
	<div class="container" style="padding-top:10%;">
		<div class="blog-container">
				<div class="row">
					<h1><?php the_title(); ?></h1>
					<p>Written by <a id="authorship"><span itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"> <?php the_author_link(); ?></span></span></a> on <span itemprop="datePublished" id="authorship"> <?php the_time('d F Y'); ?></span><a id="authorship"></a></span>.</p>
					<div style="margin-bottom: 2rem;" class="bar" data-aos="bar"></div>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
					<?php endwhile; else: ?>
					<?php endif; ?>
				</div>
		</div>
	</div>
</div>

<?php include 'blog-list.php'); ?>

<?php include "faq-list.php"; ?>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<?php get_footer() ; ?>