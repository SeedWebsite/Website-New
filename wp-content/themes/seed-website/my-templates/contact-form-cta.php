<?php "contact-form-cta.php"; ?>

    <!-- New contact form
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div style=" margin-top: 2rem; border-radius: 4px 4px 0px 0px; background-color: #303a51; padding-left: 4rem;">
	<p style="color: white; font-weight: bold; font-size: 2.4rem; vertical-align: middle; padding-top: 1rem; padding-bottom: 1rem;">Tell us about your project!</p>
</div>
<div class="space" style="border-radius: 0px 0px 4px 4px; margin-top: -2.5rem; background-color: #ebeced; box-shadow: 0 2px 0 0 #c3c2c6; padding: 2rem 4rem;">
	<p style="margin-top: 0rem;">Whatever you want to discuss, we're here to help. We love to hear about your business goals and how we can develop marketing strategies to help you achieve them.</p>
	<form name="contactform" method="post" action="/contact.php">
		<input class="u-pull-left" style="width: 48%; margin-right: 4%;" placeholder="Your name" type="text" name="yourname">
		<input class="u-pull-left" style="width: 48%;" placeholder="Your email address" type="email" name="email">
		<input class="u-full-width" style="width: 48%;" placeholder="Your phone number" type="text" name="subject">
		<textarea class="u-full-width" style="width: 100%;" placeholder="How can we help you?" name="comments"></textarea>
		<input class="button button-primary" type="submit" value="Send Message">
	</form>
</div>