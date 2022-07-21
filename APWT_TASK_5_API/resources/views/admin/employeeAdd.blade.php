@php 
    $admin = session()->get('admin')
@endphp
@extends('layouts.adminLayout')
@section('title', 'Add Employee')
@section('picture', $admin['picture'])
@section('name', $admin['name'])
@section('email', $admin['email'])
@section('contant') 
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
                            <h6 class="card-title">Employee Information</h6>
                            @if (!empty($success_msg))
                                <h6 class="card-title text-primary">{{$success_msg}}</h6>
                            @endif
                            <form action="{{route('adminEmployeeAddSubmitted')}}" method="post">
                                {{csrf_field()}}

                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="username">
                                    @error('username')
                                        <span class="font-weight-light text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                    @error('name')
                                        <span class="font-weight-light text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                    @error('email')
                                        <span class="font-weight-light text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    @error('password')
                                        <span class="font-weight-light text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary me-2">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- middle wrapper end -->
    </div> 
@endsection