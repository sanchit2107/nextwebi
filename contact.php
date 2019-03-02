<?php include 'includes/header.php'; ?>

	<section class="page-banner">
		<div class="container">
			<h2 class="page-title">Contact Me</h2>
			<ul class="breadcrumbs">
				<li><a href="index.php">Home</a></li>
				<li><a href="#">Contact</a></li>
			</ul> <!-- .breadcrumbs ends -->
		</div> <!-- .container ends -->
	</section> <!-- .page-banner ends -->

	<section class="page-content">
		<div class="container">
			<div class="row section-content">
				<div class="col-md-12">

					<!-- CONTACT OPTIONS -->

					<div class="contact-options section-block">
						<h2 class="block-title">Contact Me</h2>

						<div class="row section-content">
							<div class="col-md-4 address-block">
								<div class="content-wrapper">
									<div class="icon-block"><i class="icon ion-ios-location"></i></div>
									<h3>Address</h3>
									<address>Muzaffarnagar <br> Uttar Pradesh</address>
								</div> <!-- .content-wrapper ends -->
								
							</div> <!-- .col-md-4 ends -->

							<div class="col-md-4 phone-block">
								<div class="content-wrapper">
									<div class="icon-block"><i class="icon ion-ios-telephone"></i></div>
									<h3>Phone</h3>
									<a href="#">+ (111) - 232 - 987654</a>
									<a href="#">+ (111) - 232 - 987655</a>
								</div> <!-- .content-wrapper ends -->
							</div> <!-- .col-md-4 ends -->

							<div class="col-md-4 email-block">
								<div class="content-wrapper">
									<div class="icon-block"><i class="icon ion-email"></i></div>
									<h3>Email</h3>
									<a href="#">email@nextwebi.com</a>
									<a href="#">email2@nextwebi.com</a>
								</div> <!-- .content-wrapper ends -->
							</div> <!-- .col-md-4 ends -->
						</div> <!-- .row ends -->
					</div> <!-- .contact-options ends -->


					<!-- CONTACT FORM  -->

					<section class="form-block section-block">
						<div class="container">
							
							<div class="row section-content">
								<div class="col-md-8 form-block">

									<div class="form-message">
										<p></p>
									</div>
								
									<form class="" id="politics-contact" method="POST" action="php/form-handler.php">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="sr-only" for="name">Name:</label>
													<input type="text" class="form-control" id="name" name="name" placeholder="Your name">
												</div> <!-- .form-group ends -->

												<div class="form-group">
													<label class="sr-only" for="email">Email:</label>
													<input type="email" class="form-control" id="email" name="email" placeholder="Your email">
												</div> <!-- .form-group ends -->

												<div class="form-group">
													<label class="sr-only" for="url">Website:</label>
													<input type="url" class="form-control" id="url" name="url" placeholder="Your website">
												</div> <!-- .form-group ends -->

											</div> <!-- .col-md-6 ends -->

											<div class="col-md-6">
												<label class="sr-only" for="message">Message:</label>
												<textarea class="form-control" id="message" name="message" placeholder="Your message here"></textarea>


												<button type="submit" class="btn btn-main btn-normal pull-right" name="submit">Submit</button>
											</div> <!-- .col-md-6 ends -->
										</div> <!-- .row ends -->
									</form> <!-- .redone-contact ends -->
								</div> <!-- .col-md-8 form-block ends -->
							</div> <!-- .row section-content ends -->
						</div> <!-- .container ends -->
					</section> <!-- .form-map section-block ends -->
				</div> <!-- .col-md-9 ends -->
				
			</div> <!-- .row ends -->
		</div> <!-- .container ends -->
	</section> <!-- .page-content ends -->


<?php include 'includes/footer.php'; ?>