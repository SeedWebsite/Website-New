<?php wp_footer(); ?>
</body>
<footer id="contactus" >
	<div class="dark-background">
		<div class="container">
			<div class="row space">
				<div class="one-third column">
					<a href="/"><img src="http://www.seedpublicity.co.uk/wp-content/uploads/2016/12/wordmark1.png" width="25%" height="auto" ></a>
					<p class="small">Seed Publicity Ltd. is a creative digital marketing, PPC and <a style="color: #F2F7F9;" href="/" title="SEO agency in Brighton">SEO agency based in Brighton</a> and London, UK.</p>
					<h6><b>CONTACT OUR TEAM</b></h6>
					<p class="small"><a href="tel:01273286616"><i class="fa fa-phone faa-shake" aria-hidden="true"></i> +44 (0)1273 286 616</a></p>
					<p class="small"><a href="mailto:hello@seedpublicity.co.uk"><i class="fa fa-envelope faa-shake" aria-hidden="true"></i> hello@seedpublicity.co.uk</a></p>
					<p class="small"><a href="https://www.google.co.uk/maps/place/Bartholomews,+Brighton,+The+City+of+Brighton+and+Hove+BN1+1HG/@50.8208713,-0.1418599,17z/data=!4m2!3m1!1s0x4875850a48730bc3:0x2c497eb1a9b8388"><i class="fa fa-building" aria-hidden="true"></i> 5 Bartholomews, Brighton, BN1 1HG</p></a></p>
					<p class="small">Registered Company Number: 9526599</p>
				</div>
				<div class="one-third column">
					<h6><b>DIGITAL MARKETING SERVICES</b></h6>
					<ul class="footer-list small" style="list-style:none;">
						<li><a href="/services/seo/"><i class="fa fa-caret-right" aria-hidden="true"></i> Search Marketing (SEO)</a></li>
						<li><a href="/services/ppc/"><i class="fa fa-caret-right" aria-hidden="true"></i> Paid Search (PPC)</a></li>
						<li><a href="/services/social-media/" ><i class="fa fa-caret-right" aria-hidden="true"></i> Social Advertising</a></li>
					</ul>
					<h6><b>ABOUT US</b></h6>
					<ul class="footer-list small" style="list-style:none;">
						<li><a href="/us/"><i class="fa fa-caret-right" aria-hidden="true"></i> Meet out team</a></li>
						<li><a href="/portfolio/"><i class="fa fa-caret-right" aria-hidden="true"></i> Our Results</a></li>
					</ul>
				</div>
				<div class="one-third column">
					<h6><b>RESOURCES</b></h6>
					<ul class="footer-list small" style="list-style:none;">
						<li><a style="font-size: 1.4rem; font-weight: 400; text-transform: uppercase;" title="seo blog" href="/seo-faqs/"><i class="fa fa-caret-right" aria-hidden="true"></i> SEO FAQS</a></li>
						<li><a style="font-size: 1.4rem; font-weight: 400; text-transform: uppercase;" title="seo blog" href="/PPC-faqs/"><i class="fa fa-caret-right" aria-hidden="true"></i> PPC FAQS</a></li>
					</ul>
					<h6><b>LATEST ARTICLES</b></h6>
					<?php
					global $post;
					$category = get_the_category($post->ID);
					$category = $category[0]->cat_ID;
					$myposts = get_posts(array('numberposts' => 3, 'offset' => 0, 'category' => 1, 'post_status'=>'publish', 'order'=>'rand', 'orderby'=>'date' ));
					foreach($myposts as $post) :
					setup_postdata($post);
					?>

					<p class="grow small"><a href="<?php the_permalink(); ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> 
					<?php the_title(); ?></a></p>
					<?php endforeach; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
			<div class="small tweleve columns middle center">
				<p>All rights reserved. Seed Publicity Ltd. Copyright 2017.</p>
			</div>
		</div>
	</div>
</footer>

<!-- Google Analytics Tag
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40911536-1', 'auto');
  ga('send', 'pageview');

</script>

</html>