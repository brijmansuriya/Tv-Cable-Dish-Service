<header id="header"
	data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 148, 'stickySetTop': '0px', 'stickyChangeLogo': true}">
	<div class="header-body border-color-primary border-top-0 box-shadow-none">
		
		<div class="header-nav-bar bg-primary" data-sticky-header-style="{'minResolution': 991}"
			data-sticky-header-style-active="{'background-color': 'transparent'}"
			data-sticky-header-style-deactive="{'background-color': '#0088cc'}">
			<div class="container">
		
				<div class="header-row">
		
					<div class="header-column">
						<div class="header-row justify-content-end">
						<div class="header-logo header-logo-sticky-change">
							<a href="index.php">
								<img class="header-logo-sticky opacity-0" alt="Porto" width="180"
									style='height:auto;' data-sticky-width="150"  data-sticky-top="3"
									src="images\logo.png">
								<img class="header-logo-non-sticky opacity-0" alt="Porto" style='height:auto; width:180px'	src="images\logo.png">
							</a>
						</div>
							<!-- justify-content-start -->
							<div class="header-nav header-nav-force-light-text py-2 py-lg-3"
								data-sticky-header-style="{'minResolution': 991}"
								data-sticky-header-style-active="{'margin-left': '135px'}"
								data-sticky-header-style-deactive="{'margin-left': '0'}">
								<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
									<nav class="collapse">
										<ul class="nav nav-pills" style="text-align: right" id="mainNav">
											<li class="dropdown-full-color dropdown-light">
												 <a	class="dropdown-item <?php if($page=="1"){ echo "active"; }  ?>" href="index.php"> Home
												</a>

											</li>
											<li class="dropdown-full-color dropdown-light">
												 <a  class="dropdown-item <?php if($page=="2"){ echo "active"; }  ?>" href="product.php"> Products
												</a>

											</li>
											<li class="dropdown-full-color dropdown-light dropdown-mega">
												<a class="dropdown-item <?php if($page=="3"){ echo "active"; }  ?>" href="aboutus.php">
													About Us </a>
											</li>
											<li class="dropdown-full-color dropdown-light"> 
												<a class="dropdown-item <?php if($page=="4"){ echo "active"; }  ?>" href="contactus.php"> Contact Us
												</a>

											</li>
										</ul>
									</nav>
								</div>
								<button class="btn header-btn-collapse-nav my-2" data-toggle="collapse"
									data-target=".header-nav-main nav">
									<i class="fas fa-bars"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
