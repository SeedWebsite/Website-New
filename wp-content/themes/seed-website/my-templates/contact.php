<?php
/*
 * Template Name: Contact
 * Description: Seed's contact page.
 */

 get_header(); ?>

  <!-- Home Masthead
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="hide-mobile mobile-padding" id='map' style='width: 100%; height: 600px; z-index: -10;'>
<script>
mapboxgl.accessToken = 'pk.eyJ1Ijoibmlja3N0dWFydG1pbGxlciIsImEiOiJjaXZreTUzbjgwMDVzMm9wNDI2am5vMTV3In0.gwYzmLqIhKWiOXB7irc-Bw';
var map = new mapboxgl.Map({
    container: 'map',
    center: [-0.139710, 50.821001],
    style: 'mapbox://styles/nickstuartmiller/civky6aaz00la2kpa0exvu7ar',
    zoom: (14.5),
    maxZoom: (14.5),
    minZoom: (14.5),
});
</script>
  <div class="container" style="padding-top: 25%;">
      <div class="row space">
        <div style="color: white;" class="one-half column">
          <img src="http://www.seedpublicity.co.uk/wp-content/uploads/2016/12/wordmark1.png" width="50%" height="auto" >
          <h2>5 Bartholomews, Brighton, BN1 1HG</h2>
        </div>
      </div>
  </div>
</div>

<div class="new-background mobile-padding">
  <div class="container">
    <div class="row space">
      <div class="two-thirds column">
        <h2><b>Get in touch</b></h2>
        <div class="bar" data-aos="bar"></div>
        <p class="statement">Email, call, tweet or drop in and see us – however you'd like to do it, let's start the conversation!</p>
        <p>If you would like to get in touch with us about improving your organic search ranking, optimising PPC campaigns or supporting with digital marketing then please do fill out our contact form. Alternatively, if you prefer to pick up the phone and talk to someone, call us on <a href="tel:01273286616">01273 286 616</a> or email us <a href="mailto:hello@seedpublicity.co.uk">hello@seedpublicity.co.uk</a></p>
        <p class="statement"><b>You're only three steps away from improving your website's performance...</b></p>
      </div>
        <div style="border-left: 2px solid #6FDAF5; padding-left: 5rem;" class="one-third column hide-mobile">
          <p class="fake-h4">Speak with us right now:</p>
          <div class="underline"></div>
          <p class="small"><a href="tel:01273286616"><i class="fa fa-phone fa-fw" aria-hidden="true"></i> +44 (0)1273 286 616</a></p>
          <p class="small"><a href="mailto:hello@seedpublicity.co.uk"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i> hello@seedpublicity.co.uk</a><br></p>
        </div>
      </div>
    </div>
  </div>
  <div class="container center mobile-middle">
      <div data-aos="fade-up" class="row space mobile-middle">
        <div style="padding-left: 1rem; padding-right: 1rem;" class="one-third column">
              <img alt="get in touch with seed publicity" src="/wp-content/uploads/2017/02/get%20in%20touch.svg" width="50%" height="auto">
              <p class="statement">01. Get in touch</p>
              <p>It only takes a few seconds to send an email or pick up the phone, we'll have a good chat to ensure we can help your business.</p>
        </div>
        <div style="padding-left: 1rem; padding-right: 1rem;" class="one-third column">
            <img alt="get in touch with seed publicity" src="/wp-content/uploads/2017/02/project%20brief.svg" width="50%" height="auto">
            <p class="statement">02. Project brief</p>
            <p>You set a clear brief with what we'd like to achieve by working together, we deliver a comprehensive proposal based on your goals.</p>
        </div>
        <div style="padding-left: 1rem; padding-right: 1rem;" class="one-third column">
            <img alt="get in touch with seed publicity" src="/wp-content/uploads/2017/02/project%20kickoff.svg" width="50%" height="auto">
            <p class="statement">03. Project kickoff</p>
            <p>We get started with no long-term contracts, just mutual trust. Cue awesome results and the best working relationship you've had.</p>
        </div>
      </div>
  </div>
</div>

<?php include "contact-form.php"; ?>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="/wp-content/themes/seed-website/js/animate.js"></script>
<script src="/wp-content/themes/seed-website/js/smoothscroll.js"></script>

<?php get_footer() ; ?>