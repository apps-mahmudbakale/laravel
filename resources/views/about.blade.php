@extends('layouts.app')
@section('content')
	  <!-- Start Page Title -->
	  <div class="page-title-area">
		<div class="d-table">
			
				<div class="container">
					{{-- <h2>About Us</h2> --}}
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
	<!-- End Page Title -->

	<!-- Start About Area -->
	<div class="about-area ptb-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="about-image">
						<img src="assets/img/1.png" alt="image">
					</div>
				</div>

				<div class="col-lg-6 col-md-12">
					<div class="about-content">
						<div class="section-title">
							<h2>About Us</h2>
							<div class="bar"></div>
							<p>Rima Agricultural Commodity Exchange is a structured market place where buyers/sellers can meet with each other to know what they have for sale/purchase, quantity and price. The commodities exchange transactionare governed by rule and regulations for fair and transparent transactions. The exchange is open to all buyers and sellers. All transactions are conducted through Rima Agricultural Commodity Exchange authorised brokers.</p>
						</div>
						<p>Rima Agricultural Commodity Exchange will provide an efficient and transparent Nigerian and regional agricultural commodity exchange supported by a warehouse certification and receipts system to enhance market access, liquidity and credibility in the agricultural commodity market.</p>
					</div>
				</div>
			</div>

			{{-- <div class="about-inner-area">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="about-text">
							<h3>Our History</h3>
							<p>Lorem ipsum dolor sit amet, con se ctetur adipiscing elit. In sagittis eg esta ante, sed viverra nunc tinci dunt nec elei fend et tiram.</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="about-text">
							<h3>Our Mission</h3>
							<p>Lorem ipsum dolor sit amet, con se ctetur adipiscing elit. In sagittis eg esta ante, sed viverra nunc tinci dunt nec elei fend et tiram.</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
						<div class="about-text">
							<h3>Who we are</h3>
							<p>Lorem ipsum dolor sit amet, con se ctetur adipiscing elit. In sagittis eg esta ante, sed viverra nunc tinci dunt nec elei fend et tiram.</p>
						</div>
					</div>
				</div>
			</div> --}}
		</div>
	</div>
	<!-- End About Area -->

	<!-- Start Team Area -->
	<div class="team-area ptb-80 bg-f9f6f6">
		<div class="container">
			<div class="section-title">
				<h2>Our Awesome Team</h2>
				<div class="bar"></div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
		</div>

		<div class="team-slides owl-carousel owl-theme">
			<div class="single-team">
				<div class="team-image">
					<img src="assets/img/team-image/1.jpg" alt="image">
				</div>

				<div class="team-content">
					<div class="team-info">
						<h3>Josh Buttler</h3>
						<span>CEO & Founder</span>
					</div>

					<ul>
						<li><a href="#" target="_blank"><i data-feather="facebook"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="twitter"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="linkedin"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="gitlab"></i></a></li>
					</ul>

					<p>Risus commodo viverra maecenas accumsan lacus vel facilisis quis ipsum. </p>
				</div>
			</div>

			<div class="single-team">
				<div class="team-image">
					<img src="assets/img/team-image/2.jpg" alt="image">
				</div>

				<div class="team-content">
					<div class="team-info">
						<h3>Alex Maxwel</h3>
						<span>Marketing Manager</span>
					</div>

					<ul>
						<li><a href="#" target="_blank"><i data-feather="facebook"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="twitter"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="linkedin"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="gitlab"></i></a></li>
					</ul>

					<p>Risus commodo viverra maecenas accumsan lacus vel facilisis quis ipsum. </p>
				</div>
			</div>
		
			<div class="single-team">
				<div class="team-image">
					<img src="assets/img/team-image/3.jpg" alt="image">
				</div>

				<div class="team-content">
					<div class="team-info">
						<h3>Janny Cotller</h3>
						<span>Web Developer</span>
					</div>

					<ul>
						<li><a href="#" target="_blank"><i data-feather="facebook"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="twitter"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="linkedin"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="gitlab"></i></a></li>
					</ul>

					<p>Risus commodo viverra maecenas accumsan lacus vel facilisis quis ipsum. </p>
				</div>
			</div>

			<div class="single-team">
				<div class="team-image">
					<img src="assets/img/team-image/4.jpg" alt="image">
				</div>

				<div class="team-content">
					<div class="team-info">
						<h3>Jason Statham</h3>
						<span>UX/UI Designer</span>
					</div>

					<ul>
						<li><a href="#" target="_blank"><i data-feather="facebook"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="twitter"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="linkedin"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="gitlab"></i></a></li>
					</ul>

					<p>Risus commodo viverra maecenas accumsan lacus vel facilisis quis ipsum. </p>
				</div>
			</div>

			<div class="single-team">
				<div class="team-image">
					<img src="assets/img/team-image/5.jpg" alt="image">
				</div>

				<div class="team-content">
					<div class="team-info">
						<h3>Corey Anderson</h3>
						<span>Project Manager</span>
					</div>

					<ul>
						<li><a href="#" target="_blank"><i data-feather="facebook"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="twitter"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="linkedin"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="gitlab"></i></a></li>
					</ul>

					<p>Risus commodo viverra maecenas accumsan lacus vel facilisis quis ipsum. </p>
				</div>
			</div>

			<div class="single-team">
				<div class="team-image">
					<img src="assets/img/team-image/1.jpg" alt="image">
				</div>

				<div class="team-content">
					<div class="team-info">
						<h3>Josh Buttler</h3>
						<span>CEO & Founder</span>
					</div>

					<ul>
						<li><a href="#" target="_blank"><i data-feather="facebook"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="twitter"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="linkedin"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="gitlab"></i></a></li>
					</ul>

					<p>Risus commodo viverra maecenas accumsan lacus vel facilisis quis ipsum. </p>
				</div>
			</div>

			<div class="single-team">
				<div class="team-image">
					<img src="assets/img/team-image/2.jpg" alt="image">
				</div>

				<div class="team-content">
					<div class="team-info">
						<h3>Alex Maxwel</h3>
						<span>Marketing Manager</span>
					</div>

					<ul>
						<li><a href="#" target="_blank"><i data-feather="facebook"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="twitter"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="linkedin"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="gitlab"></i></a></li>
					</ul>

					<p>Risus commodo viverra maecenas accumsan lacus vel facilisis quis ipsum. </p>
				</div>
			</div>

			<div class="single-team">
				<div class="team-image">
					<img src="assets/img/team-image/3.jpg" alt="image">
				</div>

				<div class="team-content">
					<div class="team-info">
						<h3>Janny Cotller</h3>
						<span>Web Developer</span>
					</div>

					<ul>
						<li><a href="#" target="_blank"><i data-feather="facebook"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="twitter"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="linkedin"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="gitlab"></i></a></li>
					</ul>

					<p>Risus commodo viverra maecenas accumsan lacus vel facilisis quis ipsum. </p>
				</div>
			</div>

			<div class="single-team">
				<div class="team-image">
					<img src="assets/img/team-image/4.jpg" alt="image">
				</div>

				<div class="team-content">
					<div class="team-info">
						<h3>Jason Statham</h3>
						<span>UX/UI Designer</span>
					</div>

					<ul>
						<li><a href="#" target="_blank"><i data-feather="facebook"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="twitter"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="linkedin"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="gitlab"></i></a></li>
					</ul>

					<p>Risus commodo viverra maecenas accumsan lacus vel facilisis quis ipsum. </p>
				</div>
			</div>

			<div class="single-team">
				<div class="team-image">
					<img src="assets/img/team-image/5.jpg" alt="image">
				</div>

				<div class="team-content">
					<div class="team-info">
						<h3>Corey Anderson</h3>
						<span>Project Manager</span>
					</div>

					<ul>
						<li><a href="#" target="_blank"><i data-feather="facebook"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="twitter"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="linkedin"></i></a></li>
						<li><a href="#" target="_blank"><i data-feather="gitlab"></i></a></li>
					</ul>

					<p>Risus commodo viverra maecenas accumsan lacus vel facilisis quis ipsum. </p>
				</div>
			</div>
		</div>
	</div>
	<!-- End Team Area -->
@endsection
      