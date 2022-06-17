@extends('frontend.layout.app')
@section('title','E-SHOP || HOME PAGE')
@section('main-content')



			<!-- INNER PAGE WRAPPER
			============================================= -->	
			<div class="inner-page-wrapper">




				<!-- BREADCRUMB
				============================================= -->
				<div id="breadcrumb" class="division">
					<div class="container">
						<div class="row">

							<!-- BREADCRUMB NAV -->
							<div class="col-md-12">
								<nav aria-label="breadcrumb">
								  	<ol class="breadcrumb">
								    	<li class="breadcrumb-item"><a href="demo-1.html">Home</a></li>
								    	<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
								  	</ol>
								</nav>
							</div> 

						</div>	 <!-- End row -->
					</div>	<!-- End container -->		
				</div>	<!-- END BREADCRUMB -->	




				<!-- CONTACTS-2
				============================================= -->
				<section id="contacts-2" class="wide-100 contacts-section division">
					<div class="container">


						<!-- SECTION TITLE -->	
						<div class="row">	
							<div class="col-md-12">
								<div class="section-title title-centered mb-60">

									<!-- Title 	-->	
									<h3 class="h3-sm">Need Help? Get in Touch</h3>	

									<!-- Text -->	
									<p class="p-md">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero 
									   tempus, blandit posuere and ligula varius magna a porta
									</p>

								</div>
							</div>
						</div>


						<div class="contacts-2-holder">
							<div class="row d-flex align-items-center">


								<!-- CONTACT BOX #1 -->
								<div class="col-lg-4">
									<div class="contact-box b-right">

										<!-- Icon --> 
										<img class="img-75" src="images/icons/pin.png" alt="contacts-icon" />

										<!-- Title -->	
										<h5 class="h5-md">Our Location</h5>

										<!-- Text -->	
										<p>121 King Street, Melbourne, Victoria 3000 Australia</p>	

										<!-- Button -->	
										<a href="contacts.html" class="btn btn-tra-grey rose-hover">Find Location On Map</a>
										
									</div>			
								</div>	


								<!-- CONTACT BOX #2 -->
								<div class="col-lg-4">
									<div class="contact-box b-right">

										<!-- Icon --> 
										<img class="img-75" src="images/icons/world-map.png" alt="contacts-icon" />
										
										<!-- Title -->	
										<h5 class="h5-md">Partnership Request</h5>

										<!-- Text -->	
										<p>For partnership and business development inquiries</p>	

										<!-- Button -->	
										<a href="mailto:yourdomain@mail.com" class="btn btn-tra-grey rose-hover">hello@yourdomain.com</a>

									</div>			
								</div>	


								<!-- CONTACT BOX #3 -->
								<div class="col-lg-4">
									<div class="contact-box">

										<!-- Icon --> 
										<img class="img-75" src="images/icons/request.png" alt="contacts-icon" />

										<!-- Title -->	
										<h5 class="h5-md">Need Help?</h5>

										<!-- Text -->	
										<p>Have questions about teaching and career opportunities?</p>	

										<!-- Button -->	
										<a href="mailto:yourdomain@mail.com" class="btn btn-tra-grey rose-hover">hello@yourdomain.com</a>
										
									</div>			
								</div>	


							</div>	  <!-- End row -->
						</div>    <!-- End contacts-holder -->
					</div>	   <!-- End container -->	
				</section>	<!-- END CONTACTS-2 -->




				<!-- GOOGLE MAP
				============================================= -->
				<div id="gmap" class="map-section division">
					<div class="container">
						<div class="row">	
							<div class="col-md-12">
								<div class="google-map">
						
									<!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->					
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.838357620288!2d144.95358331497258!3d-37.81725497975171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2zMTIxIEtpbmcgU3QsIE1lbGJvdXJuZSBWSUMgMzAwMCwg0JDQstGB0YLRgNCw0LvQuNGP!5e0!3m2!1sru!2sua!4v1584204664155!5m2!1sru!2sua"></iframe>
										
								</div>

							</div>
						</div>	 <!-- End row -->
					</div>	<!-- End container -->		
				</div>	<!-- END GOOGLE MAP-->	


@endsection