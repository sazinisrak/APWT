@extends('layouts.app2')
@section('title', 'Teams')
@section('PageTitle', 'Teams')
@section('CurrentPage')
    <li class="active">Teams</li>
@endsection
@section('content')
    <script>document.getElementById("teams").className = "nav-link active";</script>
			<!-- Start Team Area -->
			<section class="team-area pt-100 pb-70">
				<div class="container">
					<div class="section-title">
						<span>Professionals</span>
						<h2>Meet our skilled team</h2>
					</div>
	
					<div class="row">
						@foreach ($all_team_member as $member)
							<div class="col-lg-4 col-sm-6">
								<div class="single-team">
									<img src="<?php echo $member['picture'] ?>" alt="Image">

									<div class="team-content">
										<h3><?php echo $member['name'] ?></h3>
										<span><?php echo $member['designation'] ?></span>

										<ul>
											<li>
												<a href="<?php echo $member['facebook'] ?>" target="_blank">
													<i class="bx bxl-facebook"></i>
												</a>
											</li>
											<li>
												<a href="<?php echo $member['linkedin'] ?>" target="_blank">
													<i class="bx bxl-linkedin"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</section>
			<!-- End Team Area -->
@endsection
