@extends('layouts.app')

@section('content')	
	<!-- Start Main Banner -->
		<div class="main-banner">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="container">
						<div class="row h-100 justify-content-center align-items-center">
							<div class="col-lg-5">
								<div class="hero-content">
									<h1>One-Stop Place for your Agricultural Comodities</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
								</div>
							</div>

							<div class="col-lg-6 offset-lg-1">
								<img src="{{ asset('img/pyramid.png') }}" class="wow fadeInDown" data-wow-delay="0.6s" alt="man">
								
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="shape1"><img src="assets/img/shape1.png" alt="shape"></div>
			<div class="shape2 rotateme"><img src="assets/img/shape2.svg" alt="shape"></div>
			<div class="shape3"><img src="assets/img/shape3.svg" alt="shape"></div>
			<div class="shape4"><img src="assets/img/shape4.svg" alt="shape"></div>
			<div class="shape5"><img src="assets/img/shape5.png" alt="shape"></div>
			<div class="shape6 rotateme"><img src="assets/img/shape4.svg" alt="shape"></div>
			<div class="shape7"><img src="assets/img/shape4.svg" alt="shape"></div>
			<div class="shape8 rotateme"><img src="assets/img/shape2.svg" alt="shape"></div>
		</div>
		<!-- End Main Banner -->
		<!-- Start Boxes Area -->
		<div class="boxes-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="single-box">
							<div class="icon">
								<i data-feather="activity"></i>
							</div>
							<h3>RimaEx Trading</h3>
							<p>Creating an inclusive, sustainable and efficient food system</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="single-box bg-f78acb">
							<div class="icon">
								<i data-feather="command"></i>
							</div>
							<h3>RimaEx Commodities Exchange</h3>
							<p>Building an inclusive and efficient market system for commodities exchange</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="single-box bg-c679e3">
							<div class="icon">
								<i data-feather="link"></i>
							</div>
							<h3>RimaEx Investment</h3>
							<p>Facilitating capital flows to grow inclusive commodity value chains in Agricultural Market</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Boxes Area -->
		<!-- Start Tracker Live Commodities Data -->
			<div class="container p-4">
				<div class="ticker-wrapper-h">
					<div class="heading">Live Data</div>
					
					<ul class="news-ticker-h" id="live-data">
						
					</ul>
				</div>
			</div>
		<!-- End Tracker Live Commodities Data -->
		<!-- Start Features Area -->
		<div class="features-area ptb-80 bg-f7fafd">
			<div class="container">
				<div class="section-title">
					<h2>Our Platforms</h2>
					<div class="bar"></div>
					<p style="font-size: 16px;">Our solutions deliver impressive wins in trading, financing and market system development for Agricultural commodities market.</p>
					<p style="font-size: 16px;">We provide a platform that supports wealth creation, risk management and efficient markets</p>
				</div>

				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="single-features">
							<div class="icon">
								<i data-feather="settings"></i>
							</div>

							<h3>Incredible Infrastructure</h3>
							<p>Lorem ipsum dolor amet, adipiscing, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="single-features">
							<div class="icon">
								<i data-feather="mail"></i>
							</div>

							<h3>Email Notifications</h3>
							<p>Lorem ipsum dolor amet, adipiscing, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="single-features">
							<div class="icon bg-c679e3">
								<i data-feather="grid"></i>
							</div>

							<h3>Simple Dashboard</h3>
							<p>Lorem ipsum dolor amet, adipiscing, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="single-features">
							<div class="icon bg-c679e3">
								<i data-feather="info"></i>
							</div>

							<h3>Information Retrieval</h3>
							<p>Lorem ipsum dolor amet, adipiscing, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="single-features">
							<div class="icon bg-eb6b3d">
								<i data-feather="mouse-pointer"></i>
							</div>

							<h3>Drag and Drop Functionality</h3>
							<p>Lorem ipsum dolor amet, adipiscing, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="single-features">
							<div class="icon bg-eb6b3d">
								<i data-feather="bell"></i>
							</div>

							<h3>Deadline Reminders</h3>
							<p>Lorem ipsum dolor amet, adipiscing, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Features Area -->

		<!-- Start Fun Facts Area -->
		<div class="funfacts-area ptb-80">
			<div class="container">
				<div class="section-title">
					<h2>We always try to understand users expectation</h2>
					<div class="bar"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>

				<div class="row">
					<div class="col-lg-3 col-md-3 col-6 col-sm-3">
						<div class="funfact">
							<h3><span class="odometer" data-count="180">00</span>K</h3>
							<p>Downloaded</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-3 col-6 col-sm-3">
						<div class="funfact">
							<h3><span class="odometer" data-count="20">00</span>K</h3>
							<p>Feedback</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-3 col-6 col-sm-3">
						<div class="funfact">
							<h3><span class="odometer" data-count="500">00</span>+</h3>
							<p>Workers</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-3 col-6 col-sm-3">
						<div class="funfact">
							<h3><span class="odometer" data-count="70">00</span>+</h3>
							<p>Contributors</p>
						</div>
					</div>
				</div>

				<div class="contact-cta-box">
					<h3>Have any question about us?</h3>
					<p>Don't hesitate to contact us</p>
					<a href="contact.html" class="btn btn-primary">Contact Us</a>
				</div>

				<div class="map-bg">
					<img src="assets/img/map.png" alt="map">
				</div>
			</div>
		</div>
		<!-- End Fun Facts Area -->
@endsection