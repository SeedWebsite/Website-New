<?php "faq-list.php"; ?>

<div style="background-color: #F2F7F9; padding-bottom: 8%; margin-top: -2rem;">
	<div class="container" style="background-color: white;">
			<div style="border: 10px white solid; border-radius: 4px;" class="blog-container">
				<h3 style="padding-top: 6rem;">OTHER SEO FAQs</h3>
				<div class="bar" data-aos="bar"></div>
				<div class="row">
					<div class="row">
						<ul style="padding-top: 1rem;" class="indent-list" >
							  <?php
						 
							  // The Query
							  query_posts( array ( 'category_name' => 'FAQ', 'posts_per_page' => -1, 'orderby', 'rand' ) );
						 
							  // The Loop
							 while ( have_posts() ) : the_post(); ?>
							    <li>
							  	<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							  </li>
						 
							  <?php endwhile;
						 
							  // Reset Query
							  wp_reset_query();
						 
							  ?>
						</ul>
					</div>
				</div>
			<a style="font-size: 1.4rem; font-weight: 400; text-transform: uppercase;" title="seo blog" href="/seo-faqs/"><i class="fa fa-arrow-left" aria-hidden="true"></i> BACK TO SEO FAQS</a>
			</div>
		</div>
	</div>
</div>
