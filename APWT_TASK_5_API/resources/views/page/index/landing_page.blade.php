@extends('layouts.app')
@section('title', 'Home')
@section('content')
<script>document.getElementById("home").className = "nav-link active";</script>
	<section class="banner-area bg-1">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-12">
					<div class="banner-content">
						<span class="top-title">World Class Cyber Security</span>
						<h1>Powerful Protection Easy Recovery</h1>
						<p>Cybersecurity is the protection  from the theft to protect of our computer systems and networks or being damaged of our hardware and software.</p>
						<div class="banner-btn">
							<a href="{{route('contact')}}" class="default-btn">
								<span>Contact Us</span>
							</a>
						</div>
					</div>
				</div>

				<div class="col-lg-6 col-md-12">
					<div class="banner-image">
						<img src="assets/img/banner/banner_1.jpg" alt="image">
					</div>
				</div>
			</div>
		</div>
	</section>	
@endsection
