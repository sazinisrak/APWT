@extends('layouts.app2')
@section('title', 'Contact')
@section('PageTitle', 'Contact')
@section('CurrentPage')
    <li class="active">Contact</li>
@endsection
@section('content')
    <script>document.getElementById("contact").className = "nav-link active";</script>
		<!-- Start Contact Area -->
		<section class="main-contact-area ptb-100">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-8">
						<div class="contact-wrap">
							<div class="contact-form">
								<div class="contact-title">
									<h2>Write Us</h2>
									@if (!empty($message))
										<h3 class="text-primary">{{$message}}</h3>
									@endif
								</div>

								<form action="{{route('contactMessageSubmitted')}}" method="post">
									{{csrf_field()}}
									<div class="row">
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<label>Name</label>
												<input type="text" name="name" id="name" class="form-control" >
												<div class="help-block with-errors">
													@error('name')
														<span class="text-danger">{{$message}}</span>
													@enderror
												</div>
											</div>
										</div>
			
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<label>Email Address</label>
												<input name="email" id="email" class="form-control" >
												<div class="help-block with-errors">
													@error('email')
														<span class="text-danger">{{$message}}</span>
													@enderror
												</div>
											</div>
										</div>
			
										<div class="col-12">
											<div class="form-group">
												<label>Subject</label>
												<input type="text" name="subject" id="msg_subject" class="form-control">
												<div class="help-block with-errors">
													@error('subject')
														<span class="text-danger">{{$message}}</span>
													@enderror
												</div>
											</div>
										</div>
			
										<div class="col-12">
											<div class="form-group">
												<label>Message</label>
												<textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>
												<div class="help-block with-errors">
													@error('message')
														<span class="text-danger">{{$message}}</span>
													@enderror
												</div>
											</div>
										</div>
			
										<div class="col-lg-12 col-md-12">
											<button type="submit" class="default-btn btn-two">
												<span>Send Message</span>
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="contact-info">
							<h3>Our contact details</h3>

							<ul class="address">
								<li class="location">
									<i class="bx bxs-location-plus"></i>
									<span>Address</span>
									House:58, Road:05, Sector:12, Uttara, Dhaka-1230
								</li>
								<li>
									<i class="bx bxs-phone-call"></i>
									<span>Phone</span>
									<a href="tel:+8801731392620">+8801731392620</a>
								</li>
								<li>
									<i class="bx bxs-envelope"></i>
									<span>Email</span>
									<a href="#"><span class="__cf_email__" data-cfemail="036b666f6f6c43706672777a2d606c6e">mahim4163@gmail.com</span></a>
								</li>
							</ul>

							<div class="sidebar-follow-us">
								<h3>Follow us:</h3>
			
								<ul class="social-wrap">
									<li>
										<a href="#" target="_blank">
											<i class="bx bxl-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i class="bx bxl-linkedin"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Area -->

        <!-- Start Map Area -->
		<div class="map-area">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14594.138463494235!2d90.39961975778104!3d23.87065405600592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c405f620af8d%3A0xee837d87863eadd8!2zMjPCsDUyJzExLjciTiA5MMKwMjInNDkuMiJF!5e0!3m2!1sen!2sbd!4v1654087463387!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<!-- End Map Area -->
@endsection
