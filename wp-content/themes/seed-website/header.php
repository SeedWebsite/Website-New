<!DOCTYPE html>
<html lang="en">

<head>

<?php wp_head(); ?>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title><?php wp_title(''); ?></title>
  <meta name="author" content="Seed Publicity">
  <meta name="google-site-verification" content="N17h1pBy4EJiGdlCwbQZu8ALS10Wx0gBNj1g0jpsfLk" />

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script>
    (function(d) {
      var config = {
        kitId: 'mfp1zig',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="/wp-content/themes/seed-website/css/normalize.css">
  <link rel="stylesheet" href="/wp-content/themes/seed-website/css/skeleton.css">
  <link rel="stylesheet" href="/wp-content/themes/seed-website/css/typography.css">
  <link rel="stylesheet" href="/wp-content/themes/seed-website/css/grid.css">
  <link rel="stylesheet" href="/wp-content/themes/seed-website/css/colors.css">
  <link rel="stylesheet" href="/wp-content/themes/seed-website/css/navigation.css">
  <link rel="stylesheet" href="/wp-content/themes/seed-website/css/spacing.css">
  <link rel="stylesheet" href="/wp-content/themes/seed-website/css/buttons.css">
  <link rel="stylesheet" href="/wp-content/themes/seed-website/css/backgrounds.css">
  <link rel="stylesheet" href="/wp-content/themes/seed-website/css/animation.css">

  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- JavaScript
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=yes' />
  <script src='https://api.mapbox.com/mapbox-gl-js/v0.28.0/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v0.28.0/mapbox-gl.css' rel='stylesheet' />
  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
  <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="http://www.seedpublicity.co.uk/wp-content/uploads/2016/12/favicon.png">

  <!-- Navigation
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <div class="navbar-spacer">

  </div>
    <nav class="navbar nav-down">
      <div class="container">
        <div style="margin-top:1rem;" class="one-third column navbar-logo hide-mobile">
          <ul>
            <li-2><a href="/" title="SEO Agency in Brighton"><img alt="Seed Pubicity Logo" title="Seed Publicity Logo" src="http://www.seedpublicity.co.uk/wp-content/uploads/2016/12/wordmark1.png" width="130" height="42" ></a></li-2>
          </ul>
        </div>
        <div class="two-thirds column">
        <ul class="navbar-list">
          <li class="navbar-item"><a class="navbar-link nav-underline" href="/us/">US</a></li>
          <li class="navbar-item"><a class="navbar-link nav-underline" href="/services/">Services</a></li>
          <li class="navbar-item"><a class="navbar-link nav-underline" href="/portfolio/">Case Studies</a></li>
          <li class="navbar-item"><a class="navbar-link nav-underline" href="/resources/">Resources</a></li>
          <li class="navbar-item"><a class="navbar-link nav-underline" href="/contact/">CONTACT</a></li>
        </ul>
      </div>
    </div>
  </nav>

<div class="hide-desktop">
  <ul class="topnav" id="myTopnav">
    <li><a href="/"><img src="/wp-content/uploads/2016/12/wordmark1.png" width="130px" height="auto" ></a></li>
          <li class="navbar-item"><a href="/us/">+ US</a></li>
          <li class="navbar-item"><a href="/services/">+ WHAT WE DO</a></li>
          <li class="navbar-item"><a href="/portfolio/">+ CASE STUDIES</a></li>
          <li class="navbar-item"><a href="/resources/">+ RESOURCES</a></li>
          <li class="navbar-item"><a href="/contact/">+ CONTACT</a></li>
    <li class="icon">
      <div class="burger" href="javascript:void(0);" onclick="myFunction()"></div>
    </li>
  </ul>
  <script>
  function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
          x.className += " responsive";
      } else {
          x.className = "topnav";
      }
  }
  </script>
  <script>
  (function () {
  $('.burger').on('click', function() {
    $('.burger').toggleClass('animate');
  })
})();
  </script>
</div>

</head>

<body>