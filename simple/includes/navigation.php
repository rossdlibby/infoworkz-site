<?php include_once('nav-items.php'); ?>
<div class="w-nav normal-header" id="myaffix" data-collapse="medium" data-animation="default" data-duration="400" data-contain="1">
	<div class="w-container">
		<a class="w-nav-brand brand-logo" href="/"><img src="images/logo.jpg" width="134" alt="logo.jpg">
		</a>
		<nav class="w-nav-menu w-clearfix nav-menu" role="navigation">
			<?php foreach($menu as $item) {
				if(count($item[1]) === 1)
				{
					?>
					<a class="w-nav-link nav-link" href="<?php echo $item[1]; ?>"><?php echo $item[0]; ?></a>
					<?php
				} else {
					?>
					<div class="w-dropdown w-clearfix" data-delay="0" data-ix="move-dropdown-arrow">
						<div class="w-dropdown-toggle nav-link">
							<!-- mega menu -->
							<div><?php echo $item[0]; ?></div>
								<div class="w-icon-dropdown-toggle drop-arrow"></div>
						</div>
						<nav class="w-dropdown-list mega-menu">
							<div class="w-row">
							<?php
								foreach($item[1] as $section)
								{
									?>
									<div class="w-col w-col-3 w-col-stack mega-tittle">
										<div class="element-tittle">
											<h6><?php echo $section[0]; ?></h6>
										</div>
										<div class="space margin-bottom">
											<ul class="w-list-unstyled">
											<?php
												foreach($section[1] as $link)
												{
													?>
													<li>
														<a class="w-clearfix w-inline-block mega-item-list" href="<?php echo $link[1]; ?>">
															<div class="li-ico-mega">
																<i class="fa fa-angle-right"></i>
															</div>
															<div><?php echo $link[0]; ?></div>
														</a>
													</li>
													<?php
												}
												?>
											</ul>
										</div>
									</div>
									<?php }
								?>
							</div>
						</nav>
					</div>

					<?php
				}
			} ?>
			</nav>
			<!-- end mega menu -->
			</div>
			
		<!-- 	<div class="w-hidden-medium w-hidden-small w-hidden-tiny search-wrapper" data-ix="show-search">
				<i class="fa fa-search"></i>
				<div class="search-result" data-ix="hide-search">
				<div>
					<form class="w-clearfix" name="email-form" data-name="Email Form">
						<input class="w-input search-field" id="Search-4" type="email" name="Search-4" data-name="Search 4">
						<a class="w-inline-block search-form" href="#">
							<i class="fa fa-search"></i>
						</a>
					</form>
				</div>
			</div> -->