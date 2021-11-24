<?php
session_start();
error_reporting(0);
$page = "4";

$form_randomizer = rand(11111, 99999) . rand(111, 999) . rand(1, 9);
echo $_SESSION["fmr_united"] = $form_randomizer;
$form_key = base64_encode(rand(11111111, 99999999) . "/feedbackPassed/" . $_SESSION["fmr_united"] . "/" . rand(111111, 999999));
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include ('include/head.php');?>
		<style>
			.success {
				background-color: #0e90d2;
				border: 1px solid #FFFFFF;
				color: #FFFFFF;
				border-radius: 4px;
				padding: 5px 15px;
				margin-bottom: 20px;
			}

			.danger {
				background-color: #E1261C;
				border: 1px solid #FFFFFF;
				color: #FFFFFF;
				border-radius: 4px;
				padding: 5px 15px;
				margin-bottom: 20px;
			}
		</style>
	</head>
	<body data-plugin-page-transition>
		<div class="body">
			<?php include('include/header.php'); ?>
			<div role="main" class="main">

				<!-- <div id="googlemaps" class="google-map mt-0" style="height: 500px;"></div> -->
				<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7"
					style="background-image: url(img/page-header/page-header-about-us.jpg);">
					<div class="container">
						<div class="row mt-5">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="text-9 font-weight-bold">Contact Us</h1>
								<span class="sub-title">The perfect choice for your next project</span>
							</div>
							<div class="col-md-12 align-self-center order-1">
								<ul class="breadcrumb breadcrumb-light d-block text-center">
									<li><a href="#">Home</a></li>
									<li class="active">Contact Us</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row py-4">
						<div class="col-lg-6">
							<h2 class="font-weight-bold text-8 mt-2 mb-0">Contact Us</h2>
							<p class="mb-4">Feel free to ask for details, don't save any questions!</p>
							<?php
								if ($_SESSION["enqiry_Success"] != "") {
									?>
									<div id="message-contact" class="success"><?php echo $_SESSION["enqiry_Success"]; ?></div>
								<?php
									$_SESSION["enqiry_Error"] = "";
								} else if ($_SESSION["enqiry_Error"] != "") {
									?>
									<div id="message-contact" class="danger"><?php echo $_SESSION["enqiry_Error"]; ?></div>
								<?php
									$_SESSION["enqiry_Success"] = "";
								}
								$_SESSION["enqiry_Success"] = "";
								$_SESSION["enqiry_Error"] = "";
								?>
							<form class="contact-form" action="inquiry_save.php" method="POST">
								
								
								<div class="form-row">
									<div class="form-group col-lg-6">

										<input type="hidden" name="formkey" value="<?= $form_key; ?>" />
										<input type="hidden" name="fmrkey" value="<?= $form_randomizer; ?>" />
										<label class="mb-1 text-2">Full Name</label>

										<input type="text" value="" data-msg-required="Please enter your name."
											maxlength="100" class="form-control text-3 h-auto py-2" name="name_<?= $form_randomizer; ?>" required>
									</div>
									<div class="form-group col-lg-6">
										<label class="mb-1 text-2">Email Address</label>
										<input type="email" value="" data-msg-required="Please enter your email address."
											data-msg-email="Please enter a valid email address." maxlength="100"
											class="form-control text-3 h-auto py-2" name="email_<?= $form_randomizer; ?>" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label class="mb-1 text-2">Phone</label>
										<input type="text" value="" data-msg-required="Please enter the Phone."
											maxlength="100" class="form-control text-3 h-auto py-2" name="phone_<?= $form_randomizer; ?>" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label class="mb-1 text-2">Message</label>
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="1"
											class="form-control text-3 h-auto py-2" name="message_<?= $form_randomizer; ?>" required></textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="submit" value="Send Message" class="btn btn-primary btn-modern"
											data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-6">
							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
								<h4 class="mt-2 mb-1">Our <strong>Office</strong></h4>
								<ul class="list list-icons list-icons-style-2 mt-2">
									<li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address : </strong>
										Survey No.35/2, Near Vraj -1 Industrial Area,<br>
										Anida(Bhalodi),Ta.Gondal, Dis. Rajkot - 360 311 Gujrat, India.
									</li>
									<li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone : </strong><a
											href="tel:7817817575">+91 7817817575</a><br>
											&nbsp;<a href="tel:8980893936" class="ml-5">+91 8980893936</a></li>
									<li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email : </strong>
										<a href="mailto:info@rudracotton.com">info@rudracotton.com</a>
									</li>
								</ul>
							</div>
							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
								<h4 class="pt-5">Business <strong>Hours</strong></h4>
								<ul class="list list-icons list-dark mt-2">
									<li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 5pm</li>
									<li><i class="far fa-clock top-6"></i> Saturday - 9am to 2pm</li>
									<li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
								</ul>
							</div>
						
						</div>
					</div>
				</div>
			</div>
			
			<div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14800.365110724768!2d70.7408971!3d21.9694596!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdbc960d9f9acb07a!2sRudra%20Cotton%20Industries!5e0!3m2!1sen!2sin!4v1628239609411!5m2!1sen!2sin" width="100%" height="450" style="border:0;margin-bottom: -9px;" allowfullscreen="" loading="lazy" class="mt-5"></iframe>
			</div>
			<?php include('include/footer.php'); ?>
		</div>
		<?php include('include/footerjs.php'); ?>

	</body>
</html>