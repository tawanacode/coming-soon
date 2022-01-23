<?php
	$page_title = 'Salbany and Torto Law Firm';
	$current_page_link ='index';
	include ('includes/header.html');
?>

    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background:url('images/slider-bg.png') repeat, url('images/slide-1.jpg') no-repeat center;"></div>
                <div class="carousel-caption">
                    <h1>Salbany &amp; Torto Attorneys</h1>
						<p>Salbany &amp; Torto Attorneys is multi-specialty law firm which raison d'etre is to provide personalized and professional service and to dispense practicable advice.The firm Salbany &amp; Torto Attorneys was established in January of 2007 and has in the short time that it has been in existence managed to attract premier clientele comprising of a number of statutory corporations.</p>
						<p><a class="btn btn-custom" role="button" href="about.php">Learn More</a></p>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background:url('images/slider-bg.png') repeat, url('images/slide-1.jpg') no-repeat center;"></div>
                <div class="carousel-caption">
                    <h1>Salbany &amp; Torto Attorneys</h1>
						<p>Services: The firm's services cover, among others, resolution of labour disputes, conveyancing and property law, corporate and commercial law, litigation, collections and arbitration.</p>
						<p><a class="btn btn-custom" href="services.php">Learn More</a></p>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background:url('images/slider-bg.png') repeat, url('images/slide-1.jpg') no-repeat center;"></div>
                <div class="carousel-caption">
                    <h1>Salbany &amp; Torto Attorneys</h1>
						<p>Clients: Salbany &amp; Torto Attorneys provides advisory services to regulatory bodies and organizations in Botswana. This however, does not exclude private and other commercial clients.</p>
						<p><a class="btn btn-custom" href="clients.php">Learn More</a></p>
                </div>
            </div>
        </div>

    </div>

    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-lg-12 text-center practice-areas">
                    <h1>Practice Areas</h1>
                    <p>The firm's services cover, among others, resolution of labour disputes, conveyancing and property law,<br/>
corporate and commercial law, litigation, collections and arbitration.</p>
                </div>
                <div class="col-md-3 col-sm-6">
					<div class="img-home-portfolio">
                        <img class="img-responsive" src="images/arbitration.png" alt="arbitration">
						<h3>Arbitration</h3>
					</div>
                </div>
                <div class="col-md-3 col-sm-6">
					<div class="img-home-portfolio">
                        <img class="img-responsive" src="images/dept-collection.png" alt="debt collection">
							<h3>Debt Collection</h3>
					</div>
                </div>
                <div class="col-md-3 col-sm-6">
					<div class="img-home-portfolio">
                        <img class="img-responsive" src="images/litigation.png" alt="Litigation">
							<h3>Litigation</h3>
					</div>
                </div>
                <div class="col-md-3 col-sm-6">
					<div class="img-home-portfolio last-portfolio-item">
                    <a href="services.php">
                        <img class="img-responsive" src="images/services.png">
							<h3>More Services</h3>
                    </a>
					</div>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section -->
	
	<?php
	include ('includes/footer.html');
	?>