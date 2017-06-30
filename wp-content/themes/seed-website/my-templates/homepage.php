<?php
/*
 * Template Name: Homepage
 * Description: Seed's homepage.
 */

 get_header(); ?>
<head> 
<script src="https://use.typekit.net/ksn4lxl.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>
  
  <!-- Home Masthead
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="fullscreen-bg">
     <video loop muted autoplay class="fullscreen-bg__video">
       <source src="http://www.seedtest.design/wp-content/uploads/2016/13/new.mp4" type="video/mp4">
     </video>
	<div class="container">
	    <div class="row space">
			<div class="twelve2 columns middle center">
				<img alt="seed publicity logo" class="space hide-mobile" src="http://www.seedpublicity.co.uk/wp-content/uploads/2016/12/wordmark1.png" width="50%" height="auto" >
				<h1 style="color: white;" class="space">BRIGHTON'S BEST SEO & PPC AGENCY</h1>
				<a href="/contact/" data-aos="fade-up" class="button button-primary">work with us</a>
			</div>
	    </div>
	</div>
</div>


    <!-- Client logos list
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="grey-background hide-mobile">
	<div class="container">
	    <div class="row space">
			      <div class="two columns">
			      	<p class="small"><b>We're trusted by fantastic brands:</b></p>
			      	<a data-aos="fade-up" class="small" style="font-weight: 800; text-transform: uppercase;" title="our seo results" href="/portfolio/"><i class="fa fa-caret-right" aria-hidden="true"></i> View case studies</a>
			      </div>
			      <div class="two columns">
			      	<img alt="ACT Logo" src="http://www.seedpublicity.co.uk/wp-content/uploads/2016/12/act-logo-clear.png" width="100%" height="auto">
			      </div>
			      <div class="two columns">
			     	 <img alt="Tutor House logo" src="http://www.seedpublicity.co.uk/wp-content/uploads/2016/09/tutor-house-logo.png" width="100%" height="auto">
			      </div>
			      <div class="two columns">
			     	 <img alt="Eddie Stobart Logo" src="http://www.seedpublicity.co.uk/wp-content/uploads/2016/12/eddie-stobart-logo-clear.png" width="100%" height="auto">
			      </div>
			      <div class="two columns">
			     	 <img alt="PlanBee Logo" src="http://www.seedpublicity.co.uk/wp-content/uploads/2016/09/logo-no-cloud.png" width="100%" height="auto">
			      </div>
			      <div class="two columns">
			     	<img alt="Sugar Shack Logo" src="http://www.seedpublicity.co.uk/wp-content/uploads/2016/09/sugar-shack-logo.png" width="100%" height="auto">
			      </div>
	    </div>
	</div>
</div>

    <!-- About us introduction
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="pier-background">
	<div class="container">
		<div class="row space">
			<div class="two-thirds column">
				<h2>A Brighton-based Agency specialising in SEO and PPC services</h2>
				<div class="bar" data-aos="bar"></div>
				<p>We deliver excellent results for businesses by increasing their website's search presence and visibility with their customers online. We're goal-driven, passionate and we work hard to exceed expectations at every opportunity.</p>
				<p>We focus on just a few clients at a time, which allows us to dedicate the resources and concentration it takes to thoroughly grow their business online.</p>
				<p class="space">If you're looking to increase your website's revenue with a dedicated team of SEO and PPC specialists, please contact our team because we're always looking for our next challenge.</p>
				<a href="/us/" class="button">About our agency</a>
			</div>
			<div data-aos="zoom-in-up" style="border-left: 2px solid white; padding-left: 2rem;" class="one-third column">
				<?php include "seo-results-right.php"; ?>
			</div>
		</div>
	</div>
</div>

<?php include "case-study-list.php"; ?>

<?php include "service-list.php"; ?>

    <!-- Introduction
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="white-pic-background">
	<div class="container">
		<div class="row space">
			<div class="two-thirds column">
				<h3>We deliver top results with better, more meaningful SEO and PPC campaigns</h3>
				<div class="bar" data-aos="bar"></div>
				<script src="/wp-content/themes/seed-website/js/animate.js"></script>
				<p>We've made it our mission to provide our clients with transparant, forward-thinking SEO and PPC services that grow their businesses online.</p>
				<p class="space">We do this because of our dedicate to being the best at the two most impactful components of digital marketing – SEO and PPC. We've achieved <a style="color: white;" title="seo and ppc results - seo and ppc case studies" href="/portfolio/"><b>fantastic results</b></a> for businesses in multiple sectors – from children's private education to ski holidays to corporate finance – so we have a broad understanding of SEO and PPC for businesses.</p>
				<a title="seo and ppc servcies" href="/services/" class="button">Our SEO & PPC Services</a>
			</div>
			<div data-aos="zoom-in-up" style="border-left: 2px solid white; padding-left: 2rem;" class="one-third column">
				<?php include "ppc-results-right.php"; ?>
			</div>
	    </div>
	</div>
</div>

<?php include "blog-list.php"; ?>

<?php include "contact-form.php"; ?>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://localhost:8888/seed-website/wp-content/themes/seed-website/js/animate.js"></script>
<script src="/wp-content/themes/seed-website/js/smoothscroll.js"></script>

<?php get_footer() ; ?>