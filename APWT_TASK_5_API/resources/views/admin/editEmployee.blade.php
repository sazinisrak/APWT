@php 
    $admin = session()->get('admin')
@endphp
@extends('layouts.adminLayout')
@section('title', 'Edit Employee')
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
                            <form action="{{route('adminEditEmployeeSubmitted')}}" method="post">
                                {{csrf_field()}}

                                <div class="mb-3">
                                    <input type="hidden" class="form-control" name="username" value={{$employee['username']}}>
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" value={{$employee['username']}} disabled>
                                </div>

                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value={{$employee['name']}}  placeholder="Name">
                                    @error('name')
                                        <span class="font-weight-light text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value={{$employee['email']}}  placeholder="Email">
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
@endsection