<!DOCTYPE html>
<html lang="en">
<head>
<?php include("include/connection.php"); ?>
<?php include("include/head.php"); ?>
</head>
<body id="bg">
<div id="loading-area" class="loading-03"></div>
<div class="page-wraper">
	<!-- Header -->
	<?php include("include/header.php"); ?>
	<!-- Header End -->
	<div class="page-content bg-white">
		<!-- Slider -->
		<div class="banner-three bg-primary p-t100" style="background-image: url(images/background/bg5.png), url(images/background/bg6.png), var(--gradient-sec);">
			<div class="container banner-inner">
				<div class="row align-items-center">
					<div class="col-xl-8 col-lg-7 col-md-7">
						<div class="banner-content text-white">
							<h6 data-wow-delay="0.5s" data-wow-duration="3s" class="wow fadeInUp sub-title text-yellow">We Are Product Designer From India</h6>
							<h1 data-wow-delay="1s" data-wow-duration="3s" class="wow fadeInUp m-b15">Aviation IT Solutions</h1>
							<p data-wow-delay="1.5s" data-wow-duration="3s" class="wow fadeInUp m-b30">Nunc vel ligula ut erat scelerisque vehicula sit amet porttitor magna. Donec malesuada quis diam quis pellentesque. Mauris mollis ligula magna.</p>
							<a data-wow-delay="2s" data-wow-duration="3s" href="javascript:void(0);" class="wow fadeInUp btn gradient btn-primary">Learn More</a>
						</div>
					</div>
					<div class="col-xl-4 col-lg-5 col-md-5">
						<div class="dz-media wow fadeIn" data-wow-delay="1s" data-wow-duration="3s">
							<img src="images/main-slider/slider3/pic1.png" class="move-1" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Services -->
	
		<!-- About Us -->
		<section class="content-inner  bg-white" id="about">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 m-b30 d-lg-block d-none">
						<div class="dz-media left-ml ">
							<img src="images/about/img6.png" class="move-2" alt="">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="section-head style-3">
							<p>ABOUT US</p>
							<h2 class="title">13+ Years of Innovation and Quality</h2>
						</div>
						<div class="icon-bx-wraper style-3 left box-hover m-b30 wow fadeInRight active" data-wow-duration="2s" data-wow-delay="0.4s">
							<div class="icon-bx-sm radius"> 
								<a href="javascript:void(0);" class="icon-cell">
									<i class="flaticon-idea"></i>
								</a> 
							</div>
							<div class="icon-content">
								<h4 class="dlab-title m-b10">Certified Company</h4>
								<p>We are an ISO 9001:2015 certified company and have a proven track record of delivering revolutionary software solutions that are designed and developed using the emerging technologies.</p>
							</div>
						</div>
						<div class="icon-bx-wraper style-3 left box-hover m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.6s">
							<div class="icon-bx-sm radius"> 
								<a href="javascript:void(0);" class="icon-cell">
									<i class="flaticon-coding"></i>
								</a> 
							</div>
							<div class="icon-content">
								<h4 class="dlab-title m-b10">Experience</h4>
								<p>We have more than a decade of experience in developing world-class business solutions that deliver guaranteed economic value to our esteemed customers all around the World.</p>
								</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- prise menu -->
		<section class="content-inner bg-gray">
			<div class="container">
				<div class="section-head style-3 text-center">
					<h2 class="title">Peckish</h2>
				</div>
				<div class="row justify-content-center">
				<?php 
				$data= mysqli_query($db,"SELECT t1.* FROM tbl_package as t1  where t1.isdelete=0  ORDER BY ID DESC");
				while ($alldata = mysqli_fetch_array($data)) {
					$wdata[] = $alldata;
				}
				foreach ($wdata as $row) {?>
					<div class="col-lg-4 col-md-6 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
						<div class="pricingtable-wrapper style-3 m-b30">
							<div class="pricingtable-inner">
								<div class="pricingtable-head">
									<div class="pricingtable-title">
										<h3 class="title"><?=$row['package_name']?></h3>
									</div>
									<div class="icon-cell">
										<img src="images/pricingtable/icon1.png" alt="">
									</div>
								</div>
								<div class="pricingtable-price"> 
									<h2 class="pricingtable-bx"><?=$row['price']?><small class="pricingtable-type">/Month</small></h2>
								</div>
								<?php
								$pid=$row['id'];
								$subdata= mysqli_query($db,"SELECT t2.* FROM pack_img as t2 where t2.isdelete=0 and p_id=".$pid);
								while ($all_sub_data = mysqli_fetch_array($subdata)) { ?>
									<div class='testimonial-pic'>
											<img src='admin/public/90/<?=$all_sub_data['img']?>' alt=''>
											<p><?=$all_sub_data['c_name']?></p></div>
							    <?php } ?>
								<div class="pricingtable-footer"> 
									<a href="javascript:void(0);" class="btn btn-lg btn-outline-primary">Start Now</a>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
					
					
				</div>
			</div>
		</section>
		<!-- prise menu -->
		<!-- Our Fetures -->
		<section class="content-inner bg-white">
			<div class="container">
				<div class="section-head style-3 text-center">
					<h2 class="title">Our Services</h2>
				</div>
				<div class="row align-items-center about-wraper-2">
					<div class="col-lg-6 col-md-6">
						<div class="row">
							<div class="col-lg-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
								<!-- <div class="icon-bx-wraper right m-b10 icon-up style-8 m-md-b30"> -->
								<div class="icon-bx-wraper left m-b10 icon-up style-8 m-md-b30">
									<div class="icon-bx-sm m-b20"> 
										<a href="javascript:void(0);" class="icon-cell"><i class="flaticon-idea"></i></a> 
									</div>
									<div class="icon-content">
										<h4 class="dlab-tilte text-capitalize">Application Development</h4>
										<p>At CaprusIT, we develop custom applications that cater to a wide range of dynamic business requirements. We Ensure that the applications we develop are robust, secure, and scalable at any point in time.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
								<div class="icon-bx-wraper left m-b10 icon-up style-8 m-md-b30">
									<div class="icon-bx-sm m-b20"> 
										<a href="javascript:void(0);" class="icon-cell"><i class="flaticon-coding"></i></a> 
									</div>
									<div class="icon-content">
										<h4 class="dlab-tilte text-capitalize">Consulting Services</h4>
										<p>Consulting Services provides an experienced team of diverse professionals and practitioners to help you think through and plan your IT strategy.</p>
									</div>
								</div>
							</div>
							
							
						</div>
					</div>
				
					<div class="col-lg-6 col-md-6">
						<div class="row">
							
							<div class="col-lg-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
								<div class="icon-bx-wraper left m-b10 icon-up style-8 m-md-b30">
									<div class="icon-bx-sm m-b20"> 
										<a href="javascript:void(0);" class="icon-cell"><i class="flaticon-vector"></i></a> 
									</div>
									<div class="icon-content">
										<h4 class="dlab-tilte text-capitalize">Application Management Outsourcing</h4>
										<p>Public and private sector organizations encounter decelerating challenges in the pursuit of keeping all their applications arrayed with their business strategies. Skilled workforce is in short supply.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
								<div class="icon-bx-wraper left m-b10 icon-up style-8 m-md-b30">
									<div class="icon-bx-sm m-b20"> 
										<a href="javascript:void(0);" class="icon-cell"><i class="flaticon-rocket"></i></a> 
									</div>
									<div class="icon-content">
										<h4 class="dlab-tilte text-capitalize">Staff Augmentation</h4>
										<p>Whether addressing a specific deliverable or consulting on a larger enterprise initiative, Caprus IT offers a flexible and knowledgeable contingent workforce.</p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Projects -->
	
		<!-- Newsletter -->
		<section class="content-inner-3 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s" style="background-image: url(images/background/bg12.png), var(--gradient-sec); background-size: cover, 200%; background-repeat: no-repeat;">
			<div class="container">
				<div class="row justify-content-center text-center">
					<div class="col-xl-6 col-lg-8 col-md-9">
						<div class="section-head style-3 text-white">
							<h2 class="title">Subscribe To Us !</h2>
							<p>Donec ut mattis orci. In sit amet posuere urna, eget consectetur purus. Donec ex tortor, consectetur nec eros condimentum, tincidunt facilisis est. </p>
						</div>
						<div class="dlab-subscribe style-2 max-w500 m-auto">
							<form class="dzSubscribe" action="javascript:void(0);" method="post">
								<div class="dzSubscribeMsg"></div>
								<div class="form-group m-b30">
									<div class="input-group mb-0">
										<input name="dzEmail" required="required" type="email" class="form-control" placeholder="Email Address">
										<div class="input-group-addon">
											<button name="submit" value="Submit" type="submit" class="btn gradient shadow btn-primary">Subscribe</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Team -->
	
		<!-- Testimonials -->
		<section class="content-inner-1 bg-white" style="background-image: url(images/background/bg3.png);">
			<div class="container">
				<div class="section-head style-3 text-center mb-2">
					<h2 class="title">What Our Clients Say’s</h2>
				</div>
				<div class="testimonials-carousel2 owl-carousel owl-theme owl-none owl-theme dots-style-1 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
					<div class="item">
						<div class="testimonial-2">
							<div class="testimonial-detail">
								<div class="testimonial-pic">
									<img src="images/testimonials/pic1.jpg" alt="">
								</div>
								<div class="clearfix">
									<strong class="testimonial-name">Eity Akhter</strong> 
									<span class="testimonial-position">CEO & Founder </span>
								</div>
							</div>							
							<div class="testimonial-text">
								<p>Cras porttitor orci vel ex convallis congue. Aliquam et pharetra urna. Quisque auctor purus in nunc posuere, vitae condimentum odio mattis.</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-2">
							<div class="testimonial-detail">
								<div class="testimonial-pic">
									<img src="images/testimonials/pic2.jpg" alt="">
								</div>
								<div class="clearfix">
									<strong class="testimonial-name">Cak Dikin</strong> 
									<span class="testimonial-position">Designer </span>
								</div>
							</div>
							<div class="testimonial-text">
								<p>Cras porttitor orci vel ex convallis congue. Aliquam et pharetra urna. Quisque auctor purus in nunc posuere, vitae condimentum odio mattis.</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-2">
							<div class="testimonial-detail">
								<div class="testimonial-pic">
									<img src="images/testimonials/pic3.jpg" alt="">
								</div>
								<div class="clearfix">
									<strong class="testimonial-name">Cak Dikin</strong> 
									<span class="testimonial-position">Designer </span>
								</div>
							</div>
							<div class="testimonial-text">
								<p>Cras porttitor orci vel ex convallis congue. Aliquam et pharetra urna. Quisque auctor purus in nunc posuere, vitae condimentum odio mattis.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Pricing Table -->
	
	</div>
	<!-- Footer -->
	<?php include("include/footer.php"); ?>
    <!-- Footer End -->
	<button class="scroltop icon-up" type="button"><i class="fa fa-arrow-up"></i></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->

<?php include("include/footerjs.php"); ?>
</body>
</html>