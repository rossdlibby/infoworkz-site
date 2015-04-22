<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once('includes/header.php'); ?>
<!-- END HEADER -->


<!-- INNER BANNER -->
<div class="w-section inner-banner" id="top" data-ix="show-top-btn">
	<div class="w-container">
		<div class="w-row">
			<div class="w-col w-col-9">
				<div class="breadcrumb"><?php echo $title; ?>&nbsp;<span class="lighter"><span>|</span> <em>about this service</em></span></div>
			</div>
			<div class="w-col w-col-3 left-aglin-column cetner">
				<div><a class="bread-link" href="index.html">Home</a>&nbsp; <span><span class="gr-color-l">|&nbsp;</span></span>&nbsp;<?php echo $title; ?></div>
			</div>
		</div>
	</div>
</div>
<!-- END INNER BANNER -->


<!-- POST BLOG PAGE -->
<div class="w-section section">
	<div class="w-container">
		<div class="w-row">
			<div class="w-col w-col-9 w-col-stack">
				<div class="portfolio-pagination blog-pag">
					<div class="w-row">
						<div class="w-col w-col-6"></div>
						<div class="w-col w-col-6 left-aglin-column">
							<a class="w-inline-block p-pagination" href="#">
								<div class="w-embed"><i class="fa fa-chevron-right"></i>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="normal-blog-wrapper">
					<div class="blog-post">
						<div>
							<div class="w-slider carousel-project" data-animation="slide" data-duration="500" data-infinite="1" data-nav-spacing="5">
							<div class="w-slider-arrow-right ver-remove-spc">
							</div>
						</div>
					</div>
					<div class="space">
						<h3 class="portfolio-tittle"><?php echo $content['title']; ?></h3>
						<?php foreach($content['body'] as $paragraph) { ?>
						<div class="space">
							<?php echo $paragraph; ?>
						</div>
						<?php } ?>
					</div>
				</div>
			<div class="divider-space less-space">
				<div class="divider-1-pattern"></div>
			</div>
		</div>
	<div>
<div>
</div>
</div>
</div>

<!-- SIDERBAR -->
<?php include_once('includes/sidebar.php'); ?>
<!-- END SIDERBAR -->

<!-- END POST BLOG PAGE -->


<!-- CALL TO ACTION -->
<div class="call-to-action">
	<div class="w-container">
		<div class="w-row">
			<div class="w-col w-col-9 w-col-stack">
				<h4 class="m-p"><span class="white">HAVE AN IDEA? WE’RE HERE TO HELP YOU MANAGE YOUR WORK</span></h4>
			</div>
			<div class="w-col w-col-3 w-col-stack left-aglin-column cetner">
				<a class="w-clearfix w-inline-block button btn-line btn-small" href="#">
					<div class="btn-ico">
						<div class="w-embed"><i class="fa fa-rocket"></i>
						</div>
					</div>
					<div class="btn-txt">take a tour</div>
				</a>
			</div>
		</div>
	</div>
</div>
<!-- END CALL TO ACTION -->

<!-- START FOOTER -->
<?php include_once('includes/footer.php'); ?>
<!-- END FOOTER -->

<!-- Scripts -->
<?php include_once('includes/scripts.php'); ?>
<!-- End scripts -->

</body>
</html>