<?php include 'includes/header.php'; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

<style type="text/css" media="screen">
    .gallery-container h1 {
    text-align: center;
    margin-top: 70px;
    font-family: 'Droid Sans', sans-serif;
    font-weight: bold;
    color: #58595a;
}

.gallery-container p.page-description {
    text-align: center;
    margin: 30px auto;
    font-size: 18px;
    color: #85878c;
}

.tz-gallery {
    padding: 40px;
}

.tz-gallery .thumbnail {
    padding: 0;
    margin-bottom: 30px;
    background-color: #fff;
    border-radius: 4px;
    border: none;
    transition: 0.15s ease-in-out;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.06);
}

.tz-gallery .thumbnail:hover {
    transform: translateY(-10px) scale(1.02);
}

.tz-gallery .lightbox img {
    border-radius: 4px 4px 0 0;
}

.tz-gallery .caption{
    padding: 26px 30px;
    text-align: center;
}

.tz-gallery .caption h3 {
    font-size: 14px;
    font-weight: bold;
    margin-top: 0;
}

.tz-gallery .caption p {
    font-size: 12px;
    color: #7b7d7d;
    margin: 0;
}

.baguetteBox-button {
    background-color: transparent !important;
}

.parallax {
  background-image: url("img/background.jpeg");

  /* Set a specific height */
  min-height: 500px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

	<?php include 'includes/home-banner.php'; ?>
	<section class="intro-section section-block" id="intro-section">
		<div class="container">
			<div class="section-title-block">
				<h2>About Us <span>Know something about us..</span></h2>
				<div class="title-style">
					<i class="icon ion-ios-star"></i>
					<i class="icon ion-ios-star"></i>
					<i class="icon ion-ios-star"></i>
				</div>
				<p>
				</p>
			</div> <!-- .section-title-block ends -->
			
		</div> <!-- .container ends -->
	</section> <!-- .intro-section ends -->


	<!-- About Us Section -->
	<?php include 'about.php'; ?>


	<section>
		<div class="paragraph-section">
			<div>
				<div class="container-fluid">
					<div class="parallax"></div>
					<div style="height:300px;font-size:26px">
						<p>Scroll Up and Down this page to see the parallax scrolling effect.
						This div is just here to enable scrolling.Scroll Up and Down this page to see the parallax scrolling effect.
						This div is just here to enable scrolling.Scroll Up and Down this page to see the parallax scrolling effect.
						This div is just here to enable scrolling.Scroll Up and Down this page to see the parallax scrolling effect.
						This div is just here to enable scrolling.</p>
						<p>Scroll Up and Down this page to see the parallax scrolling effect.
						This div is just here to enable scrolling.Scroll Up and Down this page to see the parallax scrolling effect.
						This div is just here to enable scrolling.Scroll Up and Down this page to see the parallax scrolling effect.
						This div is just here to enable scrolling.</p>
					</div>
				</div>
			</div>
		</div>
	</section>


	
	<!-- GAllery Section -->
	<!-- Sections -->
        <section id="features" class="sections lightbg">

            <div class="heading-content text-center">
                <h3>Media and Gallery</h1>
                    <!-- <p>Hi, i’m Paul Lapkin, Experience Crafter from Canada.</p> -->
            </div>


          <div class="container gallery-container">
    
    <div class="tz-gallery">

        <div class="row">

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="img/office.jpeg">
                        <img src="img/office.jpeg" alt="Park">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="img/office.jpeg">
                        <img src="img/office.jpeg" alt="Bridge">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="img/office.jpeg">
                        <img src="img/office.jpeg" alt="Tunnel">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="img/office.jpeg">
                        <img src="img/office.jpeg" alt="Coast">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="img/office.jpeg">
                        <img src="img/office.jpeg" alt="Rails">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="img/office.jpeg">
                        <img src="img/office.jpeg" alt="Traffic">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>


<!-- TESTINOMIAL SECTION -->
<section class="press-release section-block-2" id="press-release">
		<div class="container">
			<div class="section-title-block-2">
				<h3>Testinomials</h3>
				<p>
					Lorem ipsum in reprehe velit essn
					proident, sunt eprehe velin culpa qui id est laborum.
				</p>
			</div> 

			<div class="row section-content">
				<div class="col-md-4 col-sm-12">
					<div class="image-block">
						<img class="img-responsive" src="img/test.jpeg" alt="press release image">
					</div> 

					<div class="content-block">
						<h3>Mr. Sanchit Singhal</h3>

						<div class="content-details">
							<span class="press-date">Mar 2, 2019</span>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit	tempor dolore mag culit anim id est laborum.
							</p>
							<a class="read-more-link" href="#">Read More</a>
						</div> 
					</div>
				</div>

				<div class="col-md-4 col-sm-12">
					<div class="image-block">
						<img class="img-responsive" src="img/test.jpeg" alt="press release image">
					</div> 

					<div class="content-block">
						<h3>Mr. Sanchit Singhal</h3>

						<div class="content-details">
							<span class="press-date">Mar 2, 2019</span>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor dolore mag culit anim id est laborum.
							</p>
							<a class="read-more-link" href="#">Read More</a>
						</div> 
					</div> 
				</div> 

				<div class="col-md-4 col-sm-12">
					<div class="image-block">
						<img class="img-responsive" src="img/test.jpeg" alt="press release image">
					</div>

					<div class="content-block">
						<h3>Mr. Sanchit Singhal</h3>

						<div class="content-details">
							<span class="press-date">Mar 2, 2019</span>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor dolore mag culit anim id est laborum.
							</p>
							<a class="read-more-link" href="#">Read More</a>
						</div> 
					</div> 
				</div>
			</div> 
		</div> 
	</section> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>  
        </section>

<?php include 'includes/footer.php'; ?>