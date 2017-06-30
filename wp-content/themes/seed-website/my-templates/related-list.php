<?php "related-list.php"; ?>


    <!-- We're Hiring!
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div style="padding-bottom: 5rem;" class="blue-background">
	<div class="container">
		<div class="row">
			<div class="two-thirds column">
				<?php if ( is_page() ) { ?>
                <?php
                if($post->post_parent)
                $children = wp_list_pages('title_li=&child_of='.$post->post_parent.'&echo=0'); else
                $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
                if ($children) { ?>
                <h3><?php
                $parent_title = get_the_title($post->post_parent);
                echo $parent_title;
                ?> Services</h3>
			</div>
			<div class="one-third column hide-mobile">
			</div>
		</div>
	</div>
</div>

<!-- Latest thoughts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<div style="background-color: #295078;">
	<div class="container">
		<div class="row">
				<div class="one-third-blog">

                <?php } } ?>
					<?php 
					$args = array(
						'post_parent' => 0,
						'post_type'   => 'any', 
						'numberposts' => 'any',
						'post_status' => 'any' 
					);
					$children = get_children( $args );
					?>
					<?php if( have_posts() ): ?>
					<?php while( have_posts() ): the_post(); ?>
						<a href="<?php the_permalink(); ?>" style="color: white;">
							<div style="min-height: 213px;" class="grow overlay mobile-blog">
								<div class="related-box space">
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

<div class="row"></div>

<?php endif; wp_reset_query(); ?>