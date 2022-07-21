@php
$admin = session()->get('admin');
@endphp
@extends('layouts.adminLayout')
@section('title', 'Profile')
@section('picture', $admin['picture'])
@section('name', $admin['name'])
@section('email', $admin['email'])
@section('contant')
    <!-- profile -->

    <div class="page-content">

        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="position-relative">
                        <div
                            class="d-flex justify-content-between align-items-center position-absolute top-90 w-100 px-2 px-md-4 mt-n4">
                            <div>
                                <img class="wd-70 rounded-circle" src="{{ $admin['picture'] }}" alt="profile">
                                <span class="h4 ms-3 text-dark">{{ $admin['name'] }}</span>
                            </div>
                            <div class="d-none d-md-block">
                                <a href="{{route('adminEditProfile')}}" class="btn btn-primary btn-icon-text">
                                    <i data-feather="edit" class="btn-icon-prepend"></i> Edit profile
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center p-3 rounded-bottom">
                        <ul class="d-flex align-items-center m-0 p-0">
                            <li class="d-flex align-items-center active">
                                <a class="card-title d-md-block text-primary" href="#">
                                    <h6>Profile</h6>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row profile-body">
            <!-- unused area -->
            <div class="col-md-4 col-xl-2">
            </div>
            <!-- unused area end-->

            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-8">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card rounded d-flex justify-content-center p-3">
                            <div class="card-body">
                                <h6 class="card-title">Personal Information</h6>
                                <form>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" disabled value="{{$admin['username']}}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" disabled value="{{$admin['name']}}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="email" disabled value="{{$admin['email']}}">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- middle wrapper end -->
        </div>

    </div>
    <!-- profile end -->
@endsection
