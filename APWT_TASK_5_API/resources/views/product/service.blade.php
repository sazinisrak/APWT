@extends('layouts.app2')
@section('title', 'Services')
@section('PageTitle', 'Services')
@section('CurrentPage')
    <li class="active">Services</li>
@endsection
@section('content')
    <script>document.getElementById("service").className = "nav-link active";</script>
    <section class="safety-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Cybersecurity services</span>
                <h2>You can protect your organization’s cybersecurity by services us</h2>
            </div>

            <div class="row">
                @foreach ($all_service as $service)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-safety overly-one">
                            <div class="overly-two">
                                <img src="<?php echo $service['picture'] ?>" alt="Image">
                                <a href="<?php echo $service['link'] ?>">
                                    <h3><?php echo $service['name'] ?></h3>
                                </a>
                                <p><?php echo $service['description'] ?></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>	
@endsection
