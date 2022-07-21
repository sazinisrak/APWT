@extends('layouts.app2')
@section('title', 'About us')
@section('PageTitle', 'About us')
@section('CurrentPage')
    <li class="active">About us</li>
@endsection
@section('content')
    <script>document.getElementById("aboutUs").className = "nav-link active";</script>
    		<!-- Start About Us Area -->
		<section class="about-us-area pt-100 pb-70">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="about-img">
							<img src="assets/img/about-img.jpg" alt="Image">
						</div>
					</div>

					<div class="col-lg-6">
						<div class="about-content">
							<div class="about-title">
								<span>About Us</span>
								<h2>Without stopping for a moment we give you best technology experience discussing from our expertise to stop threats being theft or damaged.</h2>
							</div>

							<div class="tab">
								<ul class="tabs">
									<li>
										Our Experience
									</li>
									<li>
										Why Us?
									</li>
									<li>
										Our Approach
									</li>
								</ul>

								<div class="tab_content">
									<div class="tabs_item">
										<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat atque quibusdam fuga natus non necessitatibus eveniet maiores nostrum esse ut voluptates sint dolores, voluptatum consequatur ad est enim perferendis reprehenderit.</p>

										<ul>
											<li>
												<i class="bx bx-check-circle"></i>
												Trusted Partner
											</li>
											<li>
												<i class="bx bx-check-circle"></i>
												Product Security
											</li>
											<li>
												<i class="bx bx-check-circle"></i>
												System Security
											</li>
											<li>
												<i class="bx bx-check-circle"></i>
												Operational Security
											</li>
										</ul>
									</div>

									<div class="tabs_item">
										<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat atque quibusdam fuga natus non necessitatibus eveniet maiores nostrum esse ut voluptates sint dolores, voluptatum consequatur ad est enim perferendis reprehenderit.</p>

										<ul>
											<li>
												<i class="bx bx-check-circle"></i>
												Trusted Partner
											</li>
											<li>
												<i class="bx bx-check-circle"></i>
												Product Security
											</li>
											<li>
												<i class="bx bx-check-circle"></i>
												System Security
											</li>
											<li>
												<i class="bx bx-check-circle"></i>
												Operational Security
											</li>
										</ul>
									</div>

									<div class="tabs_item">
										<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat atque quibusdam fuga natus non necessitatibus eveniet maiores nostrum esse ut voluptates sint dolores, voluptatum consequatur ad est enim perferendis reprehenderit.</p>

										<ul>
											<li>
												<i class="bx bx-check-circle"></i>
												Trusted Partner
											</li>
											<li>
												<i class="bx bx-check-circle"></i>
												Product Security
											</li>
											<li>
												<i class="bx bx-check-circle"></i>
												System Security
											</li>
											<li>
												<i class="bx bx-check-circle"></i>
												Operational Security
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About Us Area -->
@endsection
