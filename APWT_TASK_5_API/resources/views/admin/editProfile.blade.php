@php
$admin = session()->get('admin');
@endphp
@extends('layouts.adminLayout')
@section('title', 'Edit Profile')
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
                                <button class="btn btn-primary btn-icon-text">
                                    <i data-feather="upload" class="btn-icon-prepend"></i> Change Image
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center p-3 rounded-bottom">
                        <ul class="d-flex align-items-center m-0 p-0">
                            <li class="d-flex align-items-center active">
                                <a class="card-title d-md-block text-primary" href="#">
                                    <h6>Edit Profile</h6>
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
                                @if (!empty($success_msg))
                                    <h4 class="text-primary">{{$success_msg}}</h4>
                                @endif
                                <form action="{{route('adminEditProfileSubmitted')}}" method="post">
                                    {{csrf_field()}}

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{$admin['name']}}" placeholder="Name">
                                        @error('name')
                                            <span class="font-weight-light text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="email" name="email" value="{{$admin['email']}}" placeholder="Email">
                                        @error('email')
                                            <span class="font-weight-light text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary me-2">Update</button>
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
