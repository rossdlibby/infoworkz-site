<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	$header = '<title>Welcome to Infoworkz Solutions Group LLC, Contact</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">';
	include_once('includes/header.php'); ?>
<!-- END HEADER -->


<!-- INNER BANNER -->
<div class="w-section inner-banner" id="top" data-ix="show-top-btn">
	<div class="w-container">
		<div class="w-row">
			<div class="w-col w-col-9">
				<div class="breadcrumb">Contact Page&nbsp;<span class="lighter"><span>|</span> <em>about this service</em></span></div>
			</div>
			<div class="w-col w-col-3 left-aglin-column cetner">
				<div><a class="bread-link" href="index.html">Home</a>&nbsp; <span><span class="gr-color-l">|&nbsp;</span></span>&nbsp;Contact Page</div>
			</div>
		</div>
	</div>
</div>
<!-- END INNER BANNER -->

<!-- CONTACT -->
<div class="w-section section">
	<div class="w-container">
		<div class="tittle-wrapper">
			<h3 class="h-minimal">we'd love to hear from you</h3>
			<div class="sub-tittle">Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna. Sed a libero.
				<br>Proin pretium, leo ac pellentesque mollis, felis nunc ultrices eros, sed <span class="hand-of-sean">gravida augue</span> augue mollis justo. Nulla sit amet est.
				<br><span class="hand-of-sean"></span>
			</div>
		</div>
		<div class="inner-space">
			<div class="w-row">
				<div class="w-col w-col-8">
					<div class="tittle-line">
						<h5>write us</h5>
						<div class="divider-1 small">
							<div class="divider-small"></div>
						</div>
					</div>
				<div>
			<div>
				<form id="email-form" name="email-form" method="POST" data-name="Email Form">
					<input class="w-input text-field" id="name" type="text" placeholder="Enter your name" name="name" data-name="Name" required>
					<input class="w-input text-field" id="email" type="email" name="email" placeholder="Enter your email address" data-name="Email" required>
					<input class="w-input text-field" id="subject" type="text" name="subject" placeholder="Enter your subject" data-name="Subject">
					<textarea class="w-input text-area" id="text-area" name="message" required placeholder="Your message here..." data-name="Text Area"></textarea>
					<div class="space">
						<button class="w-button button" type="submit">Submit Message</button>
					</div>
				</form>
				<div id="result"></div>
				<!--div class="w-form-done">
				<p>Thank you! Your submission has been received!</p>
				</div>
				<div class="w-form-fail">
				<p>Oops! Something went wrong while submitting the form :(</p>
				</div-->
			</div>
		</div>
	</div>
	<div class="w-col w-col-4 res-space">
		<div class="tittle-line">
			<h5>put text here</h5>
			<div class="divider-1 small">
				<div class="divider-small"></div>
			</div>
		</div>
		<div>
			<p>Maecenas sed justo varius velit imperdiet bibendum. Vivamus nec sapien massa, a imperdiet diam. Aliquam erat volutpat. log in to the forums, and a nunc et rutrum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.&nbsp;
			<br>
			<br>Vivamus nec sapien massa, a imperdiet diam. Aliquam erat volutpat. log in to the forums, and a nunc et rutrum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
		</div>
	</div>
</div>
</div>
</div>
</div>
<!-- END CONTACT -->

<!-- OPEN MAP -->
<div class="call-to-action">
	<div class="w-container">
		<div class="hero-center-div">
			<a class="w-inline-block map-block" href="#" data-ix="open-map">
				<div class="mp-txt">find us on map</div>
				<div class="map-arrow">
					<div class="w-embed"><i class="fa fa-chevron-down"></i>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>
<div class="map" data-ix="remove-map">
	<div class="w-widget w-widget-map" data-widget-latlng="40.790278,-73.959722" data-widget-style="terrain" data-widget-zoom="13" data-disable-scroll="1"></div>
</div>
<!-- END OPEN MAP -->


<!-- START FOOTER -->
<?php include_once('includes/footer.php'); ?>
<!-- END FOOTER -->

<!-- Scripts -->
<?php include_once('includes/scripts.php'); ?>
<!-- End scripts -->

</body>
</html>