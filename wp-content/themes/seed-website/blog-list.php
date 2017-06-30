<?php "blog-list.php"; ?>


<!-- Latest thoughts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<div class="new-background">
	<div class="container space">
		<div class="row">
			<div class="two-thirds column">
				<h6><b>Latest <a title="seo blog" style="font-weight: bold;" href="/resources/">articles</a> from our team:</b></h6>
				<p class="small"><a style="font-weight: 800; text-transform: uppercase;" title="seo blog" href="/thoughts/"><i class="fa fa-caret-right" aria-hidden="true"></i> View all</a></p>
			</div>
			<div class="one-third column">
				
			</div>
		</div>
		<div class="row space">
				<div class="one-third-blog">
					<?php query_posts('post_type=post&post_status=publish&posts_per_page=3&orderby=date&cat=1'); ?>
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